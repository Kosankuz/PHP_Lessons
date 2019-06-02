$(document).ready(function() {

    $("button").click(function () {

        // делаем GET запрос
        $.ajax({
            type: "GET",
            url: "php/second.php",
            beforeSend:function(){
                $("div.modal").show();
                $('textarea').text('');
            $('button').attr('disabled', true);
            },
            complete:function(data){
              $("div.modal").hide();
                $("textarea").text(JSON.stringify(data['responseText']));

           $('button').attr('disabled', false);
            }
        });

    });
});


