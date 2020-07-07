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
    return (myChart);
};

$(function(){
    $.ajax({
        type:'GET',
        url:'/getStudy',

    })
    .done(function(response){
        const minutes = response;
        const lavel_lan = minutes.map(minute=>minute[0]);
        const value_lan = minutes.map(minute=>minute[1])
        console.log(lavel_lan);
        console.log(value_lan);
        graph(lavel_lan,value_lan);
    });
});


