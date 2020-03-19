const _ = require('lodash');
const {
    CaseDetail
} = require('../models/case_detail.model')
const Respond = require('../helpers/resHelper');
const hash = require('object-hash');

exports.add = async (req, res) => {

       let data = {
        client_id:req.body.client_id,
        case_status: req.body.case_status,
        case_title: req.body.case_title,
        categorie: req.body.categorie,
        city: req.body.city_select,
        case_decription: req.body.case_decription,
           
    };
    let casedetail = new CaseDetail(data);
    casedetail = await casedetail.save();
    return Respond.success('client created successfully', casedetail.details, res);
};
