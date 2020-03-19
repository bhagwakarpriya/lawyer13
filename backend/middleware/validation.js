const Joi = require('@hapi/joi');
const {ObjectID} = require('mongodb');

const Respond = require('../helpers/resHelper');

exports.errorResponse = (errors, res) => {
    let errRes = [];

    if(errors.error) {
        errors = errors.error.details

        for(let e = 0; e < errors.length; e++) {
            let msg = errors[e].message
            msg = msg.replace(/["']/g, "")
            errRes.push(msg.replace(/_/g, ' '))
        }
        
        if(errRes.length > 0) {
            return Respond.badRequest('there was a problem processing your request.', errRes, res);
        }
    }
    
    return false;
}

exports.validateObjectId = (objectId) => {

    if(!ObjectID.isValid(objectId)) {
        return false
    }

    return true;
}

/**
 * general validation
 */
exports.checkObjectId = async(req, res, next) => {
    let paramsKey = req.route.path
    let param = paramsKey.split(':')[1];
    let paramObject = req.params[`${param}`];

    if(!ObjectID.isValid(paramObject)) {
        return Respond.badRequest(`invalid ${param} id`, false, res);
    }

    next();
}