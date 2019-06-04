//считаем количество элементов в Json
var NULL = 'na';

$(document).ready(function() {

var data = { names : ["Саша" , "Мокарова", "Таня", "Шуманова", "Ира", "Лелевская", "Олеся", "Багданова"]};


    $("button").click(function () {
       /// var reqData = jQuery.parseJSON(data);

        let count = 0;
        for (var c in data){
            count = count + 1;
        }
        console.log('общее количество элементов : ' + count);
        console.log('количество элементов масивa : ' + data.length);

        console.log('вывод всех элементов : ' + Object.entries(data));
      //  console.log('вывод определенного второго элемента : ' + data.names);
        console.log('вывод определеного ' +
            'элемента из масива если масив есть если ' +
            'более одного масива то вывод из ' +
            'каждого масива определенного элемента например 3 :' + data.names[2]);
    });
});


