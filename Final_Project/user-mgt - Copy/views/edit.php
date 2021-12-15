<?php 
	
	require_once('../model/usersModel.php');

	$id = $_REQUEST['id'];
	//echo $id;
	$user = getUserById($id);
	//print_r($user);
?>

<html>
<head>
	<title>Edit user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
</head>
<body>
	<div class="Table">
		<form name="myForm" action="../controller/updateUser.php" onsubmit="return validateForm()" method="post">

		<fieldset>
			<legend align="center" >Edit User</legend>
			<table  width="20px"  align="center">
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" id="uname"value="<?=$user['username']?>"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" id="pass" value="<?=$user['password']?>"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" id="email" value="<?=$user['email']?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$user['Id']?>"></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
				<tr>
					<td><a href="userlist.php">Back </a> </td>
		            <td> <a href="../controller/logout.php">logout </a> </td>
				</tr>
			</table>
			<p id="message"></p>
		</fieldset>
	</form>
	<script src="../js/editscript.js">
	</script>
</div>
</body>
</html>