const Joi = require('@hapi/joi');

const {errorResponse} = require('../validation');

const Respond = require('../../helpers/resHelper');
const {Client} = require('../../models/client.model');


exports.login = async(req,res,next) => {
    const clientLoginSchema = Joi.object({
        email : Joi.string().email().required(),
        password : Joi.string().required()
    });
    let errors = clientLoginSchema.validate(req.body, {abortEarly: false, stripUnknown: true});
    if(errors.error) {
        return errorResponse(errors, res)
    }    
    next();
}