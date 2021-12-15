<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Donation</title>
</head>
<body>
<?php include 'nav.php';?>
<br>
<div class="content">
    <?php
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="users";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
        $ID= $_SESSION["username"];
        $sql = "SELECT * From donat WHERE name = '$ID'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table style='padding:5px;margin:5px;background-color: #04AA6D;color: white;border: 1px solid black;border-collapse: collapse;width: 50%;text-align: center;'>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><th style='padding:5px;border: 1px solid black;border-collapse: collapse; width: 100%;'>ID:</th><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:5px;'>".$row["ID"]."</td></tr>";
                echo "<tr><th style='padding:5px;border: 1px solid black;border-collapse: collapse; width: 100%;'> Name:</th><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:5px;'>".$row["name"]."</td></tr>";
                echo "<tr><th style='padding:5px;border: 1px solid black;border-collapse: collapse;width: 100%;'>Tk:</th><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:5px;'>".$row["tk"]."</td></tr>";
            }
            echo "</table>";
        } 
        else {
            echo "ID not found";
        }
        $conn->close(); 
    ?>
    </div>
</body>
</html>