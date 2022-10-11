require('dotenv').config()
const mongoose = require('mongoose')

const database = 'userDB'

mongoose.connect(process.env.MONGODB_URL+database)
    .then(e=>console.log(`Mongo Connect with ${e.connection.host}`))
    .catch(err=>console.log(`Mongo have connection error: ${err}`))

module.exports = mongoose