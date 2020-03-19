const express = require('express');
const routes = express.Router();

//middleware
//const casedetailValidate = require('../middleware/validation/casedetail.validation.js');

// controller
const QUERY = require('../controllers/query.controller')
routes.post('/add',[],QUERY.add);

module.exports = routes;