var mongoose = require("mongoose");

var tagSchema = mongoose.Schema({    
    tag:String,
    category_level:Number,
    parent_tag:String,
    text:String
});

tagSchema
    .virtual('details')
    .get(function () {
        return {
            tag:this.tag,
            category_level: this.category_level,
            parent_tag: this.parent_tag,
            text: this.text,
        }
    });

var Tag = mongoose.model("tag", tagSchema,"tag");
exports.Tag = Tag;