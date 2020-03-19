const express = require('express');
const routes = express.Router();

//middleware
 const specilizationValidate = require('../middleware/validation/specilization.validation');

// controller
const SPECILIZATION = require('../controllers/specilization.controller')


routes.post('/create',[specilizationValidate.create],SPECILIZATION.create);

routes.post('/multi_create',[specilizationValidate.multiCreate],SPECILIZATION.multi_create);
routes.get('/',[],SPECILIZATION.list);
module.exports = routes;