$(document).ready(function() {
    $('#default_price').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: '/change',
            data: $('#default_price').serialize(),
            success: function(result){
                console.log(result);
            }
        });
    });
   /* $('#see_price').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/check',
            data: $('#see_price').serialize(),
            success: function(result){
                console.log(result);
                $('#price').val(result)
            }
        });
    });

 /  $('#new_interval').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/interval',
            data: $('#new_interval').serialize(),
            success: function(result){
                $('#table').append("<tr class='item" + result.id + "'><td class='text-center'>" + result.date_from + "</td>" +
                    "<td class='text-center'>" + result.date_till + "</td>" +
                    "<td class='text-center'>" + result.price + "</td>" +
                    " <td>" +
                    "<button class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            }
        });
    });
*/

});
