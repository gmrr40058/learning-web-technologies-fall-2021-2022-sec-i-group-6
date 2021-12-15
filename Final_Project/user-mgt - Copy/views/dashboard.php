<?php 
	session_start();
	if(isset($_SESSION['flag'])){
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body background="../abc.jpg"style="background-repeat:no-repeat;
background-size: 100% 200%">
<div class="Table">
<table border="3"   width="60%" align="center">
	<tr height="80px" >
		<td width="80%" align="center">
			<h1>Welcome To Deshboard</h1>
		</td>		
	</tr>
	<tr>
		<td height="200px" align="left">
			
            <ul>
            	
            	<li><a href="userlist.php">UserList</li>
            	<li><a href="collector.php">Collector</a></li>
        	<li><a href="provider.php">Provider</a></li>
        	<li><a href="doner.php">Doner</a></li>
        	<li><a href="sub-admin.php">Sub Admin</li>
        	<li><a href="payment.php">Payment History</li>

            </ul>
        	
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