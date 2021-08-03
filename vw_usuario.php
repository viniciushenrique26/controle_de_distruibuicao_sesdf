<?php 
    require 'conexao.php'; 

    $sql = "SELECT * FROM tab_usuarios ORDER BY name_user";
    $result = $con -> query($sql);  
    /*$vinculo = "SELECT a.* FROM tab_celulares a WHERE a.stts = 'Disponivel'";*/ 
    $cell = "SELECT * FROM tab_celulares ORDER BY modelo"; 
    $result_cell = $con -> query($cell);
?>  

<script type="text/javascript">  
    $(function(){ 
        $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('id')  
  var recipient2 = button.data('name') 
  var recipient3 = button.data('matricula') 
  var recipient4 = button.data('cpf') 
  var recipient5 = button.data('email') 
  var recipient6 = button.data('tell') 
  var recipient7 = button.data('cargo') 
  var recipient8 = button.data('lotacao')      
  var modal = $(this)
  modal.find('.modal-title').text('Editar Usuário')
  modal.find('#recipient-id').val(recipient) 
  modal.find('#recipient-name').val(recipient2)
  modal.find('#recipient-matricula').val(recipient3)
  modal.find('#recipient-cpf').val(recipient4)
  modal.find('#recipient-email').val(recipient5)
  modal.find('#recipient-tell').val(recipient6) 
  modal.find('#recipient-cargo').val(recipient7) 
  modal.find('#recipient-lotacao').val(recipient8)


});
    });
</script> 

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
                <input type="text"  name="pesquisa_user" class="form-control" id="pesquisa_user" name="termo"
                    placeholder="Digite o nome...">
            </div> 
            <div class="btn-list"> 
                <button action="busca_usuarios.php" method="GET" type="submit" id="seach-list" class="btn btn-primary" >Pesquisar</button>
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
        <table class="table table-striped " style="    position: absolute;
    margin-left: -14%;
    width: 88rem;
    top: 74%;"> 
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
                <td><button type="" class="btn btn-info btn-lg" id="btn-vinculo" ><i class="fas fa-plus"></i></button></td> 
                <td><button type=""   class="btn btn-warning btn-lg" id="btn-editar-usuario" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $dado['id_user']?>" data-name="<?php echo $dado['name_user']?>" data-matricula="<?php echo $dado['matricula_user']?>" data-cpf="<?php echo $dado['cpf_user']?>" data-email="<?php echo $dado['email_user']?>" data-tell="<?php echo $dado['tell_user']?>" data-cargo="<?php echo $dado['cargo_user']?>" data-lotacao="<?php echo $dado['lotacao_user']?>"><i class="far fa-edit"></i></button></td> 
                <td><a type="" class="btn btn-danger btn-lg" id="btnDeletarUsuario" href="deletar_usuarios.php?id_user=<?php echo $dado["id_user"]?>"  onclick="return confirm('Confirma exclusão do registro?')"  ><i class="fas fa-trash-alt"></i></a></td>
            </tr>  
            <?php } ?> 
            
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nova mensagem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" action="editar_usuarios.php">
                    <form method="POST">
                        <div class="form-group"> 
                            <label for="message-text" class="col-form-label">ID:</label>
                            <!--<input type="text" class="form-control" id="recipient-id" style="display:none">-->
                            <input type="text" class="form-control" id="recipient-id" readonly name="id">
                        </div> 
                        <div class="form-group"> 
                            <label for="message-text" class="col-form-label">Nome:</label>
                            <input type="text" class="form-control" id="recipient-name" name="name">
                        </div> 
                        <div class="form-group"> 
                            <label for="message-text" class="col-form-label">Matricula:</label>
                            <input type="text" class="form-control" id="recipient-matricula" name="matricula">
                        </div> 
                        <div class="form-group"> 
                            <label for="message-text" class="col-form-label">CPF:</label>
                            <input type="text" class="form-control" id="recipient-cpf" name="cpf">
                        </div> 
                        <div class="form-group"> 
                            <label for="message-text" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-email" name="email">
                        </div> 
                        <div class="form-group"> 
                            <label for="message-text" class="col-form-label">Telefone:</label>
                            <input type="text" class="form-control" id="recipient-tell" name="telefone">
                        </div> 
                        <div class="form-group"> 
                            <label for="message-text" class="col-form-label">Cargo:</label>
                            <input type="text" class="form-control" id="recipient-cargo" name="cargo">
                        </div> 
                        <div class="form-group"> 
                            <label for="message-text" class="col-form-label">Lotação:</label>
                            <input type="text" class="form-control" id="recipient-lotacao" name="lotacao">
                        </div>
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <a type="submit" name="atualizar-user" href="gravaaltclientes.php?id_user=<?php echo $dado["id_user"]?>" class="btn btn-primary">Atualizar</a>
                </div>
                </div>
            </div>
            </div>
            </div> 
            
            </tbody>
        </table>
        
</div>   
