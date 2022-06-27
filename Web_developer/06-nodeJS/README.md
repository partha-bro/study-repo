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

## What is Node REPL?

    REPL means Read Evaluation Print Loop
    This mode is like console tab in chrome developer tools.

    run code in terminal using below command
        $ node
        >console.log('hi'); <enter>
    to exit
        $ .exit or press ctrl+c twice

### Q. Is it same that console of nodejs and console of browser?

    A. No, both are not same, because console of nodejs is a module but browser of console is a function.

### Q. Is it possible to use export in nodejs?

    A. No, export is use in browser level so we can use export in react/angular but we can not use in nodejs.
    so instead of export we can use module.exports

    example:
        react/frontend
            import defaultExport from "module/file"
            import { export_1, export_2 } from "module/file"

        node js
            const fs = require("fs")
            const writeFileSync = require("fs").writeFileSync

### Q. How to pass any argument and used in js file through command line.

    A. in command line we use
            $ node index.js argument_1 argument_2

        in js file we receive using process.arguv[index number]

        example:
            $ node index.js Hello World

        in js file:
            console.log( process.argv[2] )  // Hello
            console.log( process.argv[3] )  // World

### Q. What is buffer in Node.js?

    A. js is used to perform operations on raw binary data. Generally, Buffer refers to the particular memory location in memory. Buffer and array have some similarities, but the difference is array can be any type, and it can be resizable. Buffers only deal with binary data, and it can not be resizable.

## Asyncronous program

    The program don't wait for long time and run immediate code.

    Example:
        let a = 10
        let b = 5

        setTimeout( ()=>{
            b=20
            console.log(`After 2 sec: ${a+b}`);
        },2000)

        console.log(a+b);

    Result:
        15                  // dont wait for setTimeout
        After 2 sec: 30

### Handle Asyncronous program

    using promises

    Example:
        let a = 10
        let b = 5

        let waitingData = new Promise( (resolve,reject)=>{
            setTimeout( ()=>{
                b=20
                resolve(b)
            },2000)
        })

        waitingData.then( (data)=>{
            b=data
            console.log(`After 2 sec: ${a+b}`);
        })

        console.log(a+b);

    // result:
        15
        After 2 sec: 30

## HTTP Request Types

    HTTP Request means client request to server.

    1. GET
    2. POST
    3. PUT
    4. DELETE
    5. PATCH

## HTTP Response 

    HTTP Response means server response to client.

    it has the things 1. res.statusCode, 2. res.headers, 3. res.body 

## HTTP Response Status code

    

## How node js work?

    Event Loop
    1. call stack
    2. node API
    3. callback queue
    4. Example

## Middleware

    Middleware functions are functions that have access to the request object (req), the response object (res), and the next middleware function in the application’s request-response cycle. The next middleware function is commonly denoted by a variable named next.

    Types of express middleware
        1.Application level middleware [ app.use ]
        2.Router level middleware [ router.use ]
        3.Built-in middleware [ express.static,express.json,express.urlencoded ]
        4.Error handling middleware [ app.use(err,req,res,next) ]
        5.Thirdparty middleware [ body-parser,cookieparser ]

    Example of Application level middleware:
        const middlewareName = (req,res,next) => {
            // code
            next()
        }

        app.use(middlewareName)

    Example of Router level middleware:
        We can't use app.use because we have to use in indivisual router.
        const middlewareName = (req,res,next) => {
            // code
            next()
        }

        app.get("/", middlewareName,(req,res)=>{
            res.json( {message:'Home Page'})
        })

    Apply middleware in group of routers:
        const express = require('express')
        const app = express()

        const router = express.Router()         // make a router group

        const agemiddleware = (req,res,next) => {   // make a middleware
            if(!req.query.age) res.send('Please enter your age:')
            else if (req.query.age<18) res.send('You are not access this website.')
            else next()
        }
        router.use(agemiddleware)               // middleware used by router group

        app.get("/", (req,res)=>{
            res.json( {message:'Home Page'})
        })
        router.get("/about", (req,res)=>{           // instead of app we use router for middleware
            res.json( {message:'About Page'})
        })
        router.get("/contact", (req,res)=>{
            res.json( {message:'Contact Page'})
        })
        app.use('/',router)                         // now app define router behave like app instatnce
        app.get("*", (req,res)=>{
            res.json( {message:'404 Page Not Found!'})
        })


        app.listen(8000)

## How to install Node js

    windows 10:
        download nodejs application and install it and it will install node and npm autometically.

    Ubuntu :
        $ sudo apt update
        $ sudo apt install curl -y
        $ curl -sL https://deb.nodesource.com/setup_16.x | sudo -E bash -
        $ sudo apt install nodejs -y

## Modules

    There are three types of module
        1. global core module       => we don't have to import this type of module          like console/__dirname/__filename
        2. non-global core module   => we have to import this type of module                like https/fs/buffer modules
        3. external module          => we have to install and import this type of module    like express/body-parser/ejs/

## How to Use the Native Node Modules?

    In js file, we can include the native module to use it.

    syntax:
        const variableName = require('native_module');

    Example:
        const fileSystem = requirw('fs');
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
    $ npm init -y  // y flag use for yes permission

## What is nodemon?

    nodemon is a tool that helps develop node.js based applications by
    automatically restarting the node application when file changes in the
     directory are detected.

    nodemon does not require any additional changes to your code or method of development. nodemon is a replacement wrapper for node. To use nodemon, replace the word node on the command line when executing your script.

    To install:
        $ npm install -g nodemon

    To run/compile code
        $ nodemon filename.js

## How to run the program file in nodejs?

    1. Using nodemon
    2. node file.js
    3. make a object of "start": "node index.js" in script property of package.json file and
        run $ npm start

        package.json file
            {
                "name": "joke",
                "version": "1.0.0",
                "description": "Programming Joke",
                "main": "server.js",
                "scripts": {
                    "test": "echo \"Error: no test specified\" && exit 1",
                    "start": "node server.js"                               // if this is not declare then please write it.
                },
                "author": "",
                "license": "ISC",
                "dependencies": {
                    "express": "^4.17.3"
                }
            }

        $ npm start

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

    7.1 Specify the version of node in package.json
        Inside the package.json file write node version:

            after "license": property, we can write
                "engines": {
                    "node": "4.1.1"
                }

    8. $ git init

    8.1 $ touch .gitignore

    9. $ git add .

    10. $ git commit -m 'message'

    11. $ git push origin master        // for github repo

    11. $ heroku login

    12. $ heroku create

    13. $ git push Heroku master        // for Heroku server

    14. heroku logs

# Node Package Manager

    All node packages search in npm website.

    We can install more than one module install at once:
        $ npm install module_1 module_2 module_3
    Short hand command
        $ npm i module_1 module_2 module_3

## http Module

    Node.js has a built-in module called HTTP, which allows Node.js to transfer data over the Hyper Text Transfer Protocol (HTTP).

    install:
        This is non-global core module so we don't need to install it.

    import:
        var http = require('http');

    Node.js as a Web Server
        var http = require('http');
        //create a server object:
        http.createServer(function (req, res) {
            res.writeHead(200,{'Content-Type':'application\json'})
            res.write('Hello World!');      //write a response to the client
            res.end();                      //end the response
        }).listen(8080);                    //the server object listens on port 8080

## colors module

    This module use for show color style of console.log file

    install:
        npm i colors
    import:
        const colors = require('color')
        console.log('any string'.red)
        console.log('any string'.bgred)

## file system module

    This is a fs module that manupulate the file system.

    install:
        This is non-global core module so we don't need to install it.
    import:
        const fs = require('fs')

        // create and write file
            fs.writeFileSync('filename.txt','somthing to write file')

        // for read directory
            fs.readdir('files', (err,files)=>{
                files.forEach( (file)=>{
                    console.log(file)
                })
            })

        // for read file
            fs.readFile(filepath,'utf8',(err,item)=>{
                console.log(item)
            })

        // add string to file
            fs.appendFile('filePath','strings',(err)=>{
                if(!err) console.log("file is updated")
            })

        // rename file name
            fs.rename(currentFilePath, `${dirname}/newFile.txt`, (err)=>{
                if(!err) console.log("file is renamed")
            })

        // for delete file
            fs.unlinkSync('filename.txt')

## path Module

## Express Module

### Command for install express package

        $ npm install express

### Import the express package to ls file

        const express = require('express')
        const app = express()       // app is create for new instance of express

        NOTE: If you want to import any module using import keyword then a error has occur
        we can use import keyword instead of require() method then we add "type":"module", in package.json

            import Express from "express"
            const app = express()

### Route

    get() Method
        app.get('location',function(request,response){
            //code
        })

    post() Method
        app.post('location',function(request,response){
            //code
        })

    Q. How to handle 404 file in node route?
    A. use * for all not defined routes
        app.post("*",function(request,response){
            //code page not found
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

### Method json() for send json object to client

        app.get('location', (request.response) => {
            response.json( {key:'value'})
        })

### Method use() for use another module methods in express app property

        app.use(bodyParser.urlencoded({extended:true}));

### Create Static folder for path to run html/css/images file using relative path

        Our static folder will be "public" folder where we can put all html/css/images files for use relative path

        Method static()
            app.use(express.static('folder_name'))

        Example;
            app.use(express.static('public'))

## Sending Data in Request Objects

    1. Sending data using URL query String

        like: http://localhost:8000/home?name=Arjun&age=27

        Here ?name=Arjun&age=27 in query string

        we can access these type of data using req.query property and that property holds a object { name:'Arjun', age:27}

        Example:
            server.route('/json').get(
                (req,res)=>{
                    res.json( req.query )
                }
            )

    2. Sending data using URL query parameters

        like: http://localhost:8000/home/30

        Here /30 in URL params

        we can access these type of data using req.params.paramName property and that property holds a value that pass through URL

        Example:
        URL: http://localhost:8000/json/30?name=Arjun&age=27

        Code:
            server.route('/json/:id').get(
                (req,res)=>{
                    const id = req.params.id
                    res.json( {id,...req.query} )
                }
            )

    3. Sending data using hidden info like password data in body data

        we can access post data using req.body object
        But in express body property is not define so we have to import the body-parser module.

        import bodyParser from 'body-parser'

        app.use( bodyParser.urlencoded({extended:true}))    // for Form data

        app.use( bodyParser.json())    // for JSON data

        server.route('/login')
        .get(
            (req,res)=>{
                res.render('login', {message:"Welcome to My Page"})
            }
        )
        .post(
            (req,res)=>{
                const username = req.body.username
                const password = req.body.password
                res.json({username,password})
            }
        )

# External Module

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

    NOTE: ./ must be use for path because it represent current folder

## Lodash module

    A modern JavaScript utility library delivering modularity, performance & extras.

    How to Install
        $ npm install lodash

    import to page
        const _ = require('lodash')

    use various javascript methods like
    _.lowerCase('variable')             // return lower case of string

## Hasing( md5 ) module

    It is a JavaScript function for hashing messages with MD5.

    Install:
        npm install md5

    import:
        const md5 = require('md5')

    use:
        md5(variable)

    Example:
        app.route('/register')
        .get(
            (req,res)=>{
                res.render('register')
            }
        )
        .post(
            (req,res)=>{
                const newUser = new User(
                    {
                        email: req.body.username,
                        password: md5(req.body.password)
                    }
                )
                newUser.save(
                    (err)=>{
                        if(err)
                            console.log(err)
                        else
                            res.redirect('/')
                    }
                )
            }
        )

## dotenv module

    Dotenv is a zero-dependency module that loads environment variables from a .env file into process.env. Storing configuration in the environment separate from code is based on The Twelve-Factor App methodology.

    This module is use for access .env file for secrect things like password, encryption key, api key etc.
    .env file
        - this file must be hidden file and no extension
        - this file contain KEY_NAME=value and key name convention must be capitalize and in two/three word separated by _
        - Like API_KEY=value, there is no space at all
        - All key and value in next line
        - value must not contain "" / '' / ;

    The declare variable we can access using process.env.KEY_NAME

    How to import that module?

        Install:
            npm install dotenv

        Import:
            require('dotenv').config()      // this imort must be in top of line/ 1st line

        Use:
            process.env.KEY_NAME

    NOTE: .env file must be mention in .gitignore file.

## bcrypt module

    Concept of bcrypt method is: user defind password + number of salt round[ it means add extra random number to strong the password] = result of encryption password to store

    Install:
        if any perticular version required
        npm install bcrypt@compatibleVersion

        npm install bcrypt

    import:
        const bcrypt = require('bcrypt')
        const saltRound = 10 //more number means stong password and heavy use of CPU&GPU

        LIKE:
            saltRound=8 : ~40 hashes/sec
            saltRound=9 : ~20 hashes/sec
            saltRound=10: ~10 hashes/sec
            saltRound=11: ~5  hashes/sec
            saltRound=12: 2-3 hashes/sec
            saltRound=13: ~1 sec/hash
            saltRound=14: ~1.5 sec/hash
            saltRound=15: ~3 sec/hash
            saltRound=25: ~1 hour/hash
            saltRound=31: 2-3 days/hash

    Use:
        const bcrypt = require('bcrypt');
        const saltRounds = 10;

        Encryption:
            bcrypt.hash('plain text/password',saltRound, (err,hash)=>{
                //code: hash is encrypted plain text/password
            })

        Decryption:
            bcrypt.compare('plain text/password',hash password, (err,result)=>{
                // result === true
            })

## Passport Module

    Passport is Express-compatible authentication middleware for Node.js.

    Modules:
        passport    : Passport is Express-compatible authentication middleware for Node.js.

## passport-local Module

    passport-local  :   This module lets you authenticate using a username and password in your Node.js applications. By plugging into Passport, local authentication can be easily and unobtrusively integrated into any application or framework that supports Connect-style middleware, including Express.

## passport-local-mongoose Module

    passport-local-mongoose : Passport-Local Mongoose is a Mongoose plugin that simplifies building username and password login with Passport.

## express-session Module

    express-session NOT express-sessions : Create a session middleware with the given options.


    install:
        npm i express-session
    import:
        import session from "express-session"
    Use:
        intitialize session:
            app.use(session(
                {
                    secret: "dhjfdjgfb",                                                    // secret code to session for secure, value would be anything
                    resave: false,                                                          //
                    saveUninitialized: true,                                                // false is useful for implementing login sessions. and true for other
                    cokkie: { secure:false, maxAge:60000 }                                  // secure:false for http:// protocol only, secure:true for https:// protocol
                                                                                                    maxAge property for store time in millisecond 60000 means= 60 second
                }
            ))

            app.route('/cookie').get(
                (req,res)=>{
                    req.session.test ? req.session.test++ : req.session.test = 1;           // to store a session using req.session.sessionName = "value
                                                                                            // to destroy the session using req.session.destroy()
                    res.send("<h1>Cookie: "+req.session.test+"</h1>")
                }
            )

## passport-google-oauth20 Module

    google authenticate module

## mongoose-findorcreate Module

    THis method is use to find if exists or create your data in database
    NOTE: findOrCreate() is not a mongoose method we can access in different method: mongoose-findorcreate module
