const _ = require('lodash');
const {
    Superauthority
} = require('../models/superauthority.model')
const Respond = require('../helpers/resHelper');
const hash = require('object-hash');

//exports.register = async (req,res) => {
   // return Respond.success('function not implemented', {}, res);
//}

exports.manage = async (req, res) => {

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
        password: hash(cypherdata)
    };

    let superauthority = new Superauthority(data);
    superauthority = await superauthority.save();
    return Respond.success('superauthority created', superauthority.admin_details, res);
};

    // if (!superauthority) {
    //     return Respond.unauthorized('Invalid details', false, res);
    // }

    // let superauthority = await Client.findOne({
    //     email: req.body.email,
    //     password: hash(cypherdata)
    // });
    // if (!superauthority) {
    //     return Respond.unauthorized('Invalid login details', false, res);
    // }
    // return Respond.success('Superauthority data ', data, res);


