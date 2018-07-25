<?php require_once('header.php'); ?>
<div class="convidados" id="convidados">
  	<div class="caixa">
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
  <?php require_once('footer.php'); ?>