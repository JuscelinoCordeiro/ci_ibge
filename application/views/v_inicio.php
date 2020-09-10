<div class="row" id="total">
	<!--	<h1>Tela Inicial</h1>-->
	<div class="col-md-3"></div>

	<div class="col-md-6" id="corpo">
		<p>Teste de consulta ao banco</p>
		<pre class="text-center"><?="Minha região é $minhaRegiao"?>
		</pre>

		<!--	FORMULARIO PARA BUSCA DE MUNICIPIOS POR REGIAO	-->
		<form class="form-inline">
			<fieldset>
				<legend>Buscar os estados de uma regiao</legend>
				<label>Selecione uma regiao:</label>
				<select id="selectRegiao" class="form-control" name="listaRegiao" form="carform">
					<option value="">Selecione uma região</option>
					<option value="1">Norte</option>
					<option value="2">Nordeste</option>
					<option value="3">Sudeste</option>
					<option value="4">Sul</option>
					<option value="5">Centro Oeste</option>
				</select>
				<button class="btn btn-success" id="btnBuscarEst">Buscar</button>
			</fieldset>
		</form>
		<br>
		<br>
		<br>

		<!--	FORMULARIO PARA BUSCA DE MUNICIPIOS POR ESTADO	-->
		<form class="form-inline" action="" method="">
			<fieldset>
				<legend>Buscar os Municipios de uma regiao</legend>
				<label class="">Selecione um estado:</label>
				<select id="selectEstado" class="form-control" name="listaEstado" form="carform">
					<option value="">Selecione um ESTADO</option>
					<?php
						foreach ($estados->result() as $estado){
							echo "<option value=\"$estado->ID_UF_IBGE\">$estado->NM_UF</option>";
						}
					?>
				</select>
				<button class="btn btn-default" id="btnBuscarMuniEst">Buscar</button>
			</fieldset>
		</form>

		<div id="bairros">
			<h3>Cadastro de bairros</h3>
			<hr>
			<button id="btnCadBairro" class="btn btn-info btn-small" value="cadBairro">Cadastrar Bairro</button>
		</div>
		<?php

			//			if (isset($muniEstado)) {
			//				echo '<pre>';
			//				print_r($muniEstado);
			//				echo '</pre>';
			//			}

		?>

		<br><br>
		<!--		<button type="button" class="btn btn-danger btn-small" id="btnMyModal">-->
		<!--			Chamar Modal-->
		<!--		</button>-->

		<br><br>
		<p class="footer">Page rendered in <strong>{elapsed_time}</strong>
			seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
		</p>

	</div>
	<!--	div corpo-->

</div><!--div total-->


