const express = require('express');
const routes = express.Router();

//middleware
const lawyerValidate = require('../middleware/validation/lawyer.validation');

// controller
const LAWYER = require('../controllers/lawyer.controller')
const LawyerMeta = require('../controllers/lawyer_meta.controller')
routes.get('/',[],LAWYER.select);
routes.get('/:id',[],LAWYER.selectbyid);

routes.post('/register',[],LAWYER.register);

routes.post('/login',[lawyerValidate.login],LAWYER.login);
routes.post('/forgetpwd',[],LAWYER.forgetpwd);
routes.put('/:id',[],LAWYER.activedeactive);
routes.post('/:id',[],LAWYER.edit_profile);
//routes.get('/:id',[],LAWYER.getlawyer);
 routes.delete('/:id',[],LAWYER.delete);

module.exports = routes;