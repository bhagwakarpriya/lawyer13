var mongoose = require("mongoose");
var LawyerMetaSchema = mongoose.Schema({

    id: mongoose.Schema.Types.ObjectId,
    lawyeridimage:{type:String,default:""},
    edulist: {type: String, required: true},
    aboutme: {type: String, required: true},
    barcoucilno: {type: String, required: true},
    statebarcouncil_select: {type: String, required: true},
    experienceText: {type: String, required: true},
    designation: {type: String, required: true},
    explist:  {type: String, required: true},
    secondaryexpertise: {type: String, required: true},
    phonefees: {type: Number, required: true},
    phonefeesremarks: {type: String, required: true},
    meetingfees:  {type: Number, required: true},
    meetingfeesremarks: {type: String, required: true},
    reviewdocfees:  {type: Number, required: true},
    reviewdocremarks:  {type: String, required: true},
    fillcaseincourtfees:  {type: Number, required: true},
    fillcaseincourtremarks: {type: String, required: true},
    hearingfees:  {type: Number, required: true},
    hearingfeesremarks: {type: String, required: true},
    servicesname: {type: String, required: true}, 
    otherfees: {type: Number, required: true},
    otherremarks: {type: String, required: true},
    lawyer : {
        type : mongoose.Schema.Types.ObjectId,
        ref : 'Lawyer'
    },
    created: { 
         type: Date,
         default: Date.now
     }
});

LawyerMetaSchema
.virtual('details')
.get(function(){
    return {
        edulist:this.edulist,
        lawyeridimage:this.lawyeridimage,
        aboutme:this.aboutme, 
        barcoucilno:this.barcoucilno, 
        statebarcouncil_select:this.statebarcouncil_select, 
        experienceText:this.experienceText, 
        designation:this.designation, 
        explist:this.explist,
        secondaryexpertise:this.secondaryexpertise, 
        phonefees:this.phonefees, 
        phonefeesremarks:this.phonefeesremarks, 
        meetingfees:this.meetingfees,  
        meetingfeesremarks:this.meetingfeesremarks, 
        reviewdocfees:this.reviewdocfees,
        reviewdocremarks:this.reviewdocremarks,
        fillcaseincourtfees:this.fillcaseincourtfees,
        fillcaseincourtremarks:this.fillcaseincourtremarks, 
        hearingfees:this.hearingfees,
        hearingfeesremarks: this.hearingfeesremarks, 
        servicesname: this.servicesname,  
        otherfees: this.otherfees, 
        otherremarks: this.otherremarks,
        
       }
});

var LawyerMeta = mongoose.model("lawyerMeta", LawyerMetaSchema,'lawyer_meta');
exports.LawyerMeta = LawyerMeta;