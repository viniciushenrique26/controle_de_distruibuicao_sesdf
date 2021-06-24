<?php 
	require 'conexao.php';


    if(isset($_POST['nome']))
	$nome = $_POST['nome'];
	if(isset($_POST['matricula']))
	$matricula = $_POST['matricula'];
	if(isset($_POST['data_inicio']))
	$data_inicio = $_POST['data_inicio'];
	if(isset($_POST['data_fim']))
	$data_fim = $_POST['data_fim'];
	if(isset($_POST['imei']))
	$imei = $_POST['imei'];
	if(isset($_POST['tel']))
	$tel = $_POST['tel'];
	
	
	$query=mysqli_query($con,"SELECT  tab_user(matricula_user),tab_celulares(imei_cell) VALUES('$nome', '$matricula','$data_inicio','$data_fim','$imei','$tel')");
	
	
	
	if($query){ 
		echo 'Cadastro realizado com sucesso';
	} else { 
		echo 'Não foi possivel cadastrar';
	}

?>
