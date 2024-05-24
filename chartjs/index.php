<?php

session_start();

 //Redirect the user to login page if he is not logged in.
	if(!isset($_SESSION['loggedIn'])){
		header('Location: ../connexion/logincs.php');
		exit();
	}
	
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
  
  
  
  <link href="../css/tutoo.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  
  <title>Tableau de bord</title>
</head>
<body id="bodyy">



<div class="container">
			<h2 class="text-center mt-4 mb-3" style="color: white; "> Tableau de bord</h2>
<br><br><br><br><br><br>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="" style="width:600px; margin-left:100px; margin-right:50px;" >
					<div class="card mt-4 mb-4">
						<div class="card-header">Prix par produit		-Bar Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart" >
								<canvas id="bar_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				
				
				
				
				<div class="" style="width:600px; margin-left:50px; margin-right:100px; " >
					<div class="card mt-4" >
						<div  class="card-header">les meilleurs fournisseurs(basic)		-Line Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="line_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="" style="width:600px; margin-left:100px; margin-right:50px; margin-bottom:30px; " >
				
					<div class="card mt-4" >
						<div class="card-header">Les meilleurs clients(LIFO)		-Pie Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="pie_chart_lifo"></canvas>
							</div>
						</div>
					</div>
				</div>
					
				<div class="" style="width:600px; margin-left:50px; margin-right:50px;" >
				
					<div class="card mt-4" >
						<div class="card-header">Les meilleurs clients(FIFO)		-Pie Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="pie_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="" style="width:600px; margin-left:100px; margin-right:50px;" >
					<div class="card mt-4 mb-4">
						<div class="card-header">Les meilleurs clients(basic)		-HorizontalBar Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart" >
								<canvas id="horibar_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				
				<div class="" style="width:600px; margin-left:50px; margin-right:100px;" >
					<div class="card mt-4 mb-4">
						<div class="card-header">Stock restant(basic)		-HorizontalBar Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart" >
								<canvas id="horibar_chart2"></canvas>
							</div>
						</div>
					</div>
				</div>
				
				
				
				<div class="" style="width:600px; margin-left:100px; margin-right:50px; margin-bottom:30px;" > 
					<div class="card mt-4">
						<div class="card-header">Stock restant(lifo)		-Doughnut Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="doughnut_chart3"></canvas>
							</div>
						</div>
					</div>
					</div>
				
				
				
				<div class="" style="width:600px; margin-left:50px; margin-right:50px; margin-bottom:30px;" > 
					<div class="card mt-4">
						<div class="card-header">Stock restant(fifo)		-Doughnut Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="doughnut_chart2"></canvas>
							</div>
						</div>
					</div>
				</div><br><br>
				
				
					
					
				
			</div>
		</div><br><br><br>
		<div class="form-group" >
						<center><a href="../acceuil/home.php"><button type="button" name="submit_data" class="btn btn-warning	" id="submit_data" >RETOUR</button></a></center>
					</div>
	</body>
</html>




<?php 
  $con = new mysqli('localhost','root','','stockges');
  $query = $con->query("
    SELECT nomprod, prix from produit
  ");

  $query2 = $con->query("
    SELECT nomprod, sum(qte) as stock from vue1 group by codeprod
  ");

  $query5 = $con->query("
    SELECT nomprod, sum(qte) as stock from vue2 group by codeprod
  ");

  $query6 = $con->query("
    SELECT nomprod, sum(qte) as stock from vue3 group by codeprod
  ");
  
  $query3 = $con->query("
    SELECT client.RAISSO_C, sum(mouvmt.quantite) as qte_achete FROM client, mouvmt where client.ID_C=mouvmt.ID_C and 
mouvmt.nature='Retrait_fifo' group by client.RAISSO_C;
  ");
  
  $query7 = $con->query("
    SELECT client.RAISSO_C, sum(mouvmt.quantite) as qte_achete FROM client, mouvmt where client.ID_C=mouvmt.ID_C and 
mouvmt.nature='Retrait_basic' group by client.RAISSO_C;
  ");
  
  $query8 = $con->query("
    SELECT client.RAISSO_C, sum(mouvmt.quantite) as qte_achete FROM client, mouvmt where client.ID_C=mouvmt.ID_C and 
mouvmt.nature='Retrait_lifo' group by client.RAISSO_C;
  ");
  
  $query4 = $con->query("
    
SELECT fournisseur.RAISSOCF, sum(mouvmt.quantite) as qte_founie FROM fournisseur, mouvmt where fournisseur.ID_F=mouvmt.ID_F and 
mouvmt.nature='depot' group by fournisseur.RAISSOCF;
  ");

  foreach($query as $data)
  {
    $dim[] = $data['nomprod'];
    $mes[] = $data['prix'];
  }
  foreach($query2 as $data2)
  {
    $dim2[] = $data2['nomprod'];
	
	if ($data2['stock']<0){
		$data2['stock']=0;
	}
    $mes2[] = $data2['stock'];
  }
  foreach($query5 as $data5)
  {
    $dim5[] = $data5['nomprod'];
    $mes5[] = $data5['stock'];
  }
  foreach($query6 as $data6)
  {
    $dim6[] = $data6['nomprod'];
    $mes6[] = $data6['stock'];
  }


foreach($query3 as $data3)
  {
    $dim3[] = $data3['RAISSO_C'];
    $mes3[] = $data3['qte_achete'];
  }
  
foreach($query7 as $data7)
  {
    $dim7[] = $data7['RAISSO_C'];
    $mes7[] = $data7['qte_achete'];
  }
  
  
foreach($query8 as $data8)
  {
    $dim8[] = $data8['RAISSO_C'];
    $mes8[] = $data8['qte_achete'];
  }
  
  
  foreach($query4 as $data4)
  {
    $dim4[] = $data4['RAISSOCF'];
    $mes4[] = $data4['qte_founie'];
  }

// <div style="
 // WIDTH: 700px;">
  // <canvas id="myChart"></canvas>
  
// </div>

?>



 
<script>
  // === include 'setup' then 'config' above ===
  const labels = <?php echo json_encode($dim) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: 'Prix ',
      data: <?php echo json_encode($mes) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };
  
 
  
  
  const labels2 = <?php echo json_encode($dim2) ?>;
  const data2 = {
    labels: labels2,
    datasets: [{
      label: 'Stock restant (basic)',
      data: <?php echo json_encode($mes2) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };
  
  
  const labels7 = <?php echo json_encode($dim7) ?>;
  const data7 = {
    labels: labels7,
    datasets: [{
      label: 'Quantité achetée',
      data: <?php echo json_encode($mes7) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };
  
  
  const labels8 = <?php echo json_encode($dim8) ?>;
  const data8 = {
    labels: labels8,
    datasets: [{
      label: 'Clients_lifo',
      data: <?php echo json_encode($mes8) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };
   const labels5 = <?php echo json_encode($dim5) ?>;
  const data5 = {
    labels: labels5,
    datasets: [{
      label: 'Seconde mesure',
      data: <?php echo json_encode($mes5) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };
   const labels6 = <?php echo json_encode($dim6) ?>;
  const data6 = {
    labels: labels6,
    datasets: [{
      label: 'Seconde mesure',
      data: <?php echo json_encode($mes6) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };
  
  
  const labels3 = <?php echo json_encode($dim3) ?>;
  const data3 = {
    labels: labels3,
    datasets: [{
      label: 'Troisième mesure',
      data: <?php echo json_encode($mes3) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };
  
  
 
  
  const labels4 = <?php echo json_encode($dim4) ?>;
  const data4 = {
    labels: labels4,
    datasets: [{
      label: 'Quanité fournie',
      data: <?php echo json_encode($mes4) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
		plugins: {
			legend:{
			position:'bottom',  
		}, 
		
			
		},
		
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  };
  
  const config11 = {
    type: 'bar',
    data: data7,
    options: {
		indexAxis:'y',
		plugins: {
			legend:{
			position:'bottom',  
		}, 
		
			
		},
		
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  };
  const config12 = {
    type: 'bar',
    data: data2,
    options: {
		indexAxis:'y',
		plugins: {
			legend:{
			position:'bottom',  
		}, 
		
			
		},
		
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  };
  
         const config4 = {
    type: 'line',
    data: data4,
    options: {
		plugins: {
			legend:{
			position:'bottom',  
		}, 
		
			
		},
      scales: {
		  
        yAxes: {
          beginAtZero: true
        }
      }
    },
  };
  
  
  
  const config2 = {
    type: 'pie',
    data: data3,
	options:{
		plugins: {
			legend:{
			position:'bottom',  
		}, 
		
			
		}
	},
    
  }; 
  
   
  
  const config8 = {
    type: 'pie',
    data: data8,
	options:{
		plugins: {
			legend:{
			position:'bottom',  
		}, 
		
			
		}
	},
    
  };
  const config5 = {
    type: 'doughnut',
    data: data5,
	options:{
		plugins: {
			legend:{
			position:'bottom',  
		}, 
		
			
		}
	},
    
  };
  const config6 = {
    type: 'doughnut',
    data: data6,
	options:{
		plugins: {
			legend:{
			position:'bottom',  
		}, 
		
			
		}
	},
    
  };
  
  
  
 
  

 
 //variables-- creation des charts 

  var myChart = new Chart(
    document.getElementById('bar_chart'),
    config
  );
  var myChart = new Chart(
    document.getElementById('horibar_chart'),
    config11
  );
  var myChart = new Chart(
    document.getElementById('horibar_chart2'),
    config12
  );
  
  
  var pie_chart = new Chart(
    document.getElementById('pie_chart'),
    config2
  );
  
 
  
  
  var pie_chart_lifo = new Chart(
    document.getElementById('pie_chart_lifo'),
    config8
  );
  
  
  
  
  var doughnut_chart = new Chart(
    document.getElementById('doughnut_chart2'),
    config5
  );
  
  var doughnut_chart = new Chart(
    document.getElementById('doughnut_chart3'),
    config6
  );
  
   var line_chart = new Chart(
    document.getElementById('line_chart'),
    config4
  );
  
</script>

</body>
</html>