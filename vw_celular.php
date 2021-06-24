<?php 
    require 'conexao.php'; 

    $sql = "SELECT * FROM tab_celulares ORDER BY stts";
    $result = $con -> query($sql);

?>
<div class="container-seach-form" id="container-seach">
    <fieldset>

        <!-- Cabeçalho da Listagem -->
        <legend>
            <img class="title-celulares" src="imagens/Celulares.png" alt="ATPro logo" class="logo logo-light" style="position:absolute;
    left: 9%;
    top: -65%;">
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
    margin-left: -25%;">
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
                <td> <button type="submit" class="btn btn-warning btn-lg" ><i class="far fa-edit"></i></button> </td> 
                <td><button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
            </tr> 
            <?php } ?>
            </tbody>  
        </table>
    
    </div>

</div> 