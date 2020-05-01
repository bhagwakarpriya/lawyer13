const express = require('express');
const routes = express.Router();

//middleware
const clientValidate = require('../middleware/validation/clients.validation');

// controller
const CLIENT = require('../controllers/client.controller')

routes.get('/',[],CLIENT.list);
routes.post('/register',[],CLIENT.register);
routes.post('/login',[clientValidate.login],CLIENT.login);
routes.post('/forgetpwd',[],CLIENT.forgetpwd);
routes.delete('/:id',[],CLIENT.delete);
routes.put('/:id',[],CLIENT.activedeactive);
module.exports = routes;   