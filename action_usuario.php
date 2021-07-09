<?php 
	require 'conexao.php';


	if(isset($_POST['nome']))
	$nome = $_POST['nome'];
	if(isset($_POST['matricula']))
	$matricula = $_POST['matricula'];
	if(isset($_POST['cpf']))
	$cpf = $_POST['cpf'];
	if(isset($_POST['cargo']))
	$cargo =utf8_decode( $_POST['cargo']);
	if(isset($_POST['email']))
	$email = $_POST['email'];
	if(isset($_POST['lotacao']))
	$lotacao = $_POST['lotacao'];
	if(isset($_POST['tel']))
	$tel = $_POST['tel']; 
	

	$query=mysqli_query($con,"INSERT INTO tab_usuarios(name_user,matricula_user,cpf_user,email_user,tell_user,cargo_user,lotacao_user)VALUES('$nome', '$matricula','$cpf','$email','$tel','$cargo','$lotacao')");
	//print_r($_POST);
	//print_r($con);
	if($query){ 
		echo 'Cadastro realizado com sucesso';
	} else { 
		echo 'Não foi possivel cadastrar';
	}

	


	/*echo "NOME: $nome <br>"; 
	echo "MATRICULA: $matricula <br>"; 
	echo "CPF: $cpf <br>"; 
	echo "CARGO: $cargo <br>";
	echo "EMAIL: $email <br>"; 
    echo "LOTACAO: $lotacao <br>"; 
    echo "TELEFONE: $tel <br>";*/
?>
