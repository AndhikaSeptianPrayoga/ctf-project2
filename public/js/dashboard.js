// Get the chart canvas element
var ctx = document.getElementById('users-chart').getContext('2d');

// Create a new chart instance
var chart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['User 1', 'User 2', 'User 3', 'User 4', 'User 5'],
    datasets: [{
      label: 'Users',
      data: [10, 20, 30, 40, 50],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)'
      ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)'
        ],
        borderWidth: 1
    }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
