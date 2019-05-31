$(document).ready(function() {

 getData();
 checkModification();


});


function getData() {
    setInterval(function () {
        $.post( "./php/data.php", function( data ) {
            $('output').text(data);
        });
    },400);
}

function checkModification() {
    $("output").on('DOMSubtreeModified', function () {
        $('checker').text('Span tag 1 was modified : ' + $('output').text());
    });
}