var Client = function () {
    var Clientinit = function () {
        $('body').on('click', '.deactiveclient', function () {
            var id = $(this).data('id');
            setTimeout(function () {
                $('.yes-sure-deactive:visible').attr('data-id', id);
            }, 500);
        });
        $('body').on('click', '.yes-sure-deactive', function () {
            var id = $(this).attr('data-id');
            $.ajax({
                type: "POST",
                url: baseurl + "admin/Client/deactiveClient",
                data: {id: id},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });

//        Active 
        $('body').on('click', '.activeclient', function () {
            var id = $(this).data('id');
            setTimeout(function () {
                $('.yes-sure-active:visible').attr('data-id', id);
            }, 500);
        });
        $('body').on('click', '.yes-sure-active:visible', function () {
            var id = $(this).attr('data-id');
            $.ajax({
                type: "POST",
                url: baseurl + "admin/Client/activeClient",
                data: {id: id},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });
   
        $('body').on('click', '.delete', function () {
            var id = $(this).data('id');
            setTimeout(function () {
                $('.yes-sure-client:visible').attr('data-id', id);
            }, 500);
        });

        $('body').on('click', '.yes-sure-client', function () {
            var id = $(this).attr('data-id');
            $.ajax({
                type: "POST",
                url: baseurl + "admin/Client/deleteClient",
                data: {id: id},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });

    }
    return{
        client: function () {
            Clientinit();
        },
    };
}();