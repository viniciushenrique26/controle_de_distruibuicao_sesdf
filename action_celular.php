<?php 
	require 'conexao.php'; 
	
	if(isset($_POST['line'])){
		$line = $_POST['line'];
	} 
	if(isset($_POST['chip'])){
		$chip = $_POST['chip'];
	}
	if(isset($_POST['imei'])){
		$imei = $_POST['imei'];
	}
	if(isset($_POST['modelo'])){
		$modelo = $_POST['modelo'];
	}
	if(isset($_POST['stts'])){
		$stts = $_POST['stts'];
	}
	
	
	$query=mysqli_query($con,"INSERT INTO tab_celulares(linha_cell,chip_cell,imei_cell,modelo,stts)VALUES('$line', '$chip','$imei','$modelo','$stts')");
	//print_r($_POST);
	//print_r($con);

	if($query){ 
		echo 'Cadastro realizado com sucesso';
	} else { 
		echo 'Não foi possivel cadastrar';
	}
?>
