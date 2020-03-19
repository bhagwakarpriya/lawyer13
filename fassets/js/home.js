var Home = function () {
    var init = function () {
        var form = $('#casedetail');
        var rules = {
            case_title: {required: true},
            categorie: {required: true},
            city_select: {required: true},
            case_decription: {required: true,},
        };
        var messages = {
            case_title: {required: "Please enter your case title"},
            categorie: {required: "Please select categorie"},
            city_select: {required: "Please select city"},
            case_decription: {required: "Please enter your case matter",},
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    };
    return {
        casedetail: function () {
            init();
        },
    }
}();
