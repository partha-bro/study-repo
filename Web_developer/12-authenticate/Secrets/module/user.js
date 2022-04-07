const mongoose = require('mongoose')
const passportLocalMongoose = require('passport-local-mongoose')
const findOrCreate = require('mongoose-findorcreate')

const databaseName = 'userDB'
const url = 'mongodb://localhost:27017/'+databaseName

mongoose.connect(url)

const schema = new mongoose.Schema(
    {
        email: {
            type: String
        },
        password: {
            type: String
        },
        googleId: {
            type: String
        },
        secret: {
            type: String
        }
    }
)

schema.plugin(passportLocalMongoose)
schema.plugin(findOrCreate)

module.exports = mongoose.model('user',schema)