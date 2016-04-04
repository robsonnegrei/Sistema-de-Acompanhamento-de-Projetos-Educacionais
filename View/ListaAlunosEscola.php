<!DOCTYPE html>
<?php
	require_once (__DIR__).'/ControleListaAluno.php';	
?>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<title>Lista De Alunos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        var data = google.visualization.arrayToDataTable([
         ['Month', 'Pre-Silabico', 'Silabico', 'Silabico Alfabetico', 'Alfabetico', 'Ortografico'],
         
        <?php 
          $k = $i;
          for($k = 0; $k < 4; $k++){
        ?>
          ['<?php echo $periodo[$k] ?>',<?php echo $nivelPreSila[$k]; ?>,<?php echo $nivelSila[$k]; ?>,<?php echo $nivelSilaAfalb[$k]; ?>,<?php echo $nivelAfalb[$k]; ?>,<?php echo $nivelOrt[$k]; ?>],
        <?php } ?>
      ]);

    var options = {
      title : 'Nivel dos Alunos',
      vAxis: {title: 'Quantidade'},
      hAxis: {title: 'Periodo'},
      seriesType: 'bars',
      series: {5: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
    </script>

</head>
<body>

	<h1>Nome dos Alunos da Escola</h1>		

	<input type="hidden"  name="formEscola" value="<?php echo $_GET['formEscola']; ?>"  >

	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Nivel</th>
				<th>Periodo</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php 
					if(empty($_POST['idEscola']) && empty($idEsc)){
							
					}else{
						
						foreach($arrayAlunos as $aluno){
							echo'<tr>';
							echo '<td>'.$aluno->nome.'</td>';	
							echo '<td>'.$aluno->nivel.'</td>';
							switch ($aluno->periodo){
								case 0:
									echo '<td>1 Periodo</td>';
									break;
								case 1:
									echo '<td>2 Periodo</td>';
									break;
								case 2:
									echo '<td>3 Periodo</td>';
									break;
								case 3:
									echo '<td>4 Periodo</td>';
									break;
								default:
									echo '<td>NULL</td>';
									break;
							}
							echo "<td><Button class='btn btn-warning' name='idAlunoEditar' value=".$aluno->idAluno." > 
									  <a href='EditAluno.php?cod=$aluno->idAluno & idRegional=$idRegional & periodo=$idPeriodo' style='text-decoration:none'>Editar</a> </Button>
							          <Button class='btn btn-danger' name='idAlunoRemover' value=".$aluno->idAluno." > 
							          <a href='ControlRemoverAluno.php?cod=$aluno->idAluno & idRegional=$idRegional & periodo=$idPeriodo' style='text-decoration:none' >Remover</a> </Button></td>";
							
							echo'</tr>';

						}
					}
				?>
				<?php  
					echo "<td><button class='btn btn-primary'><a href='formAluno.php?idRegional=$idRegional & periodo=$idPeriodo & idEscola=$idEsc' style='text-decoration:none'>Add Alunos</a></button></td>"
				?>
			</tr>
		</tbody>
	</table>

	<div id="chart_div" style="width: 1300px; height: 500px;"></div>

		
</body>
</html>