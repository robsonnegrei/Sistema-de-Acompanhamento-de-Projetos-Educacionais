<!DOCTYPE html>
<?php 
	include_once ('/var/www/html/SistemaSME/Model/RegionalDAO.php');
	$dao = new RegionalDAO();

	$arrayRegionais = $dao->getRegionais();
?>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<form method="post" action="formEscola.php">
		Nome da Regional:
		<select name="regional">
			<?php foreach($arrayRegionais as $regional){
				echo '<option value="'.$regional->id.'">'.$regional->nome.'</option>';	
			}
			?>
		</select>
		<br></br>
		
		<input type="submit" value="Proximo"/>
	</form>		
</div>




</body>
</html>