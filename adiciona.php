<?php

$host = 'mysql.hostinger.com.br';
$user = 'u805018327_prese';
$pass = '10019266';
$db   = 'u805018327_prese';

$con = mysqli_connect($host, $user, $pass, $db);

$convidados = $_POST;

foreach ($convidados as $convidado) {

	if(!empty($convidado)){
	$sql = "INSERT INTO lista (nome) VALUES ('{$convidado}')";
		if ($con->query($sql)){
			header("location: index.php");
		}else{
			header("location: index.php?msg=erro");
		}

	}

}


?>