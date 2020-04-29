const _ = require('lodash');
const {
    Specilization
} = require('../models/specilization.model')
const Respond = require('../helpers/resHelper');
const hash = require('object-hash');

exports.create = async (req, res) => {
    let data = {
        tag: req.body.tag,
        image: req.body.image
    }
    let specilization = new Specilization(data);
    specilization = await specilization.save();
    return Respond.success('specilization created successfully', specilization.toJSON(), res);
};


exports.multi_create = async (req, res) => {    
    Specilization.insertMany(req.body.tags, (err, sps) => {
        if(!err){
            return Respond.exception(err, null, res);
        }
        if (!!sps)
            return Respond.success('specilizations created successfully', sps, res);
    });

}; 

exports.list = async (req,res) => {
    let specilizations = await Specilization.find();
    if (!specilizations) {
        return Respond.notFound("no data found", false, res);
    }
    return Respond.success("Lawyer found", specilizations, res);
};