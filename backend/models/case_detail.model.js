var mongoose = require("mongoose");
var CaseDetailSchema = mongoose.Schema({
    client_id: {
        type: mongoose.Schema.Types.ObjectId,
        ref: 'client'
    },
    case_status: {type:Boolean,default:true},
    city: { type: String, required: true },
    case_title: { type: String, required: true },
    case_decription: { type: String, required: true },
    created: {
        type: Date,
        default: Date.now
    }
});


CaseDetailSchema
    .virtual('details')
    .get(function () {
        return {
            client_id:this.client_id,
            case_status: this.case_status,
            city: this.city,
            case_title: this.case_title,
            case_decription: this.case_decription
        }
    });

var CaseDetail = mongoose.model("Case", CaseDetailSchema, 'casedetail');
exports.CaseDetail = CaseDetail;