var Categories = function () {
    var addPage = function () {
        var form = $('#addcategories');
        var rules = {
            categories_name: {required: true},
            image: {required: true},
        };
        var messages = {
            categories_name: {
                required: "Please your email address",
            },
            image: {
                required: "Please your password",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    };
    return{
        add: function () {
            addPage();
        },
    };
}();