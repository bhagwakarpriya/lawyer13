var Lawyer = function () {
    var lawyerinit = function () {

        $('body').on('click', '.deactivelawyer', function () {

            var id = $(this).data('id');
            setTimeout(function () {
                $('.yes-sure-deactive:visible').attr('data-id', id);
            }, 500);
        });

        $('body').on('click', '.yes-sure-deactive', function () {
            var id = $(this).attr('data-id');
            $.ajax({
                type: "POST",
                url: baseurl + "admin/Lawyer/deactivelawyer",
                data: {id: id},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });

//        Active 
        $('body').on('click', '.activelawyer', function () {
            var id = $(this).data('id');
            setTimeout(function () {
                $('.yes-sure-active:visible').attr('data-id', id);
            }, 500);
        });
        $('body').on('click', '.yes-sure-active:visible', function () {
            var id = $(this).attr('data-id');
            $.ajax({
                type: "POST",
                url: baseurl + "admin/Lawyer/activelawyer",
                data: {id: id},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });

        $('body').on('click', '.delete', function () {
            var id = $(this).data('id');
            setTimeout(function () {
                $('.yes-sure-lawyer:visible').attr('data-id', id);
            }, 500);
        });

        $('body').on('click', '.yes-sure-lawyer', function () {
            var id = $(this).attr('data-id');
            $.ajax({
                type: "POST",
                url: baseurl + "admin/Lawyer/deleteLawyer",
                data: {id: id},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });

    }
    return{
        lawyer: function () {
            lawyerinit();
        },
    };
}();