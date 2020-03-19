const Joi = require('@hapi/joi');

const {errorResponse} = require('../validation');

const Respond = require('../../helpers/resHelper');
const {Specilization} = require('../../models/specilization.model');

const spCreateSchema = Joi.object({
    tag : Joi.string().required(),
    // key : Joi.string().required()
});

exports.create = async(req,res,next) => {    
    let errors = spCreateSchema.validate(req.body, {abortEarly: false, stripUnknown: true});
    if(errors.error) {
        return errorResponse(errors, res)
    }    
    next();
}

exports.multiCreate = async(req,res,next) => {    
    const spMultiCreateSchema = Joi.object({
        tags : Joi.array().min(1).required().items(spCreateSchema).required()
    });
    let errors = spMultiCreateSchema.validate(req.body, {abortEarly: false, stripUnknown: true});
    if(errors.error) {        
        return errorResponse(errors, res)
    }
    next();
}