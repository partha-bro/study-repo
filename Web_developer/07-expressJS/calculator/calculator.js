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

// BMI calculator part
app.get('/bmicalculator',function(req,res){
    res.sendFile(__dirname + '/bmiCalculator.html');
});

app.post('/bmicalculator',function(req,res){
    let height = Number(req.body.height);
    let weight = Number(req.body.weight);
    // convert cm to meter
    height /= 100;
    let bmiResult = weight/Math.pow(height,2);
    res.send('Your Bmi Calculator: '+ bmiResult);
});
app.listen(3000,function(){
    console.log('server is running on 3000');
});