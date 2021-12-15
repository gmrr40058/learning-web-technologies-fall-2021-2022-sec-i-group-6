<?php 
    require_once('header.php');
    require_once('../model/userModel.php');
    $id = $_REQUEST['id'];
    $data = getUserById($id);
?>
      <div>
            <div style="background-color: cyan; text-align:center; width: 400px;height: 200px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Account</h1>
                <hr>
                <a href="home.php">Dashboard</a><br/>
                <a href="../controller/logout.php">logout </a>
            </div>
            <div style="background-color: cyan; text-align:center; width: 400px;height: 200px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Donation of <?php echo $_COOKIE['fname'] . " " . $_COOKIE['lname'];?></h1>
                <hr>
                <form action="../controller/donatech.php" method="post">
                  <input type="hidden" value="<?=$data['id']?>" name="id"><br/>
                  <label for="quantity">Donate Quantity(between 1 and 1000000 Tk):</label>
                  <input type="number" id="quantity" name="donate" min="1" max="1000000">
                  <input type="submit" name="sbt" value="Donate">
                </form>           
        </div>
    </div>