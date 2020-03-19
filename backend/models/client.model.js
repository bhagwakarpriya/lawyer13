var mongoose = require("mongoose");
var ClientSchema = mongoose.Schema({
    name: {
        first_name : {type: String, required: true},
        last_name: {type: String, required: true}
    },
    
    email: {type: String, required: true},
    phone_no: {type: Number, required: false},
    city: {type: String, required: true},
    gender: {type: String, required: true},
    password: {type: String, required: true},
    created: { 
        type: Date,
        default: Date.now
    }
});

ClientSchema
.virtual('full_name')
.get(function () {
  return this.name.first_name + ' ' + this.name.last_name;
});

ClientSchema
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
        gender: this.gender
    }
});

var Client = mongoose.model("Client", ClientSchema,'client');
exports.Client = Client;