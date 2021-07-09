<?php
    require 'conexao.php'; 
    
    $id_user = $_GET['id_user']; 
   
    $consulta = $con->prepare("SELECT * FROM tab_usuarios WHERE id_user= $id_user"); 
    //$consulta->bindValue(':id_user', $id_user); 
    $consulta->execute(); 
    
    while ($dado = $consulta->fetch(PDO::FETCH_ASSOC)){
        $id_user = $dado['id_user']; 
        $name_user = $dado['nome']; 
        $matricula_user = $dado['matricula']; 
        $cpf_user = $dado['cpf'];  
        $email_user = $dado['email'];  
        $tell_user = $dado['tel'];  
        $cargo_user = $dado['email'];  
        $lotacao_user = $dado['lotacao'];  
    } 
    echo $dado;
    echo "<h1>Alteração do Usuário</h1> 
    <form action=\"gravaaltclintes.php\" method=\"post\" name=\"f1\"> 
    <input type=\"hidden\" name=\"txtid\" value=\"$id_user\"> 
    <label> 
    Nome: 
    <input type=\"text\" name=\"txtnome\" value=\"$name_user\" size=\"50\" maxlength=\"100\"> 
    </label> 
    <p> 
    <label> 
    Matricula: 
    <input type=\"number\" name=\"txtmatricula\" value=\"$matricula_user\" size=\"50\" maxlength=\"100\"> 
    </label> 
    <p> 
    <label> 
    CPF: 
    <input type=\"number\" name=\"txtcpf\" value=\"$cpf_user\" size=\"50\" maxlength=\"100\"> 
    </label>  
    <p> 
    <label> 
    Email: 
    <input type=\"email\" name=\"txtemail\" value=\"$email_user\" size=\"50\" maxlength=\"100\"> 
    </label>  
    <p> 
    <label> 
    Telefone: 
    <input type=\"tel\" name=\"txttelefone\" value=\"$tell_user\" size=\"50\" maxlength=\"100\"> 
    </label>  
    <p> 
    <label> 
    Cargo: 
    <input type=\"text\" name=\"txtcargo\" value=\"$cargo_user\" size=\"50\" maxlength=\"100\"> 
    </label>  
    <p>  
    <label> 
    Lotação: 
    <input type=\"text\" name=\"txtlotacao\" value=\"$lotacao_user\" size=\"50\" maxlength=\"100\"> 
    </label> 
    <p> 
    <input type=\"submit\" value=\"Gravar\"><input type=\"reset\" value=\"Limpar\"> 
    </form>"; 
    
?> 