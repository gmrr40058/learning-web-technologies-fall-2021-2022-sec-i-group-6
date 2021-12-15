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
			<h1>Payment History</h1>
		</td>		
	</tr>
	<tr>
		<td height="200px" align="left">
            
        	<table border="1"align="center" width="60%">
        		<tr>
        			<td>Collected</td>
        			<td>400025</td>
        			<td><a href="#">details</a></td>
        		</tr>
        		<tr>
        			<td>Donet</td>
        			<td>250025</td>
        			<td><a href="#">details</a></td>
        		</tr>
        		<tr>
        			<td>Fund</td>
        			<td>150000</td>
        			<td><a href="#">details</a></td>
        		</tr>
        		
        	</table>
        
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