<?php 
    function updatepassword($email,$password)
        {$host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="users";
        try{
       $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE users SET password='$password' WHERE email='$email'";
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";
        if($stmt->rowCount()==1)
        {
            header("Refresh: 3; url=../../index.php");
        }
        else{
            echo "No record updated";
        }
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
}

function showuserbyID($ID){$host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="users";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
        $ID=$_SESSION["ID"];
        $sql = "SELECT * From users WHERE Id = '$ID'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table style='padding:5px;margin:5px;background-color: #04AA6D;color: white;border: 1px solid black;border-collapse: collapse;width: 50%;text-align: center;'>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><th style='padding:5px;border: 1px solid black;border-collapse: collapse; width: 100%;'>ID:</th><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:5px;'>".$row["Id"]."</td></tr>";
                echo "<tr><th style='padding:5px;border: 1px solid black;border-collapse: collapse; width: 100%;'>first Name:</th><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:5px;'>".$row["username"]."</td></tr>";
                echo "<tr><th style='padding:5px;border: 1px solid black;border-collapse: collapse;width: 100%;'>Email:</th><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:5px;'>".$row["email"]."</td></tr>";
            }
            echo "</table>";
        } 
        else {
            echo "ID not found";
        }
        $conn->close();}
function editlname($email,$password,$name){
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="users";
        try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $SELECT= "SELECT * From users Where email='$email' and password='$password'"; 
        $stmt = $conn->prepare($SELECT);
        $stmt->execute();
        if($stmt->rowCount()!=0){
            $sql = "UPDATE users SET lname='$name' WHERE email='$email'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo $stmt->rowCount() . " records UPDATED successfully";
            if($stmt->rowCount()!=1)
            {
                header("Refresh: 1; url=../view/viewProfile.php");
            }
            else{
                echo "No record updated";
                header("Refresh: 1; url=../view/viewProfile.php");
            }
        }
        else{
            echo "Wrong password";
            header("Refresh: 1; url=../view/viewProfile.php");
        }
        
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
}

function editphone($email,$password,$phone){
    $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="users";
        try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $SELECT= "SELECT * From users Where email='$email' and password='$password'"; 
        $stmt = $conn->prepare($SELECT);
        $stmt->execute();
        if($stmt->rowCount()!=0){
            $sql = "UPDATE users SET phone='$phone' WHERE email='$email'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo $stmt->rowCount() . " records UPDATED successfully";
            if($stmt->rowCount()!=1)
            {
                header("Refresh: 1; url=../view/viewProfile.php");
            }
            else{
                echo "No record updated";
                header("Refresh: 1; url=../view/viewProfile.php");
            }
        }
        else{
            echo "Wrong password";
            header("Refresh: 1; url=../view/viewProfile.php");
        }
        
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
}
function delete($email,$password,$id){
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="users";
        try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $SELECT= "SELECT * From users Where email='$email'"; 
        $stmt = $conn->prepare($SELECT);
        $stmt->execute();
        if($stmt->rowCount()!=0){
            $sql = "DELETE FROM users WHERE ID='$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo $stmt->rowCount() . " Record Deleted successfully";
            if($stmt->execute()== TRUE)
            {
                header("Refresh: 3; url=../../index.php");
            }
            else{
                echo "No record updated";
                header("Refresh: 2; url=../view/viewProfile.php");
            }
        }
        else{
            echo "Wrong password";
            header("Refresh: 2; url=../view/viewProfile.php");
        }
        
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
}

?>