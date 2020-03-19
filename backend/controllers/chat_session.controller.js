const _ = require('lodash');
const {
    ChatSession
} = require('../models/chat_session.model')
const Respond = require('../helpers/resHelper');
const hash = require('object-hash');
const Utils = require('../helpers/utils');
exports.submit = async (req, res) => {

    if(!req.body.session_id){
        req.body.session_id = Utils.getRandomString(10);
    }
    let data = {
        session_id: req.body.session_id,
        question: req.body.question_id,
        answer: req.body.answer,
        related_to: req.body.related_to
    };
    let chatSession = new ChatSession(data);
    chatSession = await chatSession.save();
    return Respond.success('chat session created successfully', chatSession.details, res);
};
exports.list = async (req, res) => {
    ChatSession.find({}, (error, chats) => {
        return Respond.success('chat found', chats, res);
    })
}
exports.listById = async (req, res) => {
    if (!req.params.session_id) {
        return Respond.badRequest("Missing Session id", [], res);
    }
    ChatSession.find({session_id: req.params.session_id}, (error, chats) => {
        return Respond.success('chat found', chats, res);
    })
}