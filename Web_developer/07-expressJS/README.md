# Express JS

    Express is a minimal and flexible Node.js web application framework that
     provides a robust set of features to develop web and mobile applications.

    Features:
        1. Allows to set up middlewares to respond to HTTP Requests.
        2. Defines a routing table which is used to perform different actions
         based on HTTP Method and URL.
        3. Allows to dynamically render HTML Pages based on passing arguments
         to templates.

## How to install Express js?

    $ npm install express

    $ npm install express --save        // save means it add dependency list
                                             in package.json

    $ npm install express --no-save     // temporary add means it will not add
                                             dependency list in package.json

## How to use Express module?

    In file,
        // import the module to file
            const express = require('express');
        // assign express method to any variable
            const app = express();
        // To open a server using any port [3000] to use listen() method
            app.listen(port,function(){
                // code...
            });

## Handling Requests and Responses the GET Request

    get() method is use to request and response from server to browser using get method.

    post() method is use to request and response from server to browser using post method.

    request: Recive from client/browser
    response: send to client/browser

    syntax: app.get('location',callbackFunction( request,response ){
        // response call send() to render what is show in page
        response.send('<h1>Hello World!</h1>');
        // code
    });
    Example:
        app.get('/',function(req,res){
            res.send('<h1>Hello World!</h1>');
        });

## Understanding and Working with Routes

    Routes are indicator for URL, when that indicates hit what will happen to 
    the page in browser.

    Example:
    app.get('/contact',function(request,response){
        response.send('<h1 align="center"><b>Contact me at:</b> <a href="">partha.parida@dsdigital.in</a></h1>');
    });
    app.post('/contact',function(request,response){
        res.redirect(/contact)
    });

## Express Routing Parameters

    Route parameters are named URL segments that are used to capture the values specified at their position in the URL. The captured values are populated in the req.params object, with the name of the route parameter specified in the path as their respective keys.

    To define routes with route parameters, simply specify the route parameters in the path of the route as shown below.

    app.get('/users/:userId/books/:bookId', (req, res) => {
        res.send(req.params)
    })

    Route path: /users/:userId/books/:bookId
    Request URL: http://localhost:3000/users/34/books/8989
    req.params: { "userId": "34", "bookId": "8989" }


## Responding to Requests with HTML Files

    Send html file using sendFile() method.
    syntax:
        reaponse.sendFile('location');

    Example:
        app.get('/',function(request,response){
            response.sendFile(__dirname + '/index.html');
        });

    Here "__dirname" means it represent the directory location of this file.
    __dirname is a constant variable.

## Processing Post Requests with Body Parser

    body-parser module is use to pass data from browser to server.
    req.body property shape is based on user-controlled input in browser.

        This module provides the following parsers:

            JSON body parser
            Raw body parser
            Text body parser
            URL-encoded form body parser

    $ npm install body-parser

    How to use?
        const bodyParser = require('body-parser);

        //app property means express want to use body-parser module's urlencode method
            app.use(bodyParser.urlencoded({ extended: true }));

        // we can convert string to number using Number() method.
        // req = request of body property has all form data in odject format
            let num1 = Number(req.body.num1);

        Example:
            const express = require('express');
            const bodyParser = require('body-parser');
            const app = express();

            app.use(bodyParser.urlencoded({ extended: true }));

            app.get('/',function(req,res){
                res.sendFile(__dirname + '/index.html');
            });

            app.post('/', function(req,res){
                let num1 = Number(req.body.num1);
                let num2 = Number(req.body.num2);
                let add = num1 + num2;
                res.send('Result: '+add);
            });

            app.listen(3000,function(){
                console.log('server is running on 3000');
            });

## How to send multiple html code in response property using get()/post()?

    use write() to send multiple data.

    example:
        app.get('/',function(req,res){
            res.write('html code/simple text' + variable);
            res.write('html code/simple text' + variable);
            res.write('html code/simple text' + variable);
            res.send();
        })

