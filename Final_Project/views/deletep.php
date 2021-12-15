<?php
    require_once('../model/userModel.php');
    $id = $_REQUEST['id'];
    
	$status = deleteUser($id);
	if ($status) {
		header('location: registration.html');
	}
	else{
		header('location: editp.html');
	}
?>