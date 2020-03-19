const express = require('express');
const routes = express.Router();

//middleware
const questionnaireValidate = require('../middleware/validation/questionnaire.validation');

// controller
const QUESTIONNAIRE = require('../controllers/questionnaire.controller')
routes.post('/create',[questionnaireValidate.create],QUESTIONNAIRE.create);
routes.get('/',[],QUESTIONNAIRE.getQuestions);

module.exports = routes;