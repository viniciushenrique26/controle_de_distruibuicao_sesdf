<?php 

    if(isset($_POST['nome'])){
		$nome = $_POST['nome'];
	} 
	if(isset($_POST['nome'])){
		$nome = $_POST['nome'];
	} 
	if(isset($_POST['matricula'])){
		$matricula = $_POST['matricula'];
	}
	if(isset($_POST['date'])){
		$date = $_POST['date'];
	}
	if(isset($_POST['end-date'])){
		$end_date = $_POST['end-date'];
	}
	if(isset($_POST['imei'])){
		$imei = $_POST['imei'];
	} 
	if(isset($_POST['tel'])){
		$tel = $_POST['tel'];
	}
	
	

	
	echo "NOME: $nome <br>"; 
	echo "MATRICULA: $matricula <br>"; 
	echo "DATA DE RECEBIMENTO: $date <br>"; 
	echo "DATA DE DEVOLUÇÃO: $end_date <br>";
	echo "IMEI: $imei <br>"; 
    echo "TELEFONE: $tel <br>";
?>
