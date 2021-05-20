
<div class="container-vinculo" id="container-vinculo">
		<fieldset>

			<legend>
				<h2>Víncular Celular a Usuário</h2>
			<legend>

			<form id="form-contato" method="POST" action="action_vincular.php" enctype="multipart/form-data">

				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Infome o nome">
				</div> 

				<div class="form-group">
				<label for="matricula">Matrícula</label>
				<input type="number" class="form-control" id="matricula" name="matricula"
					placeholder="Digite sua matrícula:">
				</div>

				<div class="form-group">
					<label for="data">Data de Inicio</label>
					<input type="date" class="form-control" id="date" name="date" placeholder="Infome a data de recebimento do aparelho:">
				</div>  
				<div class="form-group">
					<label for="data">Data de Devolução</label>
					<input type="date" class="form-control" id="end-date" name="end-date" placeholder="Infome a data de devolução do aparelho do aparelho:">
				</div>

				<div class="form-group">
					<label for="imei">IMEI</label>
					<input type="imei" class="form-control" id="imei" name="imei" placeholder="Informe o IMEI">
				</div> 
				
				<div class="form-group">
				<label for="tel">Telefone</label>
				<input type="tel" class="form-control" id="tel" name="tel" placeholder="Digite o seu telefone: ">
				</div>

				<input type="hidden" name="acao" value="incluir">

				<button type="submit" class="btn btn-primary" onclick="record_vinculo()" id="botao" style="
				top: 493px;
			">
					Gravar
				</button>
				<a href="" class="btn btn-danger" id="cancel-form-vinculo">Cancelar</a>

			</form>
		</fieldset>
</div>
