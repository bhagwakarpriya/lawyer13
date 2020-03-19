var Registration = function () {
    var init = function () {
        var form = $('#lawyer-reg');
        var rules = {
            filename: {required: true},
            Firstname: {required: true},
            Lastname: {required: true},
            Email: {required: true, email: true},
            phone_no: {required: true},
            Password: {required: true},
            c_Password: {required: true, equalTo: Password},
            gender: {required: true},
            city_select: {required: true},
        };
        var messages = {
            filename: {required: "Please select your profile"},
            Firstname: {required: "Please enter your first name"},
            Lastname: {required: "Please enter your last name"},
            Email: {
                required: "Please enter your email address",
                email: "Please enter vaild email address"
            },
            phone_no: {required: "Please enter your Phone number"},
            Password: {required: "Please enter your password"},
            c_Password: {required: "Please enter your Confirm Password",
                equalTo: "password not match"},
            gender: {required: "Please select your Gender"},
            city_select: {required: "Please select your country"},
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    };
    var clientinit = function () {
        var form = $('#client-reg');
        var rules = {
            Firstname: {required: true},
            Lastname: {required: true},
            Email: {required: true, email: true},
            Contact: {required: true},
            Password: {required: true},
            c_Password: {required: true, equalTo: Password},
            gender: {required: true},
            city_select: {required: true},
        };
        var messages = {
            Firstname: {required: "Please enter your first name"},
            Lastname: {required: "Please enter your last name"},
            Email: {
                required: "Please enter your email address",
                email: "Please enter vaild email address"
            },
            Contact: {required: "Please enter your Phone number"},
            Password: {required: "Please enter your password"},
            c_Password: {required: "Please enter your Confirm Password",
                equalTo: "password not match"},
            gender: {required: "Please select your Gender"},
            city_select: {required: "Please select your country"},
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    };
    return {
        init: function () {
            init();
        },
        clientinit: function () {
            clientinit();
        },
    }
}();
