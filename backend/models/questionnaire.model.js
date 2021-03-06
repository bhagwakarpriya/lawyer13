var mongoose = require("mongoose");

var questionnaireSchema = mongoose.Schema({    
    question:String,
    question_type:Boolean,
    related_to:String,
    has_option:Boolean,
    level:Number,
    validate_type:String
});

var Questionnaire = mongoose.model("questionnaire", questionnaireSchema,"questionnaire");
exports.Questionnaire = Questionnaire;