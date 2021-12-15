<?php 
    require_once('header.php');
?>
    
    <div>
            <div style="background-color: cyan; text-align:center; width: 400px;height: 200px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Account</h1>
                <hr>
                <a href="home.php">Dashboard</a><br/>
                <a href="viewP.php">View Profile</a><br/>
                <a href="editP.php">Edit Profile</a><br/>
                <a href="logout.php">logout </a>
            </div>
            <div style="background-color: cyan; text-align:center; width: 400px;height: 600px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Mail Section</h1>
                <hr>
                 <?php 

					if(isset($_POST['sbt'])){
						echo "Sent";
					}
				?>
            </div>
            
        </div>