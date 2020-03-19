const _ = require('lodash');
const {
    LawyerMeta
} = require('../models/lawyer_meta.model')
const Respond = require('../helpers/resHelper');
const hash = require('object-hash');

exports.add = async (req, res) => {
       let data = {
        id:req.body.id,
        lawyeridimage:req.body.lawyeridimage,
        edulist: req.body.edulist,
        aboutme: req.body.aboutme,
        barcoucilno: req.body.barcoucilno,
        statebarcouncil_select: req.body.statebarcouncil_select,
        experienceText: req.body.experienceText,
        designation: req.body.designation,
        explist: req.body.explist,
        secondaryexpertise: req.body.secondaryexpertise,
        phonefees: req.body.phonefees,
        phonefeesremarks: req.body.phonefeesremarks,
        meetingfees: req.body.meetingfees,
        meetingfeesremarks: req.body. meetingfeesremarks,
        reviewdocfees: req.body.reviewdocfees,
        reviewdocremarks: req.body.reviewdocremarks, 
        fillcaseincourtfees: req.body.fillcaseincourtfees,  
        fillcaseincourtremarks:req.body.fillcaseincourtremarks,
        hearingfees: req.body.hearingfees,
        hearingfeesremarks: req.body.hearingfeesremarks, 
        servicesname: req.body.servicesname, 
        otherfees: req.body.otherfees, 
        otherremarks: req.body.otherremarks,       
    };
    let lawyer_meta = new LawyerMeta(data);
    lawyer_meta_resp = await lawyer_meta.save();
    return Respond.success('profile edited successfully', lawyer_meta_resp.details, res);
};

let findByLawyerId = async (id) => {

};
