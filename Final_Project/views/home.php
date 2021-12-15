<?php 
   
    require_once('header.php');
    require_once('../model/userModel.php');
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
    $data = validate1($username, $password);


?>
	
	<div>
            <div style="background-color: cyan; text-align:center; width: 400px;height: 200px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Account</h1>
                <hr>
                <a href="home.php">Dashboard</a><br/>
                <a href="viewP.php">View Profile</a><br/>
                <a href="editP.php?id=<?=$data['id']?>">Edit Profile</a><br/>
                <a href="../controller/logout.php">logout </a>
            </div>
            <div style="background-color: cyan; text-align:center; width: 400px;height: 500px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Hello: <?php echo $_COOKIE['fname'] . " " . $_COOKIE['lname'];?></h1>
                <hr>
                <ol>
                    <li><a href="donarInfo.php">Donars</a><br/></li>
                    <li><a href="donarsch.php">Donar Search</a><br/></li>
                    <li><a href="donation.php?id=<?=$data['id']?>">Your Donation</a><br/></li>
                    <li><a href="donate.php?id=<?=$data['id']?>">Donate</a><br/></li>
                    <li><a href="collectorInfo.php">Collectors</a><br/></li>
                    <li><a href="collections.php">Search Collectors</a><br/></li>
                    <li><a href="providerInfo.php">Providers</a><br/></li>
                    <li><a href="provids.php">Search Providers</a><br/></li>
                    <li><a href="contact.php">Contacts</a><br/></li>
                </ol>
            </div>
            
        </div>