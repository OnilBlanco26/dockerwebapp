pipeline {
  agent any
  stages {
    stage('Build and Deploy') {
      steps {
        sh '''sudo docker-compose up -d --build
  '''
      }
    }

  }
}