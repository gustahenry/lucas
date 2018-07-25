<?php require_once('header.php');?>
<div class="mensagens" id="mensagens">
  	<div class="caixa">
		<div class="row">
			<?php
		  	$sql = "select * from mensagem";
			$res = mysqli_query($con,$sql);
		  	while($f = mysqli_fetch_array($res)){
		  	echo "<div class='col-4'><div class='box-msg'><p class='text-left'>" . $f['texto'] . "</p><p class='text-right align-text-bottom'>" . $f['nome'] . "</p></div></div>";
			}?>
		</div>
	</div>
  </div>
  <?php require_once('footer.php'); ?>