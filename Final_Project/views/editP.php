<?php 
    require_once('header.php');
    require_once('../model/userModel.php');
    $id = $_REQUEST['id'];
    $data = getUserById($id);
?>
	<body>
        <div>
            <div style="background-color: cyan; text-align:center; width: 400px;height: 200px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Account</h1>
                <hr>
                <a href="home.php">Dashboard</a><br/>
                <a href="../controller/logout.php">logout </a>
            </div>
            <div style="background-color: cyan; text-align:center; width: 400px;height: 550px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Edit Profile:</h1>
                <hr>
                <form onsubmit="return evalidateForm()" action="../controller/changeVal.php" method="post">
                    <input type="hidden" value="<?=$data['id']?>" name="id"><br/>
                    First Name<br>
                    <input type="text" id="firstname" value="<?=$data['firstname']?>" name="fname">
                    <label style="color:red" id="fnamem"></label><br/>
                    Last Name<br>
                    <input type="text" id="lname" value="<?=$data['lastname']?>" name="lname">
                    <label style="color:red" id="lnamem"></label><br/>
                    User Name<br>
                    <input type="text" id="uname" value="<?=$data['username']?>" name="uname">
                    <label style="color:red" id="unamem"></label><br/>
                    Phone Number<br>
                    <input type="text" id="phone" value="<?=$data['phonenumber']?>" name="phone">
                    <label style="color:red" id="phonem"></label><br/>
                    Email<br>
                    <input type="email" id="email" value="<?=$data['email']?>" name="email">
                    <label style="color:red" id="emailm"></label><br/>
                    Password<br>
                    <input type="password" id="password" value="<?=$data['password']?>" name="pass">
                    <label style="color:red" id="passwordm"></label><br/>
                    Confirm Password<br>
                    <input type="password" id="confpass" value="" name="confpass">
                    <label style="color:red" id="confpassm"></label><br/><br/>
                    <input type="submit" name="sbt" value="Update" />
                </form>
                    <a href="deletep.php?id=<?=$data['id']?>">Delete Account</a><br/>
            </div>
            
        </div>
        <script src="myscript2.js">
           
        </script>
    </body>
	