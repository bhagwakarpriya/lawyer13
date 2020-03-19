const express = require('express');
const routes = express.Router();

//middleware
 const tagValidate = require('../middleware/validation/tag.validation');

// controller
const TAG = require('../controllers/tag.controller')


routes.post('/create',[tagValidate.create],TAG.create);

routes.post('/multi_create',[tagValidate.multiCreate],TAG.multi_create);
routes.get('/',[],TAG.getTags);
module.exports = routes;