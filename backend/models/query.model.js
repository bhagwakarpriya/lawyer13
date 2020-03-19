var mongoose = require("mongoose");

var QuerySchema = mongoose.Schema({
    email: {type: String, required: true},
    case_title: {type: String, required: false},
    category: {type: String, required: true},
    service: {type: String, required: true},
    state: {type: String, required: true},
    city: {type: String, required: false},
    detail: {type: String, required: true},
     created: { 
        type: Date,
        default: Date.now
    } 
});

var Query = mongoose.model("queary", QuerySchema,'queary');
exports.Query = Query;