//считаем количество элементов в Json
var NULL = 'na';

$(document).ready(function() {

var data = '{ "Саша": "Мокарова", "Таня": "Шуманова", "Ира": "Лелевская", "Олеся": "Багданова"}';


    $("button").click(function () {
        var reqData = jQuery.parseJSON(data);

        let count = 0;
        for (var c in reqData){
            count = count + 1;
        }
        console.log('общее количество элементов : ' + count);
      //  console.log('количество масивов : ' + reqData.length);
      //  console.log('количество элементов в каждом масиве : ' + NULL);
        console.log('вывод всех элементов : ' + Object.entries(reqData));
        console.log('вывод определенного второго элемента : ' + reqData.Таня);
        console.log('вывод определеного ' +
            'элемента из масива если масив есть если ' +
            'более одного масива то вывод из ' +
            'каждого масива определенного элемента например 3 :' + NULL);

    });
});


