<?php 
	session_start(); 
	require 'conexao.php';

	if (isset($_POST['uname']) && isset($_POST['password'])) {

		function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}

		$uname = validate($_POST['uname']);
		$pass = md5(validate($_POST['password']));

		if (empty($uname)) {
			header("Location: index.php?error=User Name is required");
			exit();
		}else if(empty($pass)){
			header("Location: index.php?error=Password is required");
			exit();
		}else{
			$sql = "SELECT * FROM login_user WHERE user_login='$uname' AND password_login='$pass'";

			$result = mysqli_query($con, $sql);

			if (mysqli_num_rows($result) === 1) {
				$row = mysqli_fetch_assoc($result);
				/*echo "$row"; 
				echo "$uname"; 
				echo "$pass"; 
				die;*/
				if ($row['user_login'] === $uname && $row['password_login'] === $pass) {
					$_SESSION['user_login'] = $row['user_login'];
					$_SESSION['name_login'] = $row['name_login'];
					$_SESSION['id_login'] = $row['id_login'];
	
					header("Location: adm.php");
					exit();
				}else{
					header("Location: index.php?error=Incorect User name or password");
					exit();
				}
			}else{
				header("Location: index.php?error=Incorect User name or password");
				exit();
			}
		}
		
	}else{
		header("Location: index.php");
		exit();
	} 
?>