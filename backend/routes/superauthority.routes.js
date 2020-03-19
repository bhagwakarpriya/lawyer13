const express = require('express');
const routes = express.Router();

//middleware
//const lawyerValidate = require('../middleware/validation/lawyer.validation.js');

// controller
const SUPERAUTHORITY = require('../controllers/superauthority.controller')

routes.post('/manage',[],SUPERAUTHORITY.manage);

module.exports = routes;