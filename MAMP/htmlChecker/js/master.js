$(document).ready(function() {

 timer();

    $("#jqueryOutput").on('DOMSubtreeModified', function () {
        $('#checker').text($('#jqueryOutput').text());
    });

});



function timer() {
    setInterval(function() {
        var date = new Date();
        var time = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
        $('#jqueryOutput').text(time);
        //checker();
    },1000)
}



/*
function checker() {
    var currentValue = $('#jqueryOutput').text();
    var newValue;
    setTimeout(function () {
        var newValue = $('#jqueryOutput').text();
        console.log('newValue' + newValue);
        console.log('Old value' + currentValue);
        if (currentValue !== newValue){

            $('#checker').text(newValue);
        } else {

            $('#checker').text('current value eqals  new value');
        }
    },1000);


}*/