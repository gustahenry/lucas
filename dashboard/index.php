<?php
session_start();
?>
<?php require_once('header.php');
require_once('../database.php');
$sql = "select * from setting";
$res = mysqli_query($con,$sql);
	while($f = mysqli_fetch_array($res)){
	$dia = $f['dia'];
	$mes = $f['mes'];
	$ano = $f['ano'];

}
 ?>
<div class="row">
	<div class="col-md-3 menu">
		<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
		  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Presença</a>
		  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mensagens</a>
		  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
		</div>
	</div>
	<div class="col-md-9">
		<div class="tab-content" id="v-pills-tabContent">
			  <div class="tab-pane fade show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
			  	
			  </div>
			  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
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
			  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
			  	<div class="caixa">
					<table class="table text-center">
					  <thead>
					    <tr>
					      <th scope="col">Mensagem</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  	$sql = "select * from mensagem";
						$res = mysqli_query($con,$sql);
					  	while($f = mysqli_fetch_array($res)){
					  	echo "<tr><td>" . $f['texto'] . "</td></tr>";
						}?>
					  </tbody>
					</table>
				</div>
			  </div>
			  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
			  	<div class=setting>
			  		<?php require_once('setting.php'); ?>
			  	</div>
			  </div>
		</div>
	</div>
</div>

<?php require_once('footer.php'); ?>