var Lawyerprofile = function () {
    var init = function () {
        var form = $('#lawyer-editprofile');
        var rules = {
            filename: {required: true},
            education: {required: true},
            institutename: {required: true},
            aboutme: {required: true},
            barcoucilno: {required: true},
            statebarcouncil_select: {required: true},
            year: {required: true},
            month: {required: true},
            designation: {required: true},
            idimage: {required: true},
            expertise: {required: true},
            experienceyear: {required: true},
            numberOfCase: {required: true},
            secondaryexpertise: {required: true},
            phonefees: {required: true},
            meetingfees: {required: true},
            reviewdocfees: {required: true},
            fillcaseincourtfees: {required: true},
            hearingfees: {required: true},
            servicesname: {required: true},
            otherfees: {required: true},
        };
        var messages = {
            filename: {required: "Please select your profile"},
            education: {required: "Plase select your equcation"},
            institutename: {required: "Plase Enter your institute name and added"},
            aboutme: {required: "Plase Enter something about yourself which will be shown to the Clients"},
            barcoucilno: {required:"Plase Enter your barcoucil number"},
            statebarcouncil_select: {required: "Plase select your barcoucil state"},
            year: {required: "Plase select your Practicing starting year"},
            month: {required: "Plase select your Practicing starting month"},
            designation: {required: "Plase enter your designation" },
            idimage: {required: "Please select your barcouncil image"},
            expertise:{required: "Plase select your expertise"},
            experienceyear:{required: "Plase enter your expertise year"},
            numberOfCase:{required: "Plase enter number of case handled"},
            secondaryexpertise:{required: "Plase select your secondary expertise"},
            phonefees: {required: "Plase enter phone fees"},
            meetingfees: {required:  "Plase enter phone fees"},
            reviewdocfees: {required:  "Plase enter review to document fees"},
            fillcaseincourtfees: {required:  "Plase enter fill case in court fees"},
            hearingfees: {required:  "Plase enter hearing fees"},
            servicesname: {required:  "Plase enter other service name"},
            otherfees: {required:  "Plase enter other service fees"},
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form, true);
        });
        function getEducations(){
            return $("#ui_edu li").map(function() {
            return $(this).data("edu");
        }).get();
        }
        var count = 0;
        $('body').on("click", ".addEdcution", function () {
            var institutename = $("#institutename").val();
            var education = $("#education_select").val();
            var edu_inst = education + "|" + institutename;
            var html = "<lable class='strokegap-icon strokegap-icon-House'>" + education + "</lable> - " +
                        "<lable class='strokegap-icon strokegap-icon-House'>" + institutename + "</lable>" +
                        "<a href='javascript:void(0);' class='clearitem' onclick='javascipt:$(this).parent().remove();'>x</a>";
            var edu = $('<li></li>').html(html).data('edu', {education:education, institutename:institutename});
                    $('#ui_edu').append(edu);
            var curr_edu_list = $("#edulist").val().split(",");
                    curr_edu_list.push(edu_inst);
            $("#edulist").val(curr_edu_list.join())
            });
        $('body').on("click", ".addExpertiseInButton", function () {
            var expertise_select = $("#expertise_select").val();
            var experienceyear = $("#experienceyear").val();
            var numberOfCase = $("#numberOfCase").val();
            var exp_inst = expertise_select + "|" + experienceyear + "|" + numberOfCase;
            var html = "<lable class='strokegap-icon strokegap-icon-House'>" + expertise_select + "</lable><br>" +
                       "<lable class='strokegap-icon strokegap-icon-House'>" + experienceyear + "</lable><br>" +
                       "<lable class='strokegap-icon strokegap-icon-House'>" + numberOfCase + "</lable><br>";
            $(".primaryexp").prepend(html);
                var curr_edu_list = $("#explist").val().split(",");
                    curr_edu_list.push(exp_inst);
                $("#explist").val(curr_edu_list.join())
            });
        $('body').on("click", ".addExpertiseInButton", function(){
            var experienceyear = $("#experienceyear")
            var expertise_select = $("#expertise_select").val();
            $(".primaryexp").prepend(html);
        });
        function yearsDiff(d1, d2) {
            var date1 = new Date(d1);
            var date2 = new Date(d2);
            var yearsDiff = date2.getFullYear() - date1.getFullYear();
         return yearsDiff;
        }
        $('body').on("change", ".month_select", function(){
            var year = $("#year_select").val();
            var month = $("#month_select").val();
            var d = new Date();
            var cy = d.getFullYear();
            var cm = d.getMonth();
            if (year != '' && month != ""){
                var d1 = new Date(year, month, 01).getTime();
                var d2 = new Date(cy, cm, 25).getTime();
                var date1 = new Date(d1);
                var date2 = new Date(d2);
                var years = yearsDiff(d1, d2);
                var months = (years * 12) + (date2.getMonth() - date1.getMonth());
                var y = months / 12;
                var m = months % 12;
            $("#experienceText").val(Math.floor(y) + " Year " + m + " Months ");
                } else{
                    $("#year_select").val('');
                    $("#month_select").val('');
                }
            });
    };
    return {
        edit: function () {
            init();
        },
    }
}();
