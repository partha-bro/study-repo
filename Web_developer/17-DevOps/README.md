# Live DevOps Project - Jenkins CICD with GitHub Integration
    Source Link: https://www.youtube.com/watch?v=nplH3BzKHPk

## CICD : Continous Integration Continous Deployment
- CICD
    - AWS or Ubuntu OS
    - GitHub
    - Jenkins
    - docker
    - github webhook

## AWS
- Create AWS EC2 instance of Ubuntu

## Ubuntu Instance
- sudo apt update
- Java Install
    - sudo apt install openjdk-11-jre
    - java -version

- Jenkins Install
    - curl -fsSL https://pkg.jenkins.io/debian/jenkins.io.key | sudo tee \   /usr/share/keyrings/jenkins-keyring.asc > /dev/null 
    - echo deb [signed-by=/usr/share/keyrings/jenkins-keyring.asc] \   https://pkg.jenkins.io/debian binary/ | sudo tee \   /etc/apt/sources.list.d/jenkins.list > /dev/null
    - sudo apt-get update 
    - sudo apt-get install jenkins
    - sudo systemctl enable jenkins
    - sudo systemctl start jenkins
    - sudo systemctl status jenkins
    - sudo cat /var/lib/jenkins/secrets/initialAdminPassword
    - history

## Jekins Setup
- Create first admin user and password

- Choose freestyle 

- Instance Configuration with any port [but you have to allow that port in security of instance]
    - Open port
    - Goto EC2 instance > security > Inbound rules > add inbound rules
        - click add rule
        - select custom TCP
        - port: that port is given to jenkins [8080]
        - source: Anywhere
        - Save rules

- Select new item with Freestyle-project

- configure Options
    // In this we can create a bridge/connection between github and jenkins using os
    - Description: your job pipeline desc.
    - Check GitHub project
        - URL of github repo
    - Source Code Management: check Git
        - URL of github repo
        - Credentials
            - Setup SSH: type ~$ ssh-keygen command in os
            - Goto ssh folder: ~$ cd .ssh
            - copy the public  key: cat id_rsa.pub
            - Generate SSH keys in git repo
                - click project > settings > SSH and GPG keys > new key
                - paste that ssh public key to key option of git repo setting
        - Now In credentials click add
            - in kind: click SSH Username with private key
            - ID: github-jenkins
            - DEScription: This is for jenkins and github integrations.
            - username: instance username [ubuntu]
            - Private key: paste private key of os
                - copy private key : cat id_rsa
                - paste in enter durectly option
        - Now in credentials select the option 
    - Branch
        // select branch of git repo
        - master / main / testing
    - Click save
    - Build Now 
        // Click this button for copy that git repo to our os
        - Once it's done the project is paste in /var/lib/jenkins/workspace/[project-name]

## Local repo [paste in below location]

- Location: /var/lib/jenkins/workspace/[project-name]

- Now run the code 
    - install dependency

- Our code is in Node js so run below command
    - /var/lib/jenkins/workspace/[project-name]
    - $ sudo apt install nodejs
    - $ sudo apt install npm
    - $ npm install
    - $ node app.js/server.js

- Once our app is running then we have to open the port that given in project

- Open port
    - Goto EC2 instance > security > Inbound rules > add inbound rules
        - click add rule
        - select custom TCP
        - port: that port is given by project
        - source: Anywhere
        - Save rules

- Run project: http://instace-IP:port

## Docker 
- Why we use docker for this project?
    - We make that project run in mannually in below steps
        - OS with node & npm 
        - Copy the project from git repo
        - run npm install
        - expose 8000 port
        - node app.js
    - Avoid that mannual steps and make automation through Docker

- Install
    - sudo apt install docker.io

### Docker file
- nano Dockerfile
    - node:version-alpine [alpine means simplest/compact package]
    - Code
    ```
        FROM node:12.2.0-alpine     // create a os with node install
        WORKDIR app                 // make a working directory app
        COPY . .                    // copy project to app/
        RUN npm install             // run the command npm install
        EXPOSE 8000                 // expose 8000 port
        CMD ["node","app.js"]       // run the command with [command ,filename]
    ```

- docker build
    // make a docker using [build] name [-t] and paste in current folder [.]
    - docker build . -t node-app:version    

- check all images
    - docker image ls
    - docker image rm [image-id]

- access the permission to the current user for docker daemon socket
    - add User permission
        - sudo usermod -a -G docker $USER
        - sudo reboot
    - add jenkins permission
        - sudo usermod -a -G docker jenkins
        - restart jenkins
            - sudo systemctl restart jenkins

- docker build run
    - -d : run in daemon [background] mode 
    - --name : give a name to container
    - -p 8000:8000 : bind container port with system port [host]
    - todo-node-app : docker image name
        - docker run -d --name node-app-container -p 8000:8000 todo-node-app

    - -v $(pwd):/app It means docker file sync with host file
    - Actual meaning is when we change the code is host machice then docker file automatic change and website will be updated, no need to re-create Image build 
        - docker run -d --name node-app-container -p 8000:8000 -v $(pwd):/app todo-node-app

- check process of container
    - docker ps
    - docker ps -a
    - docker container list
    - docker container rm [container-id]

- kill that docker
    - docker kill [container-id]

- If you want to open terminal of the docker file system
    - docker exec -it process_id bash

- What is the difference between docker image and container?
    - Dockerfile is a instruction program that create a image.
    - Docker image is a build of our code with automation process.
    - container is a engine that run that image.

## Got to jenkins job
- Open the jenkins project [ If require type username & password ]
- Now goto Build steps
    - Execute shell 
        - docker build . -t node-app-todo
        - docker run -d --name node-app-container -p 8000:8000 node-app-todo
- Save
- Build Now

## Webhook
- What is a webhook?
    - Webhooks are one of a few ways web applications can communicate with each other.
    It allows you to send real-time data from one application to another whenever a given event occurs.

- install a plugins in jenkins
    - Click Manage jenkins > Manage Plugins > Available plugins
    - Search "github integration"
    - Tick checkbox and click install without restart

- webhook configure in github repo page
    - Open repo settings > Webhooks
        - click add webhook
            - Payload URL: http://jenkins-URL:port/github-webhook/
            - Content type: application/json
            - click "just the push event"
            - check Active and click add webhook button

- Jenkins project
    - open jenkins job/project > click configure
    - Goto Build Triggers
        - check GitHub hook trigger for GITScm polling
    - save