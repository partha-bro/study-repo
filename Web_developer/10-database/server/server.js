require('dotenv').config()
const server = require('express')()
const logger = require('node-color-log')
const { Course, Student, Enroll } = require('./model/Course')
const bodyParser = require('body-parser')

server.use(bodyParser.urlencoded())

server.route('/')
.get(
    (req,res)=>{
        console.log(logger.debug('Server is UP...!'))
        res.status(200).json(
            {
                message: 'Server is UP...!'
            }
        )
    }
)

server.route('/courses')
.get(
    (req,res)=>{
        Course.find()
        .then(data=>res.status(200).json(data))
        .catch(err=>res.status(500).json({Error:err}))
    }
)
.post(
    (req,res)=>{
        const newCourse = new Course(req.body)
        newCourse.save().then(()=>res.redirect('/courses'))
        .catch(err=>res.status(500).json({Error:err}))
    }
)
server.route('/students')
.get(
    (req,res)=>{
        Student.find()
        .then(data=>res.status(200).json(data))
        .catch(err=>res.status(500).json({Error:err}))
    }
)
.post(
    (req,res)=>{
        const newStudent = new Student(req.body)
        newStudent.save().then(()=>res.redirect('/students'))
        .catch(err=>res.status(500).json({Error:err}))
    }
)
server.route('/enrolls')
.get(
    (req,res)=>{
        Enroll.find().populate('courses').populate('students')
        .then(data=>res.status(200).json(data))
        .catch(err=>res.status(500).json({Error: err}))
    }
)
.post(
    (req,res)=>{
        const newEnroll = new Enroll(
            {
                courses: req.body.courseId,
                students: req.body.studentId
            }
        )
        newEnroll.save().then(()=>res.redirect('/enrolls'))
        .catch(err=>res.status(500).json({Error: err}))
    }
)


server.listen(process.env.PORT, ()=>{
    console.log(logger.success(`Server is running on ${process.env.PORT}`))
})