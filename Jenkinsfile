pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        sh 'docker image build --tag gcr.io/api-project-367056975125/dbz-tech-website:$(git rev-parse --short HEAD) .'
      }
    }

    stage('Push') {
      steps {
        sh 'cat $GCP_SERVICE_ACCOUNT | docker login -u _json_key --password-stdin https://gcr.io'
        sh '''docker image tag gcr.io/api-project-367056975125/dbz-tech-website:$(git rev-parse --short HEAD) gcr.io/api-project-367056975125/dbz-tech-website:latest
docker image push gcr.io/api-project-367056975125/dbz-tech-website:$(git rev-parse --short HEAD)
docker image push gcr.io/api-project-367056975125/dbz-tech-website:latest'''
      }
    }

    stage('Deploy') {
      steps {
        sh 'docker image pull google/cloud-sdk'
        sh '''docker container run -e "GCP_SERVICE_ACCOUNT=$GCP_SERVICE_ACCOUNT" google/cloud-sdk ls -R /jenkins


# docker container run -v test.txt:/gcp_service_account.json google/cloud-sdk gcloud auth activate-service-account --key-file /gcp_service_account.json; gcloud container clusters get-credentials dbz-arterion; kubectl get pods  '''
      }
    }

  }
  environment {
    GCP_SERVICE_ACCOUNT = credentials('gcp-service-account')
  }
}