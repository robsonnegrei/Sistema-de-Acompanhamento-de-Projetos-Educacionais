<?php  
	include_once '../Model/EscolaDAO.php';
	$dao = new EscolaDAO();
	if(!is_bool($dao)) {
		$arrayEscolas = $dao->getEscolas($_POST['regional']);
		if($arrayEscolas == -1)
			return;
	}
?>