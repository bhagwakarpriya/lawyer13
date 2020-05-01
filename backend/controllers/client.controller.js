const _ = require('lodash');
const {
    Client
} = require('../models/client.model')
const Respond = require('../helpers/resHelper');
const hash = require('object-hash');

exports.register = async (req, res) => {
    let cypherdata = {
        email: req.body.email,
        password: req.body.password
    }
    let data = {
        name: {
            first_name: req.body.name.first_name,
            last_name: req.body.name.last_name
        },
        email: req.body.email,
        phone_no: req.body.phone_no,
        city: req.body.city,
        gender: req.body.gender,
        password: hash(cypherdata)
    };
    let client = new Client(data);
    client = await client.save();
    return Respond.success('client created successfully', client.details, res);
};

exports.list = async (req, res) => {

    let cond = {};
    if (!!req.query.name) {
        cond['name'] = req.query.name;
    }

    let clients = await Client.find(cond);
    console.log(clients);

    if (!clients) {
        return Respond.notFound("no data found", false, res);
    }

    return Respond.success("client found", clients, res);
};

exports.login = async (req, res) => {

    let cypherdata = {
        email: req.body.email,
        password: req.body.password
    }

    if (!Client) {
        return Respond.unauthorized('Invalid login details', false, res);
    }

    let client = await Client.findOne({
        email: req.body.email,
        password: hash(cypherdata)
    });

    if (!client) {
        return Respond.unauthorized('Invalid login details', false, res);
    }
    return Respond.success('client login successfully', client.details, res);
};
exports.forgetpwd = async (req, res) => {
    
    let client = await Client.findOne({
        email: req.body.email
    });
    if (!client) {
        return Respond.badRequest("Invalid Email Id", false, res);
    }
    let cypherdata = {
        email: req.body.email,
        password: req.body.password
    }
    client = await Client.findByIdAndUpdate(client._id, {$set:{password:hash(cypherdata)}}, (err, result) => {
        if (!!err) {
            return Respond.exception('Something want wrong :', err, res);
        }
        return Respond.success("Password updated", result.details, res);
    });
};

exports.delete = async (req, res) => {
    let cond = {}    
    if (!req.params.id) {
        return Respond.badRequest("Missing client id", [], res);
    }
    let client = await Client.findById(req.params.id);
    if (!client) {
        return Respond.notFound("Client not found or invalid id", [], res);
    }
    client = await Client.findByIdAndUpdate(client._id, {$set:{is_delete:client.is_delete === false?true:true},}, (err, result) => {
        if (!!err) {
            return Respond.exception('Something want wrong :', err, res);
        }
        console.log('result.is_delete:',result.is_delete);
        return Respond.success("Status updated", result.details, res);
    });
};

exports.activedeactive = async (req, res) => {
    if (!req.params.id) {
        return Respond.badRequest("Missing Lawyer id", [], res);
    }
    let client = await Client.findById(req.params.id);
    if (!client) {
        return Respond.notFound("Client not found or invalid id", [], res);
    }
    console.log('client.is_active:', client.is_active);
    client = await Client.findByIdAndUpdate(client._id, { $set: { is_active: client.is_active === true ? false : true }, }, (err, result) => {
        if (!!err) {
            return Respond.exception('Something want wrong :', err, res);
        }
        // console.log('result.is_active:', result.is_active);
        return Respond.success("Status updated", [], res);
    });
}