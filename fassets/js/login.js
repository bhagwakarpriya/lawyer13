var Login = function () {
    var logininit = function () {
        var form = $('#lawyer-login');
        var rules = {
            email: {required: true, email: true},
            password: {required: true},
        };
        var messages = {
            email: {
                required: "Please your email address",
                email: "Please enter vaild email address"
            },
            password: {
                required: "Please your password",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    };
    return {
        init: function () {
            logininit();
        },
    }
}();
