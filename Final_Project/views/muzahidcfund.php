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
                <form action="mailSub.php" method="post">
                    To:
                    <input type="email" value="muzahidcfund@gmail.com" name="email" disabled="disabled"><br/>
                    <br/>
                    Subject:<br/>
                    <textarea name="message" rows="2" cols="40"></textarea><br/>
                    Compose:<br/>
                    <textarea name="message" rows="10" cols="40"></textarea><br/>
                    <input type="submit" name="sbt" value="Send" />
                    
                </form>
            </div>
            
        </div>