const _ = require("lodash");
const { Lawyer } = require("../models/lawyer.model");
const { LawyerMeta } = require("../models/lawyer_meta.model");
const { LawyerMetaCont } = require("./lawyer_meta.controller");
const Respond = require("../helpers/resHelper");
const hash = require("object-hash");

exports.register = async (req, res) => {
	let cypherdata = {
		email: req.body.email,
		password: req.body.password,
	};
	let data = {
		name: {
			first_name: req.body.name.first_name,
			last_name: req.body.name.last_name,
		},
		email: req.body.email,
		phone_no: req.body.phone_no,
		city: req.body.city,
		gender: req.body.gender,
		password: hash(cypherdata),
		usertype: req.body.usertype,
		is_delete: req.body.is_delete,
		imagepath: req.body.file,
	};
	let lawyer = new Lawyer(data);
	lawyer = await lawyer.save();
	return Respond.success("Registration successfully", lawyer.details, res);
};

exports.select = async (req, res) => {
	let lawyers = await Lawyer.find({
		// is_active:true,node
		is_delete: false,
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
	let lawyer = await Lawyer.findById(req.params.id);

	if (!lawyer) {
		return Respond.notFound("Lawyer not found or invalid id", [], res);
	}

	// For populate we can only use it
	// if we have it's object id saved in record
	let lawyer_meta = await LawyerMeta.findOne({
		lawyer_id: lawyer._id,
	}).populate("lawyer_id");
	
	return Respond.success(
		"Lawyer found",
		{
			lawyer: lawyer,
			lawyer_meta: lawyer_meta,
		},
		res
	);
};

exports.login = async (req, res) => {
	let cypherdata = {
		email: req.body.email,
		password: req.body.password,
	};
	if (!Lawyer) {
		return Respond.unauthorized("Invalid login details", false, res);
	}
	let lawyer = await Lawyer.findOne({
		email: req.body.email,
		password: hash(cypherdata),
	});
	if (!lawyer) {
		return Respond.unauthorized("Invalid login details", false, res);
	}
	return Respond.success("lawyer loggedin successfully", lawyer.details, res);
};

exports.activedeactive = async (req, res) => {
	if (!req.params.id) {
		return Respond.badRequest("Missing Lawyer id", [], res);
	}

	let lawyer = await Lawyer.findById(req.params.id);
	if (!lawyer) {
		return Respond.notFound("Lawyer not found or invalid id", [], res);
	}

	console.log("lawyer.is_active:", lawyer.is_active);
	lawyer = await Lawyer.findByIdAndUpdate(
		lawyer._id,
		{ $set: { is_active: lawyer.is_active === true ? false : true } },
		(err, result) => {
			if (!!err) {
				return Respond.exception("Something want wrong :", err, res);
			}
			console.log("result.is_active:", result.is_active);
			return Respond.success("Status updated", [], res);
		}
	);
};

exports.edit_profile = async (req, res) => {
	if (!req.params.id) {
		return Respond.badRequest("Missing Lawyer id", [], res);
	}
	let lawyer = await Lawyer.findById(req.params.id);
	if (!lawyer) {
		return Respond.notFound("Lawyer not found or invalid id", [], res);
	}
	let updata_lawyer = {
		imagepath: req.body.filename,
	};
	lawyer = await Lawyer.findByIdAndUpdate(
		lawyer._id,
		{ $set: updata_lawyer },
		(err, result) => {
			if (!!err) {
				return Respond.exception("Something want wrong :", err, res);
			}
			//let lawyer_meta=await
			add_lawyer_meta(lawyer, req, res);
			console.log("result.is_active:", result.is_active);
			return Respond.success("Status updated", result.details, res);
		}
	);
};

exports.forgetpwd = async (req, res) => {
	let lawyer = await Lawyer.findOne({
		email: req.body.email,
	});
	if (!lawyer) {
		return Respond.badRequest("Invalid Email Id", false, res);
	}
	let cypherdata = {
		email: req.body.email,
		password: req.body.password,
	};
	lawyer = await Lawyer.findByIdAndUpdate(
		lawyer._id,
		{ $set: { password: hash(cypherdata) } },
		(err, result) => {
			if (!!err) {
				return Respond.exception("Something want wrong :", err, res);
			}
			return Respond.success("Password updated", result.details, res);
		}
	);
};

exports.delete = async (req, res) => {
	let cond = {};
	if (!req.params.id) {
		return Respond.badRequest("Missing lawyer id", [], res);
	}
	let lawyer = await Lawyer.findById(req.params.id);
	if (!lawyer) {
		return Respond.notFound("Lawyer not found or invalid id", [], res);
	}
	lawyer = await Lawyer.findByIdAndUpdate(
		lawyer._id,
		{ $set: { is_delete: lawyer.is_delete === false ? true : true } },
		(err, result) => {
			if (!!err) {
				return Respond.exception("Something want wrong :", err, res);
			}
			console.log("result.is_delete:", result.is_delete);
			return Respond.success("Status updated", result.details, res);
		}
	);
};

let findByLawyerId = async (id) => {};

let add_lawyer_meta = async (lawyer, req, res) => {
	// add code here to find lawyer menta by req.body.id
	// let lawyer_meta=await LawyerMeta.findById(req.body.id);
	// Model.find({ 'some.value': 5 }, function (err, docs) {
	//     // docs is an array
	//   }); // if
	let data = {
		lawyer_id: lawyer._id,
		lawyeridimage: req.body.lawyeridimage,
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
		meetingfeesremarks: req.body.meetingfeesremarks,
		reviewdocfees: req.body.reviewdocfees,
		reviewdocremarks: req.body.reviewdocremarks,
		fillcaseincourtfees: req.body.fillcaseincourtfees,
		fillcaseincourtremarks: req.body.fillcaseincourtremarks,
		hearingfees: req.body.hearingfees,
		hearingfeesremarks: req.body.hearingfeesremarks,
		servicesname: req.body.servicesname,
		otherfees: req.body.otherfees,
		otherremarks: req.body.otherremarks,
	};

	let lawyer_meta = await LawyerMeta.findOne({
		lawyer_id: lawyer._id,
	});
	if (!lawyer_meta) {
		//need to create and return

		let lawyer_meta = new LawyerMeta(data);
		lawyer_meta_resp = await lawyer_meta.save();
		return Respond.success("Lawyer meta added", [], res);
	}
	//need to update and return
	LawyerMeta.findOneAndUpdate({ _id: lawyer_meta._id }, { $set: data }).exec(
		function (err, lawyer_meta) {
			if (err) {
				console.log(err);
				return Respond.exception("Issue in updating lawyer mata", [], res);
			}
			return Respond.success("Lawyer meta updated", lawyer_meta.details, res);
		}
	);

	//  return Respond.success('profile edited successfully', lawyer_meta_resp.details, res);
};
