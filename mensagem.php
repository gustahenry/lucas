<?php
require_once('database.php');

$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];

if(!empty($mensagem)){
$sql = "INSERT INTO mensagem (nome,texto) VALUES ('{$nome}','{$mensagem}')";
	if ($con->query($sql)){
		header("location: index.php?msgs=sucesso#mensagem");
	}else{
		header("location: index.php?msgs=erro#mensagem");
	}

}

?>