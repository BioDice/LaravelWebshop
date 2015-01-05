function changeAmount(id)
{
    $.get('/changeamount', { productID : id, amount : $("#txtValue_" + id).val() },
        function(returnedData){
            location.reload();
        });
}

function changeAmountOrder(id)
{
    $.get('/admin/order/changeamount', { orderID : $("#OrderID").val(), productID : id, amount : $("#amount_" + id).val() },
        function(returnedData){
            location.reload();
        });
}