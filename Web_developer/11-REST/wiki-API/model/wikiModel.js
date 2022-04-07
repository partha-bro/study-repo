const mongoose = require('mongoose')

const dbName = 'wikiDB'
const url = 'mongodb://localhost:27017/'+dbName

mongoose.connect(url)

const wikiSchema = mongoose.Schema(
    {
        title: String,
        content: String
    }
)

module.exports = mongoose.model('article', wikiSchema)