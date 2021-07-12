<?php 
session_start();

if (isset($_SESSION['id_login']) && isset($_SESSION['user_login'])) {

?>

<html>
	
	<head>
	<meta charset="UTF-8">
	<title>Controle de Distribuição de Novos Celulares</title>

	<meta name="viewport"
		content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="imagens/unnamed.png">

	<link href="https://fonts.googleapis.com/css2?family=Roboto&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">  
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">  
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.js">   
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo $VERSION?>"> 
	
	<link rel="stylesheet" type="text/css" href="css/style.css?v=1.2"> 
	

	
	<style type="text/css"> 
		@keyframes chartjs-render-animation {
			from {
				opacity: .99
			}

			to {
				opacity: 1
			}
		}

		.chartjs-render-monitor {
			animation: chartjs-render-animation 1ms
		}

		.chartjs-size-monitor,
		.chartjs-size-monitor-expand,
		.chartjs-size-monitor-shrink {
			position: absolute;
			direction: ltr;
			left: 0;
			top: 0;
			right: 0;
			bottom: 0;
			overflow: hidden;
			pointer-events: none;
			visibility: hidden;
			z-index: -1
		}

		.chartjs-size-monitor-expand>div {
			position: absolute;
			width: 1000000px;
			height: 1000000px;
			left: 0;
			top: 0
		}

		.chartjs-size-monitor-shrink>div {
			position: absolute;
			width: 200%;
			height: 200%;
			left: 0;
			top: 0
		}
	</style>
</head>

<body class="overlay-scrollbar light sidebar-expand">

	<nav class="navbar navbar-dark" style="background-color: black;">

		<img src="imagens/logotp.png" alt="ATPro logo" class="logo logo-light">
		<ul class="navbar-nav"> 
			<img class="title-navbar" src="imagens/titlenav.png" alt="ATPro logo" class="logo logo-light">
			<li class="nav-item">
				<a class="nav-link">
					<i class="fas fa-bars" onclick="collapseSidebar()" style="
    color: transparent;
"></i>
				</a>


			</li>
		</ul>



	</nav>
	

	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="#" onclick="seach()" id="seach-tel" class="sidebar-nav-link">
					<div onclick="seach-user">
						<i class="fas fa-search" style="
    color: white; 
"></i>
					</div>
					<span style="font-size:20px;font-family:monospace">
						Pesquisa
					</span>

				</a>
			</li>

			<li class="sidebar-nav-item">
				<a href="#" onclick="seach_user()" id="seach-user" class="sidebar-nav-link">
					<div>
						<i class="fas fa-user" style="
    color: white;
"></i>
					</div>
					<span style="font-size:20px;font-family:monospace">Usuário</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#" onclick="seach_cel()" id="seach_celular" class="sidebar-nav-link">
					<div>
						<i class="fas fa-mobile" style="
    color: white;
"></i>
					</div>
					<span style="font-size:20px;font-family:monospace">Celulares</span>
				</a>
			</li>
			<li class="side-exit">
				<div class="sidebar-exit-item"> 
					<button onclick="javascript: location.href='logout.php';" type="button" class="btn btn-danger btn-lg" style="
    position: absolute;
    top: 87%;
    left: 37%;
"> SAIR <i class="fas fa-sign-out-alt"></i></button>
				</div>
			</li>
		</ul>
	</div>
	
	<div id="includedContentCell"> 
		<img src="imagens/adm.gif" alt="ATPro logo" class="logo logo-light" style="
    position: fixed;
    left: 13%;
    top: -1%;
    width: 105rem;
    height: 101%;
">
	</div>
	<div> 
	
	</div>
	
	
	
	<script src="js/jquery-3.6.0.min.js"></script> 
	<script src="js/index.js"></script>
</body>

</html> 
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>