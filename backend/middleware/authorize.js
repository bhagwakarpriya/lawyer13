const CONFIG = require('../config/config');

const {Client} = require('../models/client.model');
const Respond = require('../helpers/resHelper');

exports.superAdmin = (req, res, next) => {

    // let appId = CONFIG.app_id
    // let appSecret = CONFIG.app_secret
    // if(req.headers['app-id'] !== appId || req.headers['app-secret'] !== appSecret) {
    //     return Respond.unauthorized('invalid app-id or app-secret', false, res);
    // } 
    
    next()
}

exports.api = async (req, res, next) => {

    // if(!req.headers['app-id'] || !req.headers['app-secret']) {
    //     return Respond.unauthorized('missing application credentials', false, res);
    // }    

    // let app;
    // try {
    //     app = await App.findOne({
    //         app_id: appId,
    //         app_secret: appSecret,
    //         active: true,
    //     })

    //     if(!app) {
    //         return Respond.unauthorized('invalid app-id or app-secret', false, res);
    //     }
    // } catch (err) {
    //     return Respond.unauthorized('invalid app-id or app-secret', false, res);
    // }
    
    // req.body.app = app._id;
    next()
}

exports.auth = (req, res, next) => {

    // if(!req.headers['auth-token'] || req.headers['auth-token'] === '') {
    //     return Respond.unauthorized('missing auth token', false, res)
    // }
    // req.body.token = req.headers['auth-token'];

    next();
}