const express = require('express')
const bodyParser = require('body-parser')
const date = require('./date.js')

let newLists = new Array( "Buy Food", "Cook Food", "Eat Food")
let workLists = new Array()

const app = express()
app.set('view engine','ejs')
app.use(bodyParser.urlencoded({extended:true}))
app.use(express.static('public'))

app.get('/', (req,res)=>{
    let today = date.getDate()
    res.render('list', {nameOfToday:today, addNewList: newLists});
})

app.post('/',(req,res)=>{
  let newList = req.body.addList
  newLists.push(newList)
  res.redirect('/')
})

app.get('/work',(req,res)=>{
  res.render('list', {nameOfToday:'Work', addNewList: workLists})
})
app.post('/work',(req,res)=>{
  let workList = req.body.addList
  workLists.push(workList)
  res.redirect('/work')
})

app.listen(process.env.PORT || 3000, ()=>{
    if(process.env.PORT)
        console.log('server is running on port '+process.env.PORT)
    else
        console.log('server is runing on port 3000');
})
