<?php 
	session_start();
	if(isset($_SESSION['flag'])){
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Collector Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="../abc.jpg"style="background-repeat:no-repeat;
background-size: 100% 200%">
<div class="Table">
<table border="3"   width="60%" align="center">
	<tr height="80px" >
		<td width="80%" align="center">
			<h1>Welcome To Collector Profile</h1>
		</td>		
	</tr>
	<tr>
		<td height="200px" align="left">

      
      	<a href="collectorlist.php">Collector List</a><br>
      	<a href="add-collector.php">ADD</a><br>
      	<a href="update-collector.php">UPDATE</a><br>
      	<a href="remove-collector.php">REMOVE</a><br>
    
<br><br><br><br>


<a href="dashboard.php">BACK</a><br>
<a href="../controller/logout.php">logout </a>			
		</td>

	</tr>
	<tr>
			<td  align="center">Copyright@123</td>

	</tr>
</table>
</div>
</body>
</html>


<?php
	}else{
		header('location: signin.html');
	}
?>