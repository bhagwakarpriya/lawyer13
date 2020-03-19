const express = require('express');
const routes = express.Router();

//middleware
//const casedetailValidate = require('../middleware/validation/casedetail.validation.js');

// controller
const CASEDETAIL = require('../controllers/case_detail.controller')
routes.post('/add',[],CASEDETAIL.add);

module.exports = routes;