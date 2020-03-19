const Joi = require('@hapi/joi');

const {errorResponse} = require('../validation');

const Respond = require('../../helpers/resHelper');
const {Tag} = require('../../models/tag.model');

const TagCreateSchema = Joi.object({
    tag : Joi.string().required(),
    category_level : Joi.number().required(),
    parent_tag:Joi.string().required(),
    text:Joi.string().required()
})

exports.create = async(req,res,next) => {    
    let errors = TagCreateSchema.validate(req.body, {abortEarly: false, stripUnknown: true});
    if(errors.error) {
        return errorResponse(errors, res)
    }    
    next();
}

exports.multiCreate = async(req,res,next) => {    
    const TagMultiCreateSchema = Joi.object({
        tags : Joi.array().min(1).required().items(TagCreateSchema).required()
    });
    let errors = TagMultiCreateSchema.validate(req.body, {abortEarly: false, stripUnknown: true});
    if(errors.error) {        
        return errorResponse(errors, res)
    }
    next();
}
