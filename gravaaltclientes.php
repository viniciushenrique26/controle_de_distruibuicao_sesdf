<?php 
require 'conexao.php'; 

$id_user = $_GET['id_user'];
$name_user = $_GET['name_user'];
$matricula_user = $_GET['matricula_user'];
$cpf_user = $_GET['cpf_user'];
$email_user = $_GET['email_user'];
$tell_user = $_GET['tell_user']; 
$cargo_user = $_GET['cargo_user']; 
$lotacao_user = $_GET['lotacao_user'];  

/*$sql = "UPDATE tab_usuarios SET name_user=$name_user, matricula_user=$matricula_user, cpf_user=$cpf_user, email_user=$email_user, tell_user=$tell_user, cargo_user=$cargo_user, lotacao_user=$lotacao_user WHERE id_user=$id_user" ;*/
$update = $con->prepare("UPDATE tab_usuarios SET name_user=$name_user, matricula_user=$matricula_user, cpf_user=$cpf_user, email_user=$email_user, tell_user=$tell_user, cargo_user=$cargo_user, lotacao_user=$lotacao_user"); 
/*$update->bindValue(':id_user',$id_user); 
$update->bindValue(':name_user', $name_user); 
$update->bindValue(':matricula_user', $matricula_user); 
$update->bindValue(':cpf_user', $cpf_user); 
$update->bindValue(':email_user', $email_user); 
$update->bindValue(':tell_user', $tell_user); 
$update->bindValue(':cargo_user',$cargo_user); 
$update->bindValue(':lotacao_user', $lotacao_user); */


if ($update->execute()) { 
    //echo "<h1>Cliente Alterado!</h1>";
    header("Refresh: 1; URL=adm.php"); 
} else { 
    echo "<h1>Erro ao alterar o cliente.</h1>";
}
?>
