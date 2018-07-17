<?php
require_once('database.php');

$convidados = $_POST;

foreach ($convidados as $convidado) {

	if(!empty($convidado)){
	$sql = "INSERT INTO lista (nome) VALUES ('{$convidado}')";
		if ($con->query($sql)){
			header("location: index.php?msg=sucesso#presenca");
		}else{
			header("location: index.php?msg=erro#presenca");
		}

	}

}


?>