const _ = require('lodash');
const {
    Questionnaire
} = require('../models/questionnaire.model')
const Respond = require('../helpers/resHelper');
const hash = require('object-hash');

exports.create = async (req, res) => {
    let data = {
        question:req.body.question,
        question_type:req.body.question_type,
        related_to:req.body.related_to,
        has_option:req.body.has_option,
        level:req.body.level
    }
    let questionnaire = new Questionnaire(data);
    questionnaire = await questionnaire.save();
    return Respond.success('questionnaire created successfully', questionnaire.toJSON(), res);
};

exports.getQuestions = async (req,res) => {
    let cond = {};
    if(req.query.level){
        cond['level'] = req.query.level; 
    }
    if(req.query.qtype){
        cond['question_type'] = parseInt(req.query.qtype) == 1; 
    }

    let question = await Questionnaire.find(cond);
    console.log(question);

    if (!question) {
        return Respond.notFound("no question found", false, res);
    }

    return Respond.success("question found", question, res);

};


/*exports.multi_create = async (req, res) => {    
    Questionnaire.insertMany(req.body.tags, (err, sps) => {
        if(!err){
            return Respond.exception(err, null, res);
        }
        if (!!sps)
            return Respond.success('questionnaire created successfully', sps, res);
    });

}; */