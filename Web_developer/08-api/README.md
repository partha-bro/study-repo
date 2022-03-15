## API

    API is the acronym for Application Programming Interface, which is a software intermediary that allows two applications to talk to each other. Each time you use an app like Facebook, send an instant message, or check the weather on your phone, you're using an API.

    URL: https://v2.jokeapi.dev/joke/Programming?contains=compiler


    It contains 4 parts:

### Endpoints

    Every API that interacts with a external system, like server will have endpoint.

    Endpoint:  https://v2.jokeapi.dev/joke

### Paths

    Path of Api: /Programming

### Parameters

    parameter goes in key=value parttern and separated by ? symbol and more than one parameters are available then use & symbol.

    parameter of api: ?contains=compiler&type=single

### Authentication

    Key code for use the api.

## Postman
    This tool use to test the api

## Json

    JSON: JavaScript Object Notation

    Syntax:
        {
            "key_1" : "value_1",
            "key_2" : "value_2",
            "Key_3" : [ "array_1","array_2","array_3" ],
            "Key_4  : [
                { "key_1.1" : "value_1.1" },
                { "key_1.2" : "value_1.2" }
            ] 
        }

    NOTE:
    JSON.parse() => Convert hexa encode of url to object 
    JSON.stringify(object) => object to json format

## How to access api or send a request to external server from nodejs?

    we can use a internal/native package for http request.
    package name: https

    We dont need to install https module, we can direct import to page like
        in js file
            const https = require('https');

            https.get( api_url, callback_function(request){
                // on() method is use to take the key from request object from callback_function
                request.on('data', (data) => {
                        let joke = JSON.parse(data);
                        console.log(joke.joke);
                    })
            });

        Example:
            app.get('/', (req,res) => {

                let url = 'https://v2.jokeapi.dev/joke/Programming?type=single';
                https.get(url, (request) => {
                    console.log('Request Status Code: '+request.statusCode);

                    request.on('data', (data) => {
                        let joke = JSON.parse(data);
                        console.log(joke.joke);
                    })
                })
                res.sendFile(__dirname+'/index.html');
            })
