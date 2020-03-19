var mongoose = require("mongoose");

var specilizationTypeSchema = mongoose.Schema({    
    tag : String,
    image:{type:String,default:""}
});

var Specilization = mongoose.model("SpecilizationType", specilizationTypeSchema,"specilization_types");
exports.Specilization = Specilization;