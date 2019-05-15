$(document).ready(function() {


    $('body').off('click').click(function() {
        toggleLeaderBoard();
    });

    function toggleLeaderBoard() {

                $.get('job.php').done(function(data){
                  //  $('.kr-rankingside > *').not('header').remove();
                    $('.kr-rankingside').append(data);
                });

    }




})