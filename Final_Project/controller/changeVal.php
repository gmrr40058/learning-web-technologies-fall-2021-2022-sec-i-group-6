<?php 
    require_once('../views/header.php');
    require_once('../model/userModel.php');

	if(isset($_POST['sbt'])){

		$id         = $_REQUEST['id'];
		$fname   	= $_POST['fname'];
		$lname    	= $_POST['lname'];
		$username 	= $_POST['uname'];
		$phone 	    = $_POST['phone'];
		$password 	= $_POST['pass'];
		$conpassword= $_POST['confpass'];
		$email 		= $_POST['email'];

		if($username != ""){
			if($password != ""){
				if ($conpassword != "") {
					 if($email !=""){
					 	if ($password == $conpassword) {
					 		
					 		$user = ['id'=>$id, 'fname' => $fname, 'lname' => $lname, 'username' => $username, 'phone' => $phone, 'email' => $email, 'password' => $password];
					 		$status = editUser($user);
					 		if ($status) {
					 			header('location: ../views/login.html');
					 		}else{
					 			header('location: ../views/editp.php');
					 		}
							
					 	}
					 	else{
					 		echo "passworrd and confirm password must be same.";
					 	}
					
				}else{
					echo "invalid email....";
				}
			}else{
				echo "invalid confirm password....";
			}
		}else{
			echo "invalid passworrd....";
		}
	}else{
		echo "invalid username....";
	}
	}
?>