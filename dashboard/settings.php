<?php require_once('header.php'); ?>
<div class="settings" id="settings">
  	<div class=setting>
  		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Data Evento</h3>
				  	<form action="valida-setting.php" method="post">
				  		<div class="row">
				  			<div class="col">
				  				<div class="form-group">
					              <label for="Dia">Dia</label>
						          <input type="text" class="form-control form-custom" id="convidado" name="dia" placeholder="dia" value='<?php echo $dia ?>'>
						        </div>
				  			</div>
				  			<div class="col">
				  				<div class="form-group">
						          <label for="Mês">Mês</label>
						          <input type="text" class="form-control form-custom" id="convidado2" name="mes" placeholder="mês" value='<?php echo $mes ?>'>
						        </div>
				  			</div>
				  			<div class="col">
				  				<div class="form-group">
						          <label for="Ano">Ano</label>
						          <input type="text" class="form-control form-custom" id="convidado3" name="ano" placeholder="ano" value='<?php echo $ano ?>'>
						        </div>
				  			</div>	  			
				  		</div>
				  		<button type="submit" class="btn btn-primary form-control btn-transparent">ENVIAR</button>
				  	</form>	             
				</div>
			</div>
		</div>
  	</div>
  </div>
   <?php require_once('footer.php'); ?>