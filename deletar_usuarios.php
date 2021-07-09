<?php
    require 'conexao.php'; 
    //print_r ($con);
    $id_user = $_GET['id_user']; 
    //echo $id_user;
    $delete = $con->prepare("DELETE FROM tab_usuarios WHERE id_user= $id_user"); 
    //$delete->bindValue(":id_user", $id_user); 
    if($delete -> execute()) { 
        //echo "<h1>Cliente excluido!Aguarde...</h1>"; 
        header("Refresh: 0; URL=adm.php"); 

    }else { 
        echo"<h1>Erro ao excluir.</h1>";
    }
?>