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
			<h1>SUB ADMIN PANEL</h1>
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
      		<td>khan</td>
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
        	
        <table>
        	<tr>
        		<td>
        			Name:
        		</td>
        		<td><input type="text" name="name" value=""></td>
        	</tr>
        	<tr>
        		<td>
        			Cell:
        		</td>
        		<td><input type="number" name="number" value=""></td>
        	</tr>
        	<tr>
        		<td>
        			Address:
        		</td>
        		<td><input type="text" name="address" value=""></td>
        	</tr>
        	<tr>
        		<td>
        			<button type="submit" class="btn" name="login_user">ADD</button>
        			<button type="submit" class="btn" name="login_user">DELETE</button>
        		</td>
        	</tr>
        </table>
        <br>
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