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

  }
  environment {
    GCP_SERVICE_ACCOUNT = credentials('gcp-service-account')
  }
}