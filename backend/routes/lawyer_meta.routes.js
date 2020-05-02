const express = require('express');
const routes = express.Router();

//middleware
//const casedetailValidate = require('../middleware/validation/casedetail.validation.js');

// controller
const LAWYER_META = require('../controllers/lawyer_meta.controller')

// routes.post('/edit',[],LAWYER_META.edit);

module.exports = routes;