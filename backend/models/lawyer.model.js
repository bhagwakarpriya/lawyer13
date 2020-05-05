var mongoose = require("mongoose");

var LawyerSchema = mongoose.Schema({
//    _id: mongoose.Schema.Types.ObjectId,
    name: {
        first_name : {type: String, required: true},
        last_name: {type: String, required: true}
    },
    email: {type: String, required: true},
    phone_no: {type: Number, required: false},
    city: {type: String, required: true},
    gender: {type: String, required: true},
    password: {type: String, required: true},
    usertype:{type:String,default:"admin"},
    imagepath:{type:String,default:""},
    is_delete:{type:Boolean,default:false},
    is_active:{type:Boolean,default:true},
    created: {
        type: Date,
        default: Date.now
    }
});
LawyerSchema
.virtual('full_name')
.get(function () {
  return this.first_name + ', ' + this.last_name;
});
LawyerSchema
.virtual('details')
.get(function(){
    return {
        id:this._id,
        name: {
            first_name : this.name.first_name,
            last_name: this.name.last_name
        },
        full_name : this.name.first_name + " " + this.name.last_name,
        email: this.email,
        phone_no: this.phone_no,
        city: this.city,
        gender: this.gender,
        usertype:this.usertype,
        is_delete:this.is_delete,
        is_active:this.is_active
       }
});

var Lawyer = mongoose.model("Lawyer", LawyerSchema,'lawyers');
exports.Lawyer = Lawyer;