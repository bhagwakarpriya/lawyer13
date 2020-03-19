var mongoose = require("mongoose");
var SuperauthoritySchema = mongoose.Schema({
    name: {
        first_name : {type: String, required: true},
        last_name: {type: String, required: true}
    },
    email: {type: String, required: true},

    password: {type: String, required: true}
   
    
});


SuperauthoritySchema
.virtual('full_name')
.get(function () {
  return this.name.first_name + ' ' + this.name.last_name;
});

SuperauthoritySchema
.virtual('admin_details')
.get(function(){
    return {
        name: {
            first_name : this.name.first_name,
            last_name: this.name.last_name
        },
    
        email: this.email,
        password:this.password
        
    }
});

var Superauthority = mongoose.model("Superauthority", SuperauthoritySchema,'superauthority');
exports.Superauthority = Superauthority;