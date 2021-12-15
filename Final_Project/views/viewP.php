<?php 
  require_once('header.php');
  require_once('../model/userModel.php');
  $username = $_COOKIE['username'];
  $password = $_COOKIE['password'];
  $data = validate1($username, $password);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
            <div style="background-color: cyan; text-align:center; width: 400px;height: 200px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Account</h1>
                <hr>
                <a href="home.php">Dashboard</a><br/>
                <a href="../controller/logout.php">logout </a>
            </div>
            <div style="background-color: cyan; text-align:center; width: 400px;height: 300px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Profile: <?php echo $_COOKIE['fname'] . " " . $_COOKIE['lname'];?></h1>
                <hr>
                <img src="" alt="select profile picture" width="100" height="100" id="src"><br>
                <input type="file" id="image" value="">
                <input type="button" value="Update" onclick="image()"><br>
                <b>Username: <?php echo $_COOKIE['username']; ?></b><br/>
                <b>Phone Number: <?php echo $_COOKIE['phone']; ?></b><br/>
                <b>Email: <?php echo $_COOKIE['email']; ?></b>
                <p id="message"> </p>
            </div>
            
            
        </div>
        <script src="myscript2.js">
           
        </script>
</body>
</html>	
	