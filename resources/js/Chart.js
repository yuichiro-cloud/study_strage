
(function() {
    'use strict';
    var type = 'line';
    var data = {
        labels: ['ruby', 'php', 'python', 'mysql', 'css'],
        datasets: [{
            backgroundColor: [
                "#BB5179",
                "#FAFF67",
                "#58A27C",
                "#3C00FF",
                "#3B02FF"
            ],
            label: 'type A',
            data: [111, 222, 333, 444, 555]
        }
        // , {
        //     label: 'type B',
        //     data: [1,2,3,4,5]
        // }
    ]
    };

    var options;
    var ctx = $('#chart')[0].getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });
})();
