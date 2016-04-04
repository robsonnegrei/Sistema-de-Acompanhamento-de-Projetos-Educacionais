<?php  
	include_once 'EscolaDAO.php';
	$dao = new EscolaDAO();
	if(!is_bool($dao)) {
		$arrayEscolas = $dao->getEscolas($_POST['regional']);
	}
?>