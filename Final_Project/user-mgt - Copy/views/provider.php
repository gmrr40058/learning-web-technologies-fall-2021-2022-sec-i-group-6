<?php 
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Collector Profile</title>
</head>
<body background="../abc.jpg"style="background-repeat:no-repeat;
background-size: 100% 200%">
<table border="1"   width="60%" align="center">
	<tr height="80px" >
		<td width="80%" align="center">
			<h1>Welcome To Provider Profile</h1>
		</td>		
	</tr>
	<tr>
		<td height="200px" align="left">

      <ul>
      	<li type="disc">Donar List</li><br>
      	<li>ADD </li><br>
      	<li>UPDATE</li><br>
      	<li>REMOVE</li><br>
      </ul>



<a href="dashboard.php">BACK</a><br>
<a href="../controller/logout.php">logout </a>
			
		</td>
	</tr>
	<tr>
			<td  align="center">Copyright@123</td>

	</tr>
</table>
</body>
</html>

<?php
	}else{
		header('location: signin.html');
	}
?>