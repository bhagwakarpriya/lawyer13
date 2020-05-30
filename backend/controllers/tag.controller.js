const _ = require('lodash');
const {
    Tag
} = require('../models/tag.model')
const Respond = require('../helpers/resHelper');
const hash = require('object-hash');

exports.create = async (req, res) => {
    let data = {
        tag:req.body.tag,
        category_level:req.body.category_level,
        parent_tag:req.body.parent_tag,
        text:req.body.text
    }
    let tag = new Tag(data);
    tag = await tag.save();
    return Respond.success('tag created successfully', tag.toJSON(), res);
};

exports.multi_create = async (req, res) => {    
    Tag.insertMany(req.body.tags, (err, sps) => {
        if(!err){
            return Respond.exception(err, null, res);
        }
        if (!!sps)
            return Respond.success('tags created successfully', sps, res);
    });

};

exports.getLawyerList = async (req,res) => {
    console.log(req.params.tag);
    if (!req.params.tag) {
        return Respond.badRequest("Missing client tag", [], res);
    }
    let cond = {};
    if(req.params.tag){
        cond['tag'] = req.params.tag; 
    }

    let tag = await Tag.find(cond);
    console.log(tag);

    if (!tag) {
        return Respond.notFound("no data found", false, res);
    }

    return Respond.success("Tags found", tag, res);

};

exports.getTags = async (req,res) => {
    let cond = {};
    if(req.query.level){
        cond['category_level'] = req.query.level; 
    }
    if(req.query.parent){
        cond['parent_tag'] = req.query.parent; 
    }
    let tags = await Tag.find(cond);
    console.log(tags);

    if (!tags) {
        return Respond.notFound("no data found", false, res);
    }

    return Respond.success("Tags found", tags, res);

};