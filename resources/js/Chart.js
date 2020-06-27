// graph(lavel_lan,value_lan);
function graph(lavels,values) {
    'use strict';
    var type = 'line';
    var data = {
        labels: lavels,
        datasets: [{
            backgroundColor: [
                "#BB5179",
                "#FAFF67",
                "#58A27C",
                "#3C00FF",
                "#3B02FF",
                "pink",
            ],
            label: 'type A',
            data: values,
        }
        ]
    };

    var options;
    var ctx = $('#chart')[0].getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });
    return (options,ctx,myChart);
};

window.onload = function(){
    $.ajax({
        type:'GET',
        url:'/getStudy',

    })
    .done(function(response){
        const minutes = response;
        const lavel_lan = minutes.map(minute=>minute[0]+'min');
        const value_lan = minutes.map(minute=>minute[1])
        console.log(lavel_lan);
        console.log(value_lan);
        graph(lavel_lan,value_lan);
    })
}




// (function() {
//     'use strict';
//     var type = 'line';
//     var data = {
//         labels: ['ruby', 'php', 'python', 'mysql', 'css'],
//         datasets: [{
//             backgroundColor: [
//                 "#BB5179",
//                 "#FAFF67",
//                 "#58A27C",
//                 "#3C00FF",
//                 "#3B02FF"
//             ],
//             label: 'type A',
//             data: [111, 222, 333, 444, 555]
//         }
//         ]
//     };

//     var options;
//     var ctx = $('#chart')[0].getContext('2d');
//     var myChart = new Chart(ctx, {
//         type: 'pie',
//         data: data,
//         options: options
//     });
// })();
