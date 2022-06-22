@extends('layouts.app')

@section('title', 'Cliente')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<div class="container">
  <div class="row">
    <div class="col-sm">
        teste
    <div>
    </div>
    </div>
        <div class="col-sm mt-5 shadow-lg p-3 mb-5 bg-white rounded" >
             <canvas id="myChart" width="400" height="400"></canvas>
        </div>
     </div>
</div>

   
  
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Pedido Feito','Em Produção', 'A caminho', 'Entregue'],
        datasets: [{
            label: 'Status dos Projetos',
            data: [<?php echo$status[0]; ?>, <?php echo$status[1]; ?>, 
            <?php echo$status[2]; ?>, <?php echo$status[3]; ?>],
            backgroundColor: [
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
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>




@endsection
