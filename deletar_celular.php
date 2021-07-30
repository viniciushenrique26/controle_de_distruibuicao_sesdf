<?php
    require 'conexao.php'; 
    //print_r ($con);
    $id_cell = $_GET['id_cell']; 
    //echo $id_user;
    $delete = $con->prepare("DELETE FROM tab_celulares WHERE id_cell= $id_cell"); 
    //$delete->bindValue(":id_user", $id_user); 
    if($delete -> execute()) { 
        //echo "<h1>Cliente excluido!Aguarde...</h1>"; 
        header("Refresh: 0; URL=adm.php"); 

    }else { 
        echo"<h1>Erro ao excluir.</h1>";
    }
?>