const Joi = require('@hapi/joi');

const {errorResponse} = require('../validation');

const Respond = require('../../helpers/resHelper');
const {Questionar} = require('../../models/questionnaire.model');

const queCreateSchema = Joi.object({
    question : Joi.string().required(),
    question_type : Joi.boolean().required(),
    related_to : Joi.string().required(),
    has_option:Joi.boolean().required()
});

exports.create = async(req,res,next) => {    
    let errors = queCreateSchema.validate(req.body, {abortEarly: false, stripUnknown: true});
    if(errors.error) {
        return errorResponse(errors, res)
    }    
    next();
}

/*exports.multiCreate = async(req,res,next) => {    
    const spMultiCreateSchema = Joi.object({
        tags : Joi.array().min(1).required().items(spCreateSchema).required()
    });
    let errors = spMultiCreateSchema.validate(req.body, {abortEarly: false, stripUnknown: true});
    if(errors.error) {        
        return errorResponse(errors, res)
    }
    next();
}*/