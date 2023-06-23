$(document).ready(function(){
    $('.delcart').click(function(e){
        e.preventDefault();
       var prod_id = $(this).data('cartid');
       console.log(prod_id);

       $.ajax({
        method: 'DELETE',
        url : '/deletcart',  
        data: { 'prod_id' : prod_id },  
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function (response) {
            (response.status);
            window.location.reload();
           // $('.delcart').find('.prod_id').html(response.status);

        },
    });
       
    });

});
