require('dotenv').config()

const mongoose = require('mongoose')
const logger = require('node-color-log')

const database = 'educationDB'

mongoose.connect(process.env.MONGODB_URL+database)
.then(e=>console.log(logger.success(`Mongo DB Successfully connect to ${e.connection.host}`)))
.catch(err=>console.log(logger.error(`DB Connect Error: ${err}`)))

const courseSchema = new mongoose.Schema(
    {
        courseName: {
            type: String
        },
        price: {
            type: Number,
            min: 5000,
            max: 10000
        }
    }
)

const studentSchema = new mongoose.Schema(
    {
        studentName: {
            type: String
        },
        age: {
            type: Number,
            min: 18,
            default: 18
        }
    }
)

const enrollSchema = new mongoose.Schema(
    {
        courses: [{type:mongoose.Schema.Types.ObjectId, ref:'course'}],
        students: [{type:mongoose.Schema.Types.ObjectId, ref:'student'}]
    }
)

const Course = mongoose.model('course',courseSchema)
const Student = mongoose.model('student',studentSchema)
const Enroll = mongoose.model('enroll',enrollSchema)

module.exports = { Course, Student, Enroll }