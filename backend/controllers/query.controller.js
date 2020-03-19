const _ = require('lodash');
const {
     Query
} = require('../models/query.model')
const Respond = require('../helpers/resHelper');
const hash = require('object-hash');

exports.add = async (req, res) => {
   
       let data = {
           email: req.body.email,
           case_title: req.body.case_title,
           category: req.body.category,
           service: req.body. service,
           state: req.body.state,
           city: req.body.city,
           detail: req.body.detail
       };
    let query = new Query(data);
    query = await query.save();
    return Respond.success('details added successfully', query.details, res);
};