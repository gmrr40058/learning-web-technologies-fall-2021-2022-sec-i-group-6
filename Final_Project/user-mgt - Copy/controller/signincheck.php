<?php 
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				
				$status = validate($username, $password);
				
				if($status){
                     $_SESSION['flag']='true';
					//setcookie('flag', 'true', time()+3600, '/');
					header('location: ../views/dashboard.php');
				}else{
					header('location: ../views/signin.html');
				}

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>
