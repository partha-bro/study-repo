const Users = require('../models/Users')

const home = (req,res) => {
    Users.find().then((data)=>{
        console.log(data)
        res.render('Home', {data})
    })
}

module.exports = { home }