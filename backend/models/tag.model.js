var mongoose = require("mongoose");

var tagSchema = mongoose.Schema({    
    tag:String,
    category_level:Number,
    parent_tag:String,
    text:String
});

var Tag = mongoose.model("tag", tagSchema,"tag");
exports.Tag = Tag;