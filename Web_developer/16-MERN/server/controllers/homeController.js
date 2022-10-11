const UserDB = require('../models/Users')

const getAllUser = (req,res)=>{
    UserDB.find()
    .then(data=>res.status(200).json(data))
    .catch(err=>res.status(404).json(err))
}

const getOneUser = (req,res)=>{
    const id = req.params.id
    UserDB.findById(id)
    .then(data=>res.status(200).json(data))
    .catch(err=>res.status(404).json(err))
}

const addUser = (req,res) => {
    const newUser = new UserDB(
        {
            username: req.body.username,
            password: req.body.password
        }
    )
    newUser.save()
        .then(()=>{
            console.log('Data saved successfully!')
            res.status(201).json(newUser)
        })
        .catch(err=>res.status(404).json({saveError: err}))
}

const editUser = (req,res) => {
    const id = req.params.id
    console.log(req.body)
    const username = req.body.username
    const password = req.body.password
    UserDB.updateOne({_id:id},{$set:{username,password}})
        .then((data)=>{
            console.log(`${id} data was updated!`)
            res.status(200).json(data)
        })
        .catch(err=>{
            console.log({updateError:err})
            res.status(404).json({updateError:err})
            })
}

const deleteUser = (req,res) => {
    const id = req.params.id
    UserDB.findByIdAndDelete(id)
        .then((data)=>{
            console.log(`${id} data was deleted!`)
            res.status(200).json(data)
        })
        .catch(err=>res.status(404).json({deleteError:err}))
}

module.exports = {getAllUser, getOneUser, addUser, deleteUser, editUser}