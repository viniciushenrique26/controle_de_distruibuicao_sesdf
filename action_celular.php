<?php
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
	
	/*$line = filter_input(INPUT_POST,'line', FILTER_SANITIZE_NUMBER_INT); 
	$chip = filter_input(INPUT_POST,'chip', FILTER_SANITIZE_NUMBER_INT); 
	$imei = filter_input(INPUT_POST,'imei', FILTER_SANITIZE_NUMBER_INT); 
	$modelo = filter_input(INPUT_POST,'modelo', FILTER_SANITIZE_STRING);
	$stts = filter_input(INPUT_POST,'stts', FILTER_SANITIZE_STRING); */
	
	echo "LINHA: $line <br>"; 
	echo "CHIP: $chip <br>"; 
	echo "IMEI: $imei <br>"; 
	echo "MODELO: $modelo <br>";
	echo "STATUS: $stts <br>";
?>
