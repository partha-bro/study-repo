const express = require('express')
const bodyParser = require('body-parser')
// const request = require('request')
const https = require('https')

// create express instance
const app = express();

// create a staic folder for public
app.use(express.static('public'))

// use body-parser module to data fetch
app.use(bodyParser.urlencoded({extended:true}))

app.get('/', (req,res) => {
    res.sendFile(__dirname + '/public/signup.html')
})
app.get('/failure', (req,res) => {
    res.sendFile(__dirname + '/public/signup.html')
})

app.post('/', (req,res)=>{
    let firstName = req.body.firstName;
    let lastName = req.body.lastName;
    let email = req.body.email;

    const apiKey = "5a439722728b8acbc2172ae3887e161d-us14"
    const listId = "83affb43d0"
    const url = "https://us14.api.mailchimp.com/3.0/lists/"+listId;
    // create an object that send request for subscribe
    const data = {
        'members': [
            {
                'email_address': email,
                'status': 'subscribed',
                'merge_field': {
                    'FNAME': firstName,
                    'LNAME': lastName
                }
            }
        ]
    }

    // convert this onbect to json object
    const jsonData = JSON.stringify(data);
    const options = {
        "method" : "POST",
        "auth" : "arjun:5a439722728b8acbc2172ae3887e161d-us14"
    }

    // store the request data in variable
    const request = https.request(url, options, (httpsRequest)=>{

        if(httpsRequest.statusCode === 200){
            res.sendFile(__dirname+'/public/success.html')
        }else{
            res.sendFile(__dirname+'/public/failure.html')
        }
        httpsRequest.on('data', (data)=> {
            console.log(JSON.parse(data))
            console.log('New Member Subscribed!')
        })
    })

    // trying to write data in api request
    request.write(jsonData)
    request.end()

})


// listen to port dynamic port for Huruko server
app.listen(process.env.PORT || 3000, () => {
    if (process.env.PORT)
        console.log('Server is running on port '+ process.env.PORT)
    else
        console.log('Server is running on port 3000')
})