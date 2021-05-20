<?php 

# Substitua abaixo os dados, de acordo com o banco criado
$hostname = "localhost"; 
$database = "sesdf"; 
$user = "root"; 
$password = "";  



# Conecta com o servidor de banco de dados 
$con = mysqli_connect($hostname,$user,$password,$database) or die("Erro na conexão"); 


