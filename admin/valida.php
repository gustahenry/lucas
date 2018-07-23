<?php
session_start();
include_once("../database.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
	if($btnLogin){
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

	if((!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuÃ¡rio no BD
		//$senha = password_hash('10019266', PASSWORD_DEFAULT);
		//echo $senha;
		$result_usuario = "SELECT id, nome, email, senha FROM usuario WHERE email='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($con, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location: ../presenca.php");
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: index.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto!2";
		header("Location: index.php");
	}
}else{
	$_SESSION['msg'] = "PÃ¡gina nÃ£o encontrada";
	header("Location: index.php");
}