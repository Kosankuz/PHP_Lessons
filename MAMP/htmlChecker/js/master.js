$(document).ready(function() {

 timer();
    console.log($('span.output').text());
    $("span.output").on('DOMSubtreeModified', function () {
        $('span.checker').text($('span.output').text());
    });

});



function timer() {
    setInterval(function() {
        var date = new Date();
        var time = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
        $('span.output').text(time);
        //checker();
    },1000)
}

