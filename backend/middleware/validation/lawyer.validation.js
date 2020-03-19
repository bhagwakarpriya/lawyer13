const Joi = require('@hapi/joi');

const {errorResponse} = require('../validation');

const Respond = require('../../helpers/resHelper');
const {Lawyer} = require('../../models/lawyer.model');


exports.login = async(req,res,next) => {
    const lawyerLoginSchema = Joi.object({
        email : Joi.string().email().required(),
        password : Joi.string().required()
    });
    let errors = lawyerLoginSchema.validate(req.body, {abortEarly: false, stripUnknown: true});
    if(errors.error) {
        return errorResponse(errors, res)
    }    
    next();
}