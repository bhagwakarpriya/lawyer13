var mongoose = require("mongoose");

var lawyerSpecilizationTypeSchema = mongoose.Schema({
    _id: mongoose.Schema.Types.ObjectId,
    lawyer : {
        type : mongoose.Schema.Types.ObjectId,
        ref : 'Lawyer'
    },
    specilizationType : {
        type : mongoose.Schema.Types.ObjectId,
        ref : 'SpecilizationType'
    },
    created: { 
        type: Date,
        default: Date.now
    }
})

var LawyerSpecilizationType = mongoose.model("LawyerSpecilizationType", lawyerSpecilizationTypeSchema,'lawyer_specilization_types');
exports.LawyerSpecilizationType = LawyerSpecilizationType;