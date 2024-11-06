<?php
$pageTitle = "home";

include "view-header.php";
?>

<style>
  #myChart {
    max-width: 500px;
    max-height: 500px;
    width: 100px;
    height: auto;
  }
</style>
  
<canvas id="myChart" width="400" height="400"></canvas>

<script>
  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: [],
      datasets: [{
        label: 'Number of Loans',
        data: [],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
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
      responsive: true,
     
    }
  });
</script>

<?php
include "view-footer.php";
?>
