<?php 
	//include('header.php');
	require_once('../model/usersModel.php');
	$result = getAllUsers();
	$count = mysqli_num_rows($result);

	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
</head>
<body>


<input type="text" id="name" name="name" value="" >
	<input type="button" name="" value="Search" onclick="search()">

	<div id="div1">
		
	</div>
<script type="text/javascript" src="../js/script.js"></script>
	<br>
	
<div class="Table">
	<center>
		<a href="dashboard.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center>
	<table border="1"  align="center" height="500px"  width="100%">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>

	<?php while($data = mysqli_fetch_assoc($result)) { ?>
		<tr>
		     <td><?=$data['Id']?></td>
			<td><?=$data['username']?></td>
			<td><?=$data['password']?></td>
			<td><?=$data['email']?></td>
			<td>
				<a href="edit.php?id=<?=$data['Id']?>"> EDIT </a> |
				<a href="delete.php?id=<?=$data['Id']?>"> DELETE</a>
			</td>
		</tr>

	<?php } ?>
	</table>
</div>
</body>
</html>