const express = require('express')
const cors = require('cors')
const homeController = require('../controllers/homeController')

const router = express.Router()
router.use(cors())
router.use(express.json())

router.get('/users', homeController.getAllUser)
router.post('/add', homeController.addUser)
router.get('/user/:id', homeController.getOneUser)
router.patch('/edit/:id', homeController.editUser)
router.delete('/delete/:id', homeController.deleteUser)

module.exports = router