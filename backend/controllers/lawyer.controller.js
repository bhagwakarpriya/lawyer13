const _ = require('lodash');
const { Lawyer } = require('../models/lawyer.model')
const { LawyerMeta } = require('../models/lawyer_meta.model')

const Respond = require('../helpers/resHelper');
const hash = require('object-hash');

exports.register = async (req, res) => {
    let cypherdata = {
        email: req.body.email,
        password: req.body.password
    }
    let data = {
        name: {
            first_name: req.body.name.first_name,
            last_name: req.body.name.last_name
        },
        email: req.body.email,
        phone_no: req.body.phone_no,
        city: req.body.city,
        gender: req.body.gender,
        password: hash(cypherdata),
        usertype: req.body.usertype,
        is_delete: req.body.is_delete,
        imagepath: req.body.file

    };
    let lawyer = new Lawyer(data);
    lawyer = await lawyer.save();
    return Respond.success('Registration successfully', lawyer.details, res);
};

exports.select = async (req, res) => {

    let lawyers = await Lawyer.find({
        // is_active:true,node
        is_delete:false
    });
    console.log(lawyers);
    if (!lawyers) {
        return Respond.notFound("no data found", false, res);
    }
    return Respond.success("Lawyer found", lawyers, res);

    // dbo.collection("customers").find({}).toArray(function (err, result) {
    // if (err) throw err;
    // console.log(result);

};

exports.selectbyid = async (req, res) => {

    if (!req.params.id) {
        return Respond.badRequest("Missing Lawyer id", [], res);
    }
    
    let lawyer = await Lawyer.findById(req.params.id).populate("lawyer_meta")
    if (!lawyer) {
        return Respond.notFound("Lawyer not found or invalid id", [], res);
    }

    console.log(lawyer);


    return Respond.success("Lawyer found", lawyer, res);

    // dbo.collection("customers").find({}).toArray(function (err, result) {
    // if (err) throw err;
    

};

exports.login = async (req, res) => {
    let cypherdata = {
        email: req.body.email,
        password: req.body.password
    }
    if (!Lawyer) {
        return Respond.unauthorized('Invalid login details', false, res);
    }
    let lawyer = await Lawyer.findOne({
        email: req.body.email,
        password: hash(cypherdata)
    });
    if (!lawyer) {
        return Respond.unauthorized('Invalid login details', false, res);
    }
    return Respond.success('lawyer loggedin successfully', lawyer.details, res);
};

exports.activedeactive = async (req, res) => {

    if (!req.params.id) {
        return Respond.badRequest("Missing Lawyer id", [], res);
    }

    let lawyer = await Lawyer.findById(req.params.id);
    if (!lawyer) {
        return Respond.notFound("Lawyer not found or invalid id", [], res);
    }

    console.log('lawyer.is_active:', lawyer.is_active);
    lawyer = await Lawyer.findByIdAndUpdate(lawyer._id, { $set: { is_active: lawyer.is_active === true ? false : true }, }, (err, result) => {
        if (!!err) {
            return Respond.exception('Something want wrong :', err, res);
        }
        console.log('result.is_active:', result.is_active);
        return Respond.success("Status updated", [], res);
    });
}

exports.edit_profile = async (req, res) => {
    if (!req.params.id) {
        return Respond.badRequest("Missing Lawyer id", [], res);
    }
    let lawyer = await Lawyer.findById(req.params.id);
    if (!lawyer) {
        return Respond.notFound("Lawyer not found or invalid id", [], res);
    }
    let updata_lawyer = {
        imagepath: req.body.file
    };
    lawyer = await Lawyer.findByIdAndUpdate(lawyer._id, { $set: updata_lawyer }, (err, result) => {
        if (!!err) {
            return Respond.exception('Something want wrong :', err, res);
        }
      
        console.log('result.is_active:', result.is_active);
        return Respond.success("Status updated", result.details, res);
    });
}

exports.forgetpwd = async (req, res) => {
    let lawyer = await Lawyer.findOne({
        email: req.body.email
    });
    if (!lawyer) {
        return Respond.badRequest("Invalid Email Id", false, res);
    }
    let cypherdata = {
        email: req.body.email,
        password: req.body.password
    }
    lawyer = await Lawyer.findByIdAndUpdate(lawyer._id, { $set: { password: hash(cypherdata) } }, (err, result) => {
        if (!!err) {
            return Respond.exception('Something want wrong :', err, res);
        }
        return Respond.success("Password updated", result.details, res);
    });
};

exports.delete = async (req, res) => {
    
    lawyer = await Lawyer.findByIdAndDelete(req.params.id, function (err, result)  {
        if(!!err) {
            return Respond.exception('Something want wrong :', err, res);
        }
            return Respond.success("Lawyer deleted", [], res);
    });
};

let findByLawyerId = async (id) => {

};
