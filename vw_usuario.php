<?php 
    require 'conexao.php'; 

    $sql = "SELECT * FROM tab_usuarios ORDER BY name_user";
    $result = $con -> query($sql);

	
?>
<div class="container-seach-form" id="container-seach"> 
    <fieldset>

        <!-- Cabeçalho da Listagem -->
        <legend>
        <img class="title-user-list" src="imagens/Usuarios.png" alt="ATPro logo" class="logo logo-light" style="position:absolute;
    left: 9%;
    top: -207%;">
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
            
            <a class="btn btn-success pull-right" style="
            position: absolute;
            left: 76%;
            top: 114px;" onclick="btn_cadastro_user()">Cadastrar Usuário</a>
            <div class="clearfix"></div>
        </form>

        <!-- Link para página de cadastro -->

    </fieldset>
    <div class="container-dados" id="container-dados">
        <table class="table table-striped " style="position: absolute;margin-left: -14%;width: auto;"> 
            <tr> 
                <td>id</td>
                <td>Nome</td> 
                <td>Matrícula</td> 
                <td>Cpf</td>  
                <td>Cargo</td>  
                <td>Email</td> 
                <td>Lotacao</td>  
                <td>Telefone</td> 
                <td>Vincular</td> 
                <td>Editar</td> 
                <td>Deletar</td>
            </tr>   
            <tbody>
            <?php while($dado = $result -> fetch_array() ) {?> 
    
            <tr> 
                <td><?php echo $dado["id_user"]?></td>  
                <td><?php echo $dado["name_user"]?></td>  
                <td><?php echo $dado["matricula_user"]?></td>  
                <td><?php echo $dado["cpf_user"]?></td> 
                <td><?php echo $dado["email_user"]?></td> 
                <td><?php echo $dado["tell_user"]?></td> 
                <td><?php echo utf8_encode($dado["cargo_user"])?></td>  
                <td><?php echo $dado["lotacao_user"]?></td> 
                <td><button type="submit" class="btn btn-info btn-lg" id="btn-vinc"><i class="fas fa-plus"></i></button></td> 
                <td><button type="submit" onclick="javascript: location.href='editar_usuario.php';"  class="btn btn-warning btn-lg" id="btn-editar-usuario"><i class="far fa-edit"></i></button></td> 
                <td><button type="submit" onclick="javascript: location.href='deletar_usuario.php'; "   class="btn btn-danger" id="btnDeletarUsuario"><i class="fas fa-trash-alt"></i></button></td>
            </tr> 
            <?php } ?> 
            </tbody>
        </table>
    
    </div>
</div>  
