# Express JS

    Express is a minimal and flexible Node.js web application framework that provides a robust set of features to develop web and mobile applications.

    Features:
        1. Allows to set up middlewares to respond to HTTP Requests.
        2. Defines a routing table which is used to perform different actions based on HTTP Method and URL.
        3. Allows to dynamically render HTML Pages based on passing arguments to templates.

## How to install Express js?

    $ npm install express

    $ npm install express --save        // save means it add dependency list in package.json

    $ npm install express --no-save     // temporary add means it will not add dependency list in package.json

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

    