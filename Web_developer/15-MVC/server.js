require('dotenv').config()
const server = require('express')()
const homeRouter = require('./routes/homeRoutes')

server.set('view engine', 'ejs')
server.use(homeRouter)

server.listen(process.env.PORT,()=>{
    console.log(`Server is running on ${process.env.PORT}`)
})