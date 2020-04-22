pipeline {
    agent { docker { image 'php' } }
    stages {
        stage('serverless deploy') {
            steps {
                sh 'curl -o- -L https://slss.io/install | bash'
                sh 'serverless'
            }
        }
    }
}