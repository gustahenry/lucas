<?php
require_once('database.php');

$mensagem = $_POST['mensagem'];

if(!empty($mensagem)){
$sql = "INSERT INTO mensagem (texto) VALUES ('{$mensagem}')";
	if ($con->query($sql)){
		header("location: index.php?msgs=sucesso#mensagem");
	}else{
		header("location: index.php?msgs=erro#mensagem");
	}

}

?>