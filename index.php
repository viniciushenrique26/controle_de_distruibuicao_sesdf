<!DOCTYPE html>
<html>
<head>
	<title>SESDF</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
</head>
<body> 
	<img src="imagens/body.gif" alt="ATPro logo" class="logo logo-light" style="
    width: 1905px;
    top: 0%;
    left: 0%;
    position: fixed;
    height: 101%;
" > 
	<img src="imagens/logotp.png" alt="ATPro logo" class="logo logo-light" style="
    position: fixed;
    top: 47%;
    left: -11%;
"> 

    <form action="login.php" method="post">
		<img src="imagens/adm.gif" alt="ATPro logo" class="logoooadm">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?> 
		<div class="loginn"> 
			<label>Usuário</label>  
			<i class="fas fa-user"></i>
			<input type="text" name="uname" placeholder="User Name" class="input"><br>
			

			<label>Senha</label>
			<input type="password" name="password" placeholder="Password" class="input"><br>
			<button type="submit">Login</button>
	    </div>
    </form>
</body>
</html>