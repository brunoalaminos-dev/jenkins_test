pipeline {
    agent { docker { image 'php' } }
    stages {
        stage('serverless deploy') {
            steps {
                sh 'npm install -g serverless'
                sh 'serverless --version'
            }
        }
    }
}