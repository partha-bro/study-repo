require('dotenv').config()
const mongoose = require('mongoose')

const database = 'userDB'

mongoose.connect(process.env.MONGODB_URL+database)

const userSchema = new mongoose.Schema(
    {
        username: String,
        password: String
    }
)

module.exports = mongoose.model('user', userSchema)