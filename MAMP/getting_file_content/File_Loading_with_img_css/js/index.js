

$(document).ready(function() {

    $("button").on('click', function () {
        $.ajax({
            type: "GET",
            url: "php/second.php",
            beforeSend:function(){
                console.log('loading');
                $("div.modal").show();


            },
            complete:function(data){
              $("div.modal").hide();
                $("textarea").text(JSON.stringify(data));



            }
        });
    });





});


