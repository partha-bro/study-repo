const express = require('express');
const https = require('https');
const app = express();

app.get('/', (req,res) => {

    let url = 'https://v2.jokeapi.dev/joke/Programming?type=single';
    https.get(url, (request) => {
        console.log('Request Status Code: '+request.statusCode);

        request.on('data', (data) => {
            let joke = JSON.parse(data);
            res.write('<h1>Programming Joke:</h1>')
            res.write('<h3>'+ joke.joke +'</h3>')
            res.send()
        })
    })
})



app.listen(3000, () => {
   console.log('Server is running on 3000.'); 
})