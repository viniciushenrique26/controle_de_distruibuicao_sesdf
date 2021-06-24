<div class="container-seach-form" id="container-seach">
    <fieldset>

        <!-- Cabeçalho da Listagem -->
        <legend>
            <img class="title-historico" src="imagens/historicotitle.png" alt="ATPro logo" class="logo logo-light" style="
    position: absolute;
    top: -211%;
    left: 9%;
">
        </legend>

        <!-- Formulário de Pesquisa -->
        <form action="" method="get" id="form-contato">
            <label class="label-seach" for="termo">Pesquisar</label>
            <div class="col-md-7">
                <input type="text" class="form-control" id="termo" name="termo"
                    placeholder="Infome o Nome ou E-mail">
            </div> 
            <div class="btn-list"> 
                <button type="submit" id="seach-list" class="btn btn-primary" onclick="pesquisar_vinculo()">Pesquisar</button>
                <button type="submit" id="view-all"class="btn btn-secondary" onclick="view_all()">Ver Todos</button>
            </div>
            
        </form>

        <!-- Link para página de cadastro -->
        <a class="btn btn-success pull-right" style="
        position: absolute;
        left: 75%;
        top: 56%;" onclick="btn_vinculo()">Vincular Celular a Usuário</a>
        <div class="clearfix"></div>



    </fieldset>

</div> 