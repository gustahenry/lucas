<?php require_once('header.php');
require_once('database.php');
?>
<body class="lista-presenca">
<div class="container">
	<div class="caixa">
		<h2 class="text-center my-5">Lista de Convidados</h2>
		<table class="table text-center">
		  <thead>
		    <tr>
		      <th scope="col">Convidados</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  	$sql = "select * from lista";
			$res = mysqli_query($con,$sql);
		  	while($f = mysqli_fetch_array($res)){
		  	echo "<tr><td>" . $f['nome'] . "</td></tr>";
			}?>
		  </tbody>
		</table>
	</div>
	
</div>

<?php require_once('footer.php');?>