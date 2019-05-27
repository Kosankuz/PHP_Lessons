$('.kr-dash-pan-auction-amount > ul > li' ).off('click').click(function() {

    let currentAmount = $('input[type="number"]');
    let newAmount = parseFloat(currentAmount.val());

    if($(this).attr('trade-act') === 'minus'){

        newAmount -= 1;
        currentAmount.val(parseFloat(newAmount));

    }else{

        newAmount += 1;
        currentAmount.val(parseFloat(newAmount));

    }

});