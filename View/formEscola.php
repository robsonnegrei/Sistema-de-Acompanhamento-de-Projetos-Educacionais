<!DOCTYPE html>
<?php
	require_once (__DIR__).'/ControleFormEscola.php';

?>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="ListaAlunosEscola.php">
		Nome da Escola:
		<select name="idEscola">
			<?php 
				foreach($arrayEscolas as $esco){
					echo '<option value="'.$esco->idEscola.'">'.$esco->nome.'</option>';	
				}
			?>
		</select>
		<br></br>
		Mês:
		<select name="periodo">
      
		     <option value=""></option>
		     <option value="0">1 Periodo</option>  
		     <option value="1">2 Periodo</option>
		     <option value="2">3 Periodo</option>  
		     <option value="3">4 Periodo</option>

    	</select>
	
		<br></br>
		<input type="hidden" name="regional" value="<?php echo $_POST['regional']; ?>" >
		<input type="hidden" name="formEscola" value="1" >
		<input type="submit" value="Proximo"/>	
	</form>
</body>
</html>