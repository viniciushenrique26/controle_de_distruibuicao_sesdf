<?php 

# Substitua abaixo os dados, de acordo com o banco criado
$user = "root"; 
$password = ""; 
$database = "sesdf"; 

# O hostname deve ser sempre localhost 
$hostname = "localhost"; 

# Conecta com o servidor de banco de dados 
mysql_connects( $hostname, $user, $password ) or die( ' Erro na conexão ' ); 

?>