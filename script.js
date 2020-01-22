
var canvas = document.getElementById("radarChart");
var ctx = canvas.getContext('2d');

// Global Options:
// Chart.defaults.global.defaultFontColor = 'black';
// Chart.defaults.global.defaultFontSize = 16;

var options = {
    responsive: true,
    maintainAspectRadio: true,
    legend: {
        position: 'top',
    },
    title: {
        display: true,
        text: 'Radar Chart'
    },
    scale: {
        reverse: false,
        ticks: {
            max:100,
            min: 0,
            beginAtZero: false,
        },
        pointLabels: {
            callback: function (pointLabel) {
                if (pointLabel.length > 10)
                    return pointLabel.substring(0, 10) + '...';
                else
                    return pointLabel
            }
        }

    },
    scaleOverride: true,
    scaleSteps: 5,
    scaleStepWidth: 20,
    scaleStartValue: 100,
};

var radarChartData = {
    labels: ["Humour", "Créativité", "Poésie"],
    datasets: [
        {
            label: "Achille Talon - Evaluation",
            backgroundColor: "rgba(179,181,198,0.2)",
            borderColor: "rgba(179,181,198,1)",
            pointBackgroundColor: "rgba(179,181,198,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(179,181,198,1)",
            data: [20, 40, 60]
        },

        {
            label: "Achille Talon - Auto-Evaluation",
            backgroundColor: "rgba(179,181,198,0.2)",
            borderColor: "rgba(179,181,198,1)",
            pointBackgroundColor: "rgba(179,181,198,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(179,181,198,1)",
            data: [30, 50, 70]
        },


        {
            label: "Arsène Lupin - Evaluation",
            backgroundColor: "rgba(255,99,132,0.2)",
            borderColor: "rgba(255,99,132,1)",
            pointBackgroundColor: "rgba(255,99,132,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(255,99,132,1)",
            data: [12, 62, 37]
        },

        {
            label: "Arsène Lupin - Auto-Evaluation",
            backgroundColor: "rgba(255,99,132,0.2)",
            borderColor: "rgba(255,99,132,1)",
            pointBackgroundColor: "rgba(255,99,132,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(255,99,132,1)",
            data: [25, 18, 74]
        }

    ]
};

var myRadarChart = new Chart(ctx, {
    type: 'radar',
    data: radarChartData,
    options: options
});
