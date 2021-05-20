<?php 
require 'conexao.php';
if(isset($_POST['cadastrar'])) { 

	
	$nome = $_POST['nome'];
	
	$matricula = $_POST['matricula'];
	
	$cpf = $_POST['cpf'];
	
	$cargo = $_POST['cargo'];
	
	$email = $_POST['email'];
	
	$lotacao = $_POST['lotacao'];
	
	$tel = $_POST['tel']; 
	

	$query=mysqli_query($con,"INSERT INTO tab_usuarios(name_user,matricula_user,cpf_user,email_user,tell_user,cargo_user,lotacao_user)VALUES('$nome', '$matricula','$cpf','$email','$tel','$cargo','$lotacao')");
	
	
	
	if($query){ 
		echo 'Cadastro realizado com sucesso';
	} else { 
		echo 'Não foi possivel cadastrar';
	}
}

	
	/*echo "NOME: $nome <br>"; 
	echo "MATRICULA: $matricula <br>"; 
	echo "CPF: $cpf <br>"; 
	echo "CARGO: $cargo <br>";
	echo "EMAIL: $email <br>"; 
    echo "LOTACAO: $lotacao <br>"; 
    echo "TELEFONE: $tel <br>";*/
?>
