


var var1 = 0.1000000;
var var2 = 0.0100000;
var var3 = 0.0010000;
var var4 = 0.0001000;

var arr= [var1,var2,var3,var4] ;

var tofixed = 2;


Number.prototype.countDecimals = function () {
    if(Math.floor(this.valueOf()) === this.valueOf()) return 0;
    return this.toString().split(".")[1].length || 0;
}

    console.log(var1.toFixed(var1.countDecimals()).toString().replace('.', ","));

    $('#input1').attr('placeholder', var1.toFixed(var1.countDecimals()).toString().replace('.', ","));
    $('#input2').attr('placeholder', var2.toFixed(var2.countDecimals()).toString().replace('.', ","));
    $('#input3').attr('placeholder', var3.toFixed(var3.countDecimals()).toString().replace('.', ","));
    $('#input4').attr('placeholder', var4.toFixed(var4.countDecimals()).toString().replace('.', ","));

//   $('#input1').val(var1.toFixed(var1.countDecimals()));
//   $('#input2').val(var2.toFixed(var2.countDecimals()));
//   $('#input3').val(var3.toFixed(var3.countDecimals()));
//   $('#input4').val(var4.toFixed(var4.countDecimals()));


