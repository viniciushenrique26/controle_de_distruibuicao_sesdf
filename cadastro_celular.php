
<div class="container-form" id="container-cell">
	<fieldset>

		<legend>
			<h2>Cadastro de Celular</h2>
			<legend>

				<form id="form-contato" method="POST" action="action_celular.php" enctype="multipart/form-data">

					<div class="form-group">
						<label for="line">Linha</label>
						<input type="number" class="form-control" id="line" name="line" placeholder="Infome a Linha">
					</div>

					<div class="form-group">
						<label for="chip">Chip</label>
						<input type="number" class="form-control" id="chip" name="chip" placeholder="Infome o Chip">
					</div>

					<div class="form-group">
						<label for="imei">IMEI</label>
						<input type="number" class="form-control" id="imei" name="imei" placeholder="Informe o IMEI">
					</div>

					<div class="form-group">
						<label for="modelo">Modelo</label>
						<select class="form-control" name="modelo" id="modelo">
							<option value="iPhone 5S">iPhone 5S</option>
							<option value="iPhone 6S">iPhone 6S</option>
							<option value="iPhone 6S Plus">iPhone 6S Plus</option>
							<option value="LG K-10">LG K-10</option>
							<option value="LG K41S">LG K41S</option>
							<option value="Samsung Galaxy S20">Samsung Galaxy S20</option>
							<option value="ZTE KIS C341">ZTE KIS C341</option>
						</select>

					</div>

					<div class="form-group">
						<label for="stts">Status</label>
						<select class="form-control" name="stts" id="stts">
							<option value="Em Uso">Em Uso</option>
							<option value="Disponivel">Disponivel</option>
							<option value="Danificado">Danificado</option>
						</select>

					</div>

					<input type="hidden" name="acao" value="incluir">

					<button type="submit" class="btn btn-primary" name="acao" value="Celular salvo!" onclick="record_cell()"
						id="btn-record-cell" style="
						top: 572px;
									">
						Gravar
					</button>
					<a href="" type="reset" class="btn btn-danger" onclick="cancelar_cell()" id="cancel-form-cell">Cancelar</a>

				</form>
	</fieldset>
</div>