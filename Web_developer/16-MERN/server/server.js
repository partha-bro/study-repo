require('dotenv').config()
const express = require('express')
const router = require('./routers/Router')

const server = express()

server.use(router)
server.use(express.static('views'))

server.listen(process.env.PORT, ()=>{
    console.log(`Server is running on ${process.env.PORT}`);
})