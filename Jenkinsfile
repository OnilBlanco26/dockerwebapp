pipeline {
  agent any
  stages {
    stage('Build and Deploy') {
      steps {
        sh '''docker compose up -d --build
  '''
      }
    }

  }
}