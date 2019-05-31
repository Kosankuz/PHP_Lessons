$(document).ready(function() {

 getData();
 checkModification();


});


function getData() {
    setInterval(function () {
        $.post( "./php/data.php", function( data ) {
            $('span.output').text(data);
        });
    },400);
}

function getData() {
    setInterval(function () {
        $.get( "./php/data.php", function( data ) {
            $('span.output').text(data);
        });
    },400);
}

function checkModification() {
    $("span.output").on('DOMSubtreeModified', function () {
        $('span.checker').text('Span tag 1 was modified : ' + $('span.output').text());
    });
}