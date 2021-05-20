<div class="container-form-user" style="margin-left: 10%;" id="container-user">
	<fieldset>

		<legend>
			<h2 style="margin-top: -1%; margin-left: -9%;">Cadastro de Usuário</h2>
		</legend>

		<form method="POST" action="action_usuario.php" id="form-contato" style="margin-top: -3%;" enctype="multipart/form-data">

			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome:">
			</div>

			<div class="form-group">
				<label for="matricula">Matrícula</label>
				<input type="number" class="form-control" id="matricula" name="matricula"
					placeholder="Digite sua matrícula:">
			</div>

			<div class="form-group">
				<label for="cpf">CPF</label>
				<input type="number" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF: ">
			</div>
			<div class="form-group">
				<label for="cargo">Cargo</label>
				<input type="text" class="form-control" id="cargo" name="cargo" placeholder="Informe o seu cargo: ">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Digite o seu email: ">
			</div>
			<div class="form-group">
				<label for="lotacao">Lotação</label>
				<input type="text" class="form-control" id="lotacao" name="lotacao"
					placeholder="Informe a sua lotacao: ">
			</div>
			<div class="form-group">
				<label for="tel">Telefone</label>
				<input type="tel" class="form-control" id="tel" name="tel" placeholder="Digite o seu telefone: ">
			</div>


			<input type="hidden" name="acao" value="incluir">

			<div class="mt-20">

				<button type="submit" onclick="record_user()" class="btn btn-primary" id="btn-record-user">
					Gravar
				</button>
				<a href="" class="btn btn-danger" id="cancel-form-user" onclick="cancelar_user()">Cancelar</a>
			</div>

		</form>
	</fieldset>
</div>