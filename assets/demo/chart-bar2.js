const ctx = document.getElementById('myChart').getContext('2d');
const ctx2 = document.getElementById('ctx2').getContext('2d');
const ctx3 = document.getElementById('ctx3').getContext('2d');
const ctx4 = document.getElementById('ctx4').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['DEPORTE', 'EJERCICIO', 'Religioso', 'Turismo'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        ResponsIVE: true,
    }
});
const myChart1 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['hOMBRES', 'mUJERES', 'NIÑOS'],
        datasets: [{
            label: 'VISITANTES',
            data: [12, 19, 3, 5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        ResponsIVE: true,
    }
});
const myChart2 = new Chart(ctx3, {
    type: 'line',
    data: {
        labels: ['VILCABAMBA', 'PUERTA DE LA CIUDAD', 'TERMINAL TERRESTRE'],
        datasets: [{
            label: 'Centros de informacion',
            data: [12, 19, 3, 5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        ResponsIVE: true,
    }
});
const myChart3 = new Chart(ctx4, {
    type: 'polarArea',
    data: {
        labels: ['publico ', 'privado', 'otros'],
        datasets: [{
            label: 'Transporte',
            data: [12, 19, 3, 5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        ResponsIVE: true,
    }
});