<?php
require_once('../database.php');

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

	if(!empty($dia) && !empty($dia) && !empty($dia)){
	$sql = "INSERT INTO setting (dia, mes, ano) VALUES ('{$dia}','{$mes}','{$ano}')";
		if ($con->query($sql)){
			header("location: /index.php");
		}else{
			header("location: /index.php?msg=erro");
		}

	}



?>