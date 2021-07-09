<?php 

$id_user = $_POST['txtid'];
$name_user = $_POST['txtnome'];
$matricula_user = $_POST['txtmatricula'];
$cpf_user = $_POST['txtcpf'];
$email_user = $_POST['txtemail'];
$tell_user = $_POST['txttelefone']; 
$cargo_user = $_POST['txtcargo']; 
$lotacao_user = $_POST['txtlotacao'];  

$sql = "UPDATE tab_usuarios SET name_user=$name_user, matricula_user=$matricula_user, cpf_user=$cpf_user, email_user=$email_user, tell_user=$tell_user, cargo_user=$cargo_user, lotacao_user=$lotacao_user WHERE id_user=$id_user" ;
$update = $con-> prepare($sql); 
$update->bindValue(':id_user',$id_user); 
$update->bindValue(':name_user', $name_user); 
$update->bindValue(':matricula_user', $matricula_user); 
$update->bindValue(':cpf_user', $cpf_user); 
$update->bindValue(':email_user', $email_user); 
$update->bindValue(':tell_user', $tell_user); 
$update->bindValue(':cargo_user',$cargo_user); 
$update->bindValue(':lotacao_user', $lotacao_user); 


if ($update->execute()) { 
    //echo "<h1>Cliente Alterado!</h1>";
    header("Refresh: 1; URL=adm.php"); 
} else { 
    echo "<h1>Erro ao alterar o cliente.</h1>";
}
?>
