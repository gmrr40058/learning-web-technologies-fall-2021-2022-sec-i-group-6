<?php 

	require_once('../model/userModel.php');

	if(isset($_POST['sbt'])){

		$username 	= $_POST['uname'];
		$password 	= $_POST['pass'];

		$data1 = validate1($username, $password);
		$data2 = validate2($username, $password);
		$data3 = validate3($username, $password);
		
		if ($data1 !=null) {
			$type = $data1['type'];
			$status = true;
			$data = $data1;
		}elseif ($data2 !=null) {
			$type = $data2['type'];
			$status = true;
			$data = $data2;
		}elseif ($data3 !=null) {
			$type = $data3['type'];
			$status = true;
			$data = $data3;
		}else{

			$status = false;
		}
		

		if($username != ""){
			if($password != ""){

				if($status){
					if ($type == 'Donar') {
						setcookie('flag', 'true', time()+3600, '/');
						setcookie('fname', $data['firstname'] , time()+3600, '/');
						setcookie('lname', $data['lastname'] , time()+3600, '/');
						setcookie('username', $data['username'] , time()+3600, '/');
						setcookie('phone', $data['phonenumber'] , time()+3600, '/');
						setcookie('email', $data['email'] , time()+3600, '/');
						setcookie('password', $password , time()+3600, '/');
						header('location: ../views/home.php');
					}elseif ($type == 'Provider') {
						setcookie('flag', 'true', time()+3600, '/');
						setcookie('password', $password , time()+3600, '/');
						header('location: ../Project_main _ Copy/home.php');
					}elseif ($type == 'Admin') {
						setcookie('flag', 'true', time()+3600, '/');
						setcookie('username', $username , time()+3600, '/');
						header('location: ../user-mgt - Copy/views/dashboard.php');
					}elseif ($type == 'Collector') {
						setcookie('flag', 'true', time()+3600, '/');
						setcookie('password', $password , time()+3600, '/');
						header('location: ../tasfia/view/home.php');
					}else{

						header('location: ../views/login.html');
					}
				}else{

					header('location: ../views/login.html');
				}

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>