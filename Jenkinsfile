pipeline {
    agent any

    stages {
        stage('Build and Deploy') {
            steps {

                // Building and deploying the Docker containers
                sh '''
                    docker-compose up -d --build
                '''
            }
        }
    }
}
