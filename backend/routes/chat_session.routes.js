const express = require('express');
const routes = express.Router();

//middleware
//const clientValidate = require('../middleware/validation/clients.validation');

// controller
const CHATBOT = require('../controllers/chat_session.controller')


routes.post('/submit',[],CHATBOT.submit);
routes.get('/chats',[],CHATBOT.list);
routes.get('/chats/:session_id',[],CHATBOT.listById);

module.exports = routes;