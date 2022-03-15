# Node JS

## What is Node.js?
    Node.js is an open source server environment
    Node.js is free
    Node.js runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)
    Node.js uses JavaScript on the server

## Why Node.js?
    Node.js uses asynchronous programming!

    A common task for a web server can be to open a file on the server and return the content to the client.

    Here is how PHP or ASP handles a file request:

    Sends the task to the computer's file system.
    Waits while the file system opens and reads the file.
    Returns the content to the client.
    Ready to handle the next request.
    Here is how Node.js handles a file request:

    Sends the task to the computer's file system.
    Ready to handle the next request.
    When the file system has opened and read the file, the server returns the content to the client.
    Node.js eliminates the waiting, and simply continues with the next request.

    Node.js runs single-threaded, non-blocking, asynchronous programming, which is very memory efficient.

## What Can Node.js Do?
    Node.js can generate dynamic page content
    Node.js can create, open, read, write, delete, and close files on the server
    Node.js can collect form data
    Node.js can add, delete, modify data in your database

## What is a Node.js File?
    Node.js files contain tasks that will be executed on certain events
    A typical event is someone trying to access a port on the server
    Node.js files must be initiated on the server before having any effect
    Node.js files have extension ".js"

## What is Nore REPL?

    REPL means Read Evaluation Print Loop
    This mode is like console tab in chrome developer tools.

    run code in terminal using below command
        $ node
        >console.log('hi'); <enter>
    to exit
        $ .exit or press ctrl+c twice

## How to Use the Native Node Modules?

    In js file, we can include the native module to use it.

    syntax:
        const variableName = require('native_module');

    Example:
        const fileSystem = requirw('fs);
        fileSystem.methodName();

## The NPM Package Manager and Installing External Node Modules

    NPM: Node Package manager
    NPM is a package manager for external modules.

    $ npm install external_module_name

## If i clone a node project but the packages are not in github, then how to install all dependecy modules?

    After clone the github node project then we can simply type 
    $ npm install           // this command is able to read package.json file and download all the dependecy modules. 

## How to initialize a project?

    $ npm init  // command in project repo

## What is nodemon?

    nodemon is a tool that helps develop node.js based applications by 
    automatically restarting the node application when file changes in the
     directory are detected.

    nodemon does not require any additional changes to your code or method of development. nodemon is a replacement wrapper for node. To use nodemon, replace the word node on the command line when executing your script.

    To install:
        $ npm install -g nodemon

    To run/compile code
        $ nodemon filename.js

# Heroku Server: Deploy our project to live server

    1. Signup on Heroku server

    2. Heroku cli download to system

    3. $ Heroku --version

    4. $ Heroku login

    5. listen to port dynamic port for Huruko server in filename.js
        app.listen(process.env.PORT || 3000, () => {
            console.log('Server is running on port '+process.env.PORT);
        })

    6. Make a file name 'Procfile' with no extension inside the project folder
        $ touch Procfile

    7. Inside the Procfile file write
        web: node filename.js       // filename.js that excuted using nodemon in local or default js file to run tha app

    8. $ git init

    9. $ git add .

    10. $ git commit -m 'message'

    11. $ git push origin master        // for github repo

    12. $ heroku create

    13. $ git push Heroku master        // for Heroku server

    14. heroku logs

# Package Manager 

    We can install more than one module install at once:
        $ npm install module_1 module_2 module_3
    Short hand command
        $ npm i module_1 module_2 module_3

## Express Module

### Command for install express package
        $ npm install express

### Import the express package to ls file
        const express = require('express')
        const app = express()       // app is create for new instance of express

### Route
    get() Method
        app.get('location',function(request,response){
            //code
        })

    post() Method
        app.post('location',function(request,response){
            //code
        })

### Port listen for running server on this port
        app.listen('port',function(){
            console.log('server is started')
        })

        NOTE: we have both live server and localhost so we use 
            in port= process.env.PORT || 3000

        Example:
            // listen to port dynamic port for Huruko server
            app.listen(process.env.PORT || 3000, () => {
                if (process.env.PORT)
                    console.log('Server is running on port '+ process.env.PORT)
                else
                    console.log('Server is running on port 3000')
            })

### Method write() for write and send multiple code to client

        app.get('location', (request,response) => {
            response.write('html code multiple')
            response.write('html code multiple')
            response.send()
        })

### Method redirect() for redirecting one route to another

        app.post('location', (request,response) => {
            response.redirect('location')
        })

### Method send() for send server to client code/data

        app.get('location', (request,response) => {
            response.send('html code')
        })

### Method sendFile() for send html/other files to client

        app.get('location', (request.response) => {
            response.sendFile( __dirname + 'html file name')
        })

### Method use() for use another module methods in express app property

        app.use(bodyParser.urlencoded({extended:true}));

### Create Static folder for path to run html/css/images file using relative path
        Our static folder will be "public" folder where we can put all html/css/images files for use relative path

        Method static()
            app.use(express.static('folder_name'))

        Example;
            app.use(express.static('public'))
            
## https Module 
    For interaction with API URL or external server

### => It is a native/local module, no need to install it.

### import to js file
    
        const https = require('https')

### Call api url/endpoint or request a external server

        get() Methods
            https.get('URL', (request) => {

            })
        
        on() Method for fetch data object from request 
            https.get('URL', (request) => {
                request.on('data', (data) => {
                    conslole.log( JSON.parse(data) )
                })
            })
    
### response fron api/ external server

        request() Method  - to store the connection and write our json data to it
            const request = https.request('url','options',callback_function(response){
                                //code
                            })
        write() method write our data to api connection
            request.write(jsonData)
            request.end()
             
        Parameters
            url: endpoint url
            options: an object of method and authentic key
                    const options = {
                        'method' : 'POST',
                        'auth' : 'api_key'
                    }
            jsonData: our data of object type that convert to json using stringfy() method

    NOTE: https.request() instead of https.get() for api
    But in https.request() method always assign to a variable and that variable must be call end() method

        syntax:
            const url = "https://jsonplaceholder.typicode.com/todos/1"
            const request = https.request(url, (httpsRequest)=>{
                // console.log(httpsRequest)
                httpsRequest.on('data',(data)=>{
                    console.log(data)
                    data = JSON.parse(data)
                    res.send(data.title)
                })
            })
            request.end()
            
## body-parser Package

### Install 

        $ npm install body-parser

### import

        const bodyParser = require('body-parser')

### Fetch html form data to javascript file

        app.use( bodyParser.urlencoded({extended:true}))

        app.get('/', (request,response) => {
            console.log(request.body)   // body is a object of html file { name:value} format
        })

## exports Module

    The module.exports is a special object which is included in every JavaScript file in the Node.js application by default. The module is a variable that represents the current module, and exports is an object that will be exposed as a module. So, whatever you assign to module.exports will be exposed as a module.

    Example:
        Message.js
            module.exports = 'Hello world';

        Now, import this message module and use it as shown below.
        
        app.js
            var msg = require('./Messages.js');
            console.log(msg);

    Example 2:
        Message.js
            exports.SimpleMessage = 'Hello world';
            //or
            module.exports.SimpleMessage = 'Hello world';

        In the above example, we have attached a property SimpleMessage to the exports object. Now, import and use this module, as shown below.
        
            app.js
                var msg = require('./Messages.js');
                console.log(msg.SimpleMessage);

    Example 3:
        Log.js
            module.exports.log = function (msg) { 
                console.log(msg);
            };

        The above module will expose an object- { log : function(msg){ console.log(msg); } } . Use the above module as shown below.
        
        app.js
            var msg = require('./Log.js');
            msg.log('Hello World');

## Lodash module

    A modern JavaScript utility library delivering modularity, performance & extras.

    How to Install
        $ npm install lodash

    import to page
        const _ = require('lodash')

    use various javascript methods like
    _.lowerCase('variable')             // return lower case of string