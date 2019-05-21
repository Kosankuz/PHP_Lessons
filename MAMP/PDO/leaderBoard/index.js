$(document).ready(function() {


    $('body').off('click').click(function() {
        toggleLeaderBoard();
    });

    function toggleLeaderBoard() {
       // $('.kr-rankingside').toggleClass('kr-rankingside-show');


       // if($('.kr-rankingside').hasClass('kr-rankingside-show')){
            //$('[kr-side-part="kr-leaderboard"]').addClass('kr-leftnav-select');
            //if($('.kr-rankingsite-mine').length == 0){
                $.get('/php/mysql.php').done(function(data){
               //     $('.kr-rankingside > *').not('header').remove();
                    $('.kr-rankingside').append(data);
                });
         //   }
       // }//else{
        //    $('[kr-side-part="kr-leaderboard"]').removeClass('kr-leftnav-select');
       // }

        /////////
    }




})