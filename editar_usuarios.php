<?php
require "conexao.php";

$id_user = filter_input(INPUT_POST, 'id_user', FILTER_SANITIZE_STRING);
$name_user = filter_input(INPUT_POST, 'name_user', FILTER_SANITIZE_STRING);
$matricula_user = filter_input(INPUT_POST, 'matricula_user', FILTER_SANITIZE_STRING);
$cpf_user = filter_input(INPUT_POST, 'cpf_user', FILTER_SANITIZE_STRING);
$email_user = filter_input(INPUT_POST, 'email_user', FILTER_SANITIZE_EMAIL);
$tell_user = filter_input(INPUT_POST, 'tell_user', FILTER_SANITIZE_STRING);
$cargo_user = filter_input(INPUT_POST, 'cargo_user', FILTER_SANITIZE_STRING);
$lotacao_user = filter_input(INPUT_POST, 'lotacao_user', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE tab_usuarios SET name_user=$name_user ,matricula_user=$matricula_user,cpf_user=$cpf_user, email_user=$email_user, tell_user=$tell_user, cargo_user=$cargo_user, lotacao_user=$lotacao_user modified=NOW() WHERE id_user=$id_user";
$resultado_usuario = mysqli_query($con, $result_usuario);

if($result_usuario):
	echo "os dados foram cadastrados";
  else:
	echo "Não foi possível cadastrar.";
  endif;
/*if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: adm.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: editar_usuarios.php?id_user=$id_user");
}*/
?>