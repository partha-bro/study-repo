const homeRouter = require('express').Router()
const homeController = require('../controllers/homeController')

homeRouter.get('/', homeController.home)

module.exports = homeRouter