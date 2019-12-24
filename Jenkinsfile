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
        sh 'cat keyfile.json | docker login -u _json_key --password-stdin https://gcr.io'
        sh 'docker image push gcr.io/api-project-367056975125/dbz-tech-website:$(git rev-parse --short HEAD)'
      }
    }

  }
}