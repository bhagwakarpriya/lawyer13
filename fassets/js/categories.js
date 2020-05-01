var Categories = function () {
    var addPage = function () {
        var form = $('#addcategories');
        var rules = {
            categories_name: {required: true},
            image: {required: true},
        };
        var messages = {
            categories_name: {
                required: "Please select categories name",
            },
            image: {
                required: "Please select image",
            },
        };
        handleFormValidateWithMsg(form, rules, messages, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    };
    var addSubCategories = function () {
        var form = $('#addcategories');
        var rules = {
            categories_name: {required: true},
            subcategories_name: {required: true},
        };
        var messages = {
            categories_name: {
                required: "Please select categories name",
            },
            subcategories_name: {
                required: "Please your subcategories_name",
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
        addsubcategories: function () {
            addSubCategories();
        },
    };
}();