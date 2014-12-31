function changeAmount(id)
{
    $.get('/changeamount', { productID : id, amount : $("#txtValue_" + id).val() },
        function(returnedData){
            location.reload();
        });
    /*
    $.ajax({
        url: '/changeamount',
        type: 'post',
        data: { productID : id, amount : $("#txtValue_" + id).val() },
        beforeSend: function() {
            $("#validation-errors").hide().empty();
        },
        success: function(data) {
        },
        error: function(xhr, textStatus, thrownError) {
            alert('Something went to wrong.Please Try again later...');
        }
    });
    return false;
    */
}