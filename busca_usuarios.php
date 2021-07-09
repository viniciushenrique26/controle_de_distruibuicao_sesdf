
<?php 
require 'conexao.php';
if (!isset($_GET['barra_pesquisa'])) {
	header("Location: vw_usuario.php");
	exit;
}
 
$nome = "%".trim($_GET['barra_pesquisa'])."%";
 
 
$sth = $con->prepare('SELECT * FROM tab_usuarios WHERE cpf_user LIKE :cpf_user');
$sth->bindParam('cpf_user', $cpf_user, PDO::PARAM_STR);
$sth->execute();
 
$resultados = $sth->fetchAll(PDO::FETCH_ASSOC); 
print_r($resultados); 
print("\n");
?>
 
