const mongoose = require('./conn')

const userSchema = new mongoose.Schema(
    {
        username: {
            type: String,
            unique: true
        },
        password: String
    }
)

module.exports = mongoose.model('user',userSchema)