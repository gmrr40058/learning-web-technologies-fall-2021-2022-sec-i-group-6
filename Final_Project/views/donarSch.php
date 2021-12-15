<?php 
    require_once('header.php');
    require_once('../model/userModel.php');
    $result = getAllDonars();
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crowd Funding</title>

</head>	
<body>
	<div>
        <div style="background-color: cyan; text-align:center; width: 100%;height: 20%; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
            <h1>Account</h1>
            <hr>
            <a href="home.php">Dashboard</a><br/>
            <a href="../controller/logout.php">logout </a>
        </div>

		<div style="background-color: cyan; text-align:center; width: 100%;height: 80%; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
            <h1>Donars</h1>

			<input type="text" id="name" name="name" value="" onkeyup="search()">
			<input type="button" name="" value="Click" onclick="search()"><br><br>

			<div id="div1">
				
			</div>

			<script type="text/javascript" src="myscript2.js"></script>
		</div>
	</div>
</body>
</html>