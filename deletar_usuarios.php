<?php
    require "conexao.php"; 
    $consulta = $sql -> prepare("SELECT * FROM login_user order by id_login"); 
    $consulta -> execute();
    while($row = $consulta -> fetch(PDO::FETCH_ASSOC)) { 
        echo"<tr>"; 
        echo"<td>$row[id_login]</td>"; 
        echo"<td>$row[user_login]</td>"; 
        echo"<td>$row[password_login]</td>"; 
        echo"<td>$row[name_login]</td>";
        echo"<tr>";
    } 

    $id_login = $_GET['id_login']; 

    $delete = $sql -> prepare("delete from login_user WHERE id_login= :id_login "); 
    $delete-> bindValue(":id_login", $id_login); 
    if($delete -> execute()) { 
        echo "<h1>Cliente excluido!Aguarde...</h1>"; 
        header("Refresh: 2; URL=vw_usuario.php"); 

    }else { 
        echo"<h1>Erro ao excluir.</h1>";
    }
?>