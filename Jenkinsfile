pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        sh 'docker image build --tag gcr.io/api-project-367056975125/$PROJECT_NAME:$(git rev-parse --short HEAD) .'
      }
    }

    stage('Push') {
      steps {
        sh 'cat $GCP_SERVICE_ACCOUNT | docker login -u _json_key --password-stdin https://gcr.io'
        sh '''docker image tag gcr.io/api-project-367056975125/$PROJECT_NAME:$(git rev-parse --short HEAD) gcr.io/api-project-367056975125/$PROJECT_NAME:latest
docker image push gcr.io/api-project-367056975125/$PROJECT_NAME:$(git rev-parse --short HEAD)
docker image push gcr.io/api-project-367056975125/$PROJECT_NAME:latest'''
      }
    }

    stage('Deploy') {
      when { branch 'master' }
      steps {
        sh 'docker image pull google/cloud-sdk'
        sh '''docker container run \\
-e "GCP_JSON=$(cat $GCP_SERVICE_ACCOUNT)" \\
-e "PROJECT_NAME=$PROJECT_NAME" \\
-e "IMAGE_TAG=$(git rev-parse --short HEAD)" \\
google/cloud-sdk \\
bash -c "printenv GCP_JSON > /gcp_service_account.json \\
&& echo "$PROJECT_NAME=gcr.io/api-project-367056975125/$PROJECT_NAME:\\${IMAGE_TAG}" \\
&& gcloud auth activate-service-account  --key-file /gcp_service_account.json \\
&& gcloud container clusters get-credentials dbz-arterion --zone us-east1-b \\
&&  kubectl set image deployment/$PROJECT_NAME $PROJECT_NAME=gcr.io/api-project-367056975125/$PROJECT_NAME:\\$IMAGE_TAG --record"'''
      }
    }

  }
  environment {
    GCP_SERVICE_ACCOUNT = credentials('gcp-service-account')
    PROJECT_NAME = 'dbz-tech-website'
  }
}
