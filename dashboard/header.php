<?php
session_start();
require_once('../database.php');
$sql = "select * from setting";
$res = mysqli_query($con,$sql);
    while($f = mysqli_fetch_array($res)){
    $dia = $f['dia'];
    $mes = $f['mes'];
    $ano = $f['ano'];

}
 ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 

    <title>Lucas e Amanda</title>
  </head>
  <body>
  <div class="row">
    <div class="col-md-3 menu">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="convidados.php">Convidados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mensagens.php">Mensagens</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="settings.php">Settings</a>
          </li>
        </ul>
    </div>
    <div class="col-md-9">