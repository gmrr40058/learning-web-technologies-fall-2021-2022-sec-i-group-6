<?php 
	session_start();
   require_once('../model/userModel.php');

	if(isset($_POST['sbt'])){

		$fname   	= $_POST['fname'];
		$lname    	= $_POST['lname'];
		$username 	= $_POST['uname'];
		$phone 	   = $_POST['phone'];
		$password 	= $_POST['pass'];
		$conpassword= $_POST['confpass'];
		$email 		= $_POST['email'];
		$type       = $_POST['user_type'];

		if($username != ""){
			if($password != ""){
				if ($conpassword != "") {
					if($email !=""){
						if ($password == $conpassword) {
							if ($type != "") {
								$user = ['fname' => $fname, 'lname' => $lname, 'username' => $username, 'phone' => $phone, 'email' => $email, 'password' => $password,  'type' => $type];
						 	   $status = addUser($user);
						 		if ($status) {
									$_SESSION['fname']=$fname;
									$_SESSION['lname']=$lname;
									$_SESSION['username']=$username;
									$_SESSION['phone']=$phone;
									$_SESSION['email']=$email;
						 			header("location: ../views/login.html");
						 		}else{
									 echo 'try again';
						 			//header("location:../views/registration.html");
						 		}
							}else{
								echo "Atleast one domain must be selected";
							}
						 	
						}else{
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