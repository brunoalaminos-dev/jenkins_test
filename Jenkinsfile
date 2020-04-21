pipeline {
    agent { docker { image 'php' } }
    stages {
        stage('version') {
            steps {
                sh 'php --version'
            }
        }

        stage('hello world') {
            steps {
                sh 'echo "Hello World"'
                sh '''
                    echo "Multiline shell steps works too"
                    ls -lah
                '''
            }
        }

        stage('serverless deploy') {
            steps {
                sh 'serverless deploy'
            }
        }
    }
}