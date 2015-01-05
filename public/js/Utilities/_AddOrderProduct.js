$(document).ready(function (){

    $("#btnSearch").click(function () {
        $.ajax({
            url: '/admin/order/getaddproducttable',
            type: 'post',
            data: { orderID : $("#OrderID").val(), keyword: $("#txtAddProduct").val() },
            success: function(data) {
                $("#searchProductsTable").html(data);
            },
            error: function(xhr, textStatus, thrownError) {
                alert('Something went to wrong.Please Try again later...' + thrownError);
            }
        });
    });

});