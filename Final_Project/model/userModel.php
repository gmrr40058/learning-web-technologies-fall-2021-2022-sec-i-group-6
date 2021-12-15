<?php

	require_once('db.php');

	function validate1($username, $password){
		$con = getConnection();
		$sql = "select * from userlog where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);
		return $data;
	}function validate2($username, $password){
		$con = getConnection();
		$sql = "select * from userlog where phonenumber='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);
		return $data;
	}function validate3($username, $password){
		$con = getConnection();
		$sql = "select * from userlog where email='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);
		return $data;
	}

	function getAllUsers(){

		$con = getConnection();
		$sql = "select * from userlog";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function addUser($user){
		$con = getConnection();
		$sql = "insert into userlog values('', '{$user['fname']}', '{$user['lname']}', '{$user['username']}', '{$user['phone']}', '{$user['email']}', '{$user['password']}', '{$user['type']}')";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
	    }	
	}

	function getUserById($id){
		$con = getConnection();
		$sql = "select * from userlog where id={$id}";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);
		return $data;	
	}

	function editUser($user){
		$con = getConnection();
		$sql = "update userlog set firstname='{$user['fname']}', lastname='{$user['lname']}', username='{$user['username']}', phonenumber='{$user['phone']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
	    }	
	}

	
	function deleteUser($id){
		$con = getConnection();
		$sql = "delete from userlog where id={$id}";
		
		if(mysqli_query($con, $sql)){
				return true;
			}else{
				return false;
			}
	}

	function donars($user){
		$con = getConnection();
		$sql = "insert into donars values('', '{$user['fname']}', '{$user['lname']}', '{$user['donation']}', '{$user['phone']}', '{$user['email']}')";
		if (mysqli_query($con, $sql)) {
			return true;
		} else {
			return false;
		}
	}

	function getAllDonars(){

		$con = getConnection();
		$sql = "select * from donars";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	
	function getDonarsByEmail($email){

		$con = getConnection();
		$sql = "select * from donars where email='{$email}'";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);
		return $data;
	}

	function donations($user){
		$con = getConnection();
		$sql = "insert into donations values('', '{$user['email']}', '{$user['donation']}')";
		if (mysqli_query($con, $sql)) {
			return true;
		} else {
			return false;
		}
	}

	function getAlldonations(){
		
		$con = getConnection();
		$sql = "select * from donations";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function donationup($user){
		$con = getConnection();
		$sql = "update donars set donation='{$user['donation']}' where email='{$user['email']}'";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
	    }	
	}
 ?>