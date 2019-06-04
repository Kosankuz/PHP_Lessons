//считаем количество элементов в Json
var NULL = 'na';

$(document).ready(function() {

var data =  {
    "name":"John",
    "age":30,
    "cars": [
        { "name":"Ford", "models":[ "Fiesta", "Focus", "Mustang" ] },
        { "name":"BMW", "models":[ "320", "X3", "X5" ] },
        { "name":"Fiat", "models":[ "500", "Panda" ] }
    ]
}

    $("button").click(function () {
       /// var reqData = jQuery.parseJSON(data);

        let count = 0;
        for (var c in data){
            count = count + 1;
        }
        console.log('общее количество элементов : ' + count);
        console.log('количество элементов масивa : ' + data.cars.length );

        console.log('вывод всех элементов : ' + Object.entries(data));
       console.log('вывод определенного второго элемента : ' + data.age);
        console.log('вывод определеного ' +
            'элемента из масива если масив есть если ' +
            'более одного масива то вывод из ' +
            'каждого масива определенного элемента например 3 :' + data.cars[2].models[0]);
    });
});


