<?php 
    require 'conexao.php'; 

    $sql = "SELECT * FROM tab_celulares ORDER BY stts";
    $result = $con -> query($sql);

?> 
<script type="text/javascript">  
    $(function(){ 
        $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('id')  
  var recipient2 = button.data('linha') 
  var recipient3 = button.data('chip') 
  var recipient4 = button.data('imei') 
  var recipient5 = button.data('modelo') 
  var recipient6 = button.data('stts')     
  var modal = $(this)
  modal.find('.modal-title').text('Editar Usuário')
  modal.find('#recipient-id').val(recipient) 
  modal.find('#recipient-linha').val(recipient2)
  modal.find('#recipient-chip').val(recipient3)
  modal.find('#recipient-imei').val(recipient4)
  modal.find('#recipient-modelo').val(recipient5)
  modal.find('#recipient-stts').val(recipient6) 
 
});
    });
</script>
<div class="container-seach-form" id="container-seach">
    <fieldset>

        <!-- Cabeçalho da Listagem -->
        <legend>
            <img class="title-celulares" src="imagens/Celulares.png" alt="ATPro logo" class="logo logo-light" style="position:absolute;
    left: 9%;
    top: -26rem;">
        </legend>

        <!-- Formulário de Pesquisa -->
        <form action="" method="get" id="form-contato">
            <label class="label-seach" for="termo">Pesquisar</label>
            <div class="col-md-7">
                <input type="text" class="form-control" id="termo" name="termo"
                    placeholder="Infome o imei">
            </div> 
            <div class="btn-list"> 
                <button type="submit" id="seach-list" class="btn btn-primary" onclick="pesquisar_vinculo()">Pesquisar</button>
                <button type="submit" id="view-all"class="btn btn-secondary" onclick="view_all()">Ver Todos</button>
            </div>
            
        </form>
 
        <!-- Link para página de cadastro --> 
        
        <a class="btn btn-success pull-right" style="
            position: absolute; left: 76%; top: 114px;" 
        onclick="btn_cadastro_cell()">Cadastrar Celular</a> 
        
        <div class="clearfix"></div>



    </fieldset> 
    <div class="container-dados-cell" id="container-dados-cell" style="
        margin-left: -13%;
    width: 87rem;
    position: absolute;
    top: 76%;">
        <table class="table table-striped"> 
            <tr> 
                <td>ID</td> 
                <td>Linha</td> 
                <td>Chip</td> 
                <td>IMEI</td>  
                <td>Modelo</td>  
                <td>Status</td> 
                <td>Editar</td> 
                <td>Deletar</td>
            </tr>   
            <tbody>
            <?php while($dado = $result -> fetch_array() ) {?>
        
            
            <tr> 
                <td><?php echo $dado["id_cell"]?></td>   
                <td><?php echo $dado["linha_cell"]?></td>  
                <td><?php echo $dado["chip_cell"]?></td>  
                <td><?php echo $dado["imei_cell"]?></td> 
                <td><?php echo $dado["modelo"]?></td> 
                <td><?php echo $dado["stts"]?></td> 
                <td><button type=""   class="btn btn-warning btn-lg" id="btn-editar-usuario" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $dado['id_cell']?>" data-linha="<?php echo $dado['linha_cell']?>" data-chip="<?php echo $dado['chip_cell']?>" data-imei="<?php echo $dado['imei_cell']?>" data-modelo="<?php echo $dado['modelo']?>" data-stts="<?php echo $dado['stts']?>"><i class="far fa-edit"></i></button></td>  
                <td><a type="" class="btn btn-danger btn-lg" id="btnDeletarCelulares" href="deletar_celular.php?id_cell=<?php echo $dado["id_cell"]?>"  onclick="return confirm('Confirma exclusão do registro?')"  ><i class="fas fa-trash-alt"></i></a></td>
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
                <div class="modal-body">
                    <form>
                    <div class="form-group"> 
                        <label for="message-text" class="col-form-label">ID:</label>
                        <!--<input type="text" class="form-control" id="recipient-id" style="display:none">-->
                        <input type="text" class="form-control" id="recipient-id" readonly name="id">
                    </div> 
                    <div class="form-group"> 
                        <label for="message-text" class="col-form-label">Linha:</label>
                        <input type="text" class="form-control" id="recipient-linha" name="linha">
                    </div> 
                    <div class="form-group"> 
                        <label for="message-text" class="col-form-label">Chip:</label>
                        <input type="text" class="form-control" id="recipient-chip" name="chip">
                    </div> 
                    <div class="form-group"> 
                        <label for="message-text" class="col-form-label">Imei:</label>
                        <input type="text" class="form-control" id="recipient-imei" name="imei">
                    </div> 
                    <div class="form-group"> 
                        <label for="message-text" class="col-form-label">Modelo:</label>
                        <input type="text" class="form-control" id="recipient-modelo" name="modelo">
                    </div> 
                    <div class="form-group"> 
                        <label for="message-text" class="col-form-label">Status:</label>
                        <input type="text" class="form-control" id="recipient-stts" name="stts">
                    </div> 
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Atualizar</button>
                </div>
                </div>
            </div>
            </div>
            </div>
            </tbody>  
        </table>
    
    </div>

</div> 