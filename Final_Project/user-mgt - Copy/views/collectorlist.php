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
			<h1>Collector List</h1>
		</td>		
	</tr>
	<tr>
		<td height="200px" align="left">

      <table border="1" align="center" width="100%">
      	<tr>
      		<td align="center">Name</td>
      		<td align="center">Cell</td>
      		<td align="center">Address</td>
        </tr>
        <tr>
        	<td>Tushar</td>
      		<td>01625056430</td>
      		<td>Tongi,Gazipura</td>
        </tr>
      	<tr>
      		<td>Akram</td>
      		<td>0125365295</td>
      		<td>Uttara,sector4</td>
      	</tr>	
      		<tr>
      			<td>Atik</td>
      			<td>01256341958</td>
      		    <td>Dhanmondi-2153,dhaka</td>
      	</tr>
      	<tr>
      		<td>Rahul</td>
      		<td>015588456</td>
      		<td>Colleggate,tongi</td>
      	</tr>
      
      </table>
      <br>
      	<a href="collector.php">BACK</a><br>
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