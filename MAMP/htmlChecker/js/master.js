$(document).ready(function() {

 timer();

    $("input[class=output]").on('DOMSubtreeModified', function () {
        $('input[class=checker]').text($('#jqueryOutput').text());
    });

});



function timer() {
    setInterval(function() {
        var date = new Date();
        var time = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
        $('input[class=output]').text(time);
        //checker();
    },1000)
}

