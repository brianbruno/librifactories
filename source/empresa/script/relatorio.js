$( document ).ready(function() {
  // Handler for .ready() called.
    $('.modal').modal();
var ctx = document.getElementsByClassName("myChart");
for (let i = 0; i < 2; i++) {
    new Chart(ctx[i].getContext('2d'), {
    type: 'bar',
    data: {
        labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho"],
        datasets: [{
            label: '# vendas no mês',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
}
    
var ctx2 = document.getElementsByClassName("myChart2");
for (let i = 0; i < 2; i++) {
new Chart(ctx2[i].getContext('2d'),{
    "type":"pie",
    "data": {
        "labels": ["Shulambs","Shulambinho","Shulambze"],
        "datasets":[{
            "label":"My First Dataset",
            "data":[300,50,100],
            "backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]
        }]
    }
});
}

});