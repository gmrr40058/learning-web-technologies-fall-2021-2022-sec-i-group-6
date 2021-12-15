<?php 
	session_start();
	if(isset($_SESSION['flag'])){
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
</head>
<body background="../abc.jpg"style="background-repeat:no-repeat;
background-size: 100% 200%">
<table border="1"   width="60%" align="center">
	<tr height="80px" >
		<td width="80%" align="center">
			<h1>Welcome To Collector Profile</h1>
		</td>		
	</tr>
	<tr>
		<td height="200px" align="center">

        <table>
        	<tr>
        		<td>User Name:</td>
        		<td><input type="text" name="username" value=""></td>
        	</tr>
        	<tr>
        		<td>cell</td>
        		<td><input type="value" name="cell" value=""></td>
        	</tr>
        
        	<tr>
        		<td><input type="submit" name="remove" value="Remove">
        		</td>
        		<td>
        		<a href="collector.php">BACK</a><br>
        		<a href="../controller/logout.php">logout </a>	
        		</td>
        		
              
        	</tr>
        </table>




			
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