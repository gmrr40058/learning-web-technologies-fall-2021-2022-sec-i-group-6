<?php
function con(){
    $conn="";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
        return $conn;
}
function donate($tk){
    $conn=con();
    $name= $_SESSION["username"];
    $sql = "INSERT INTO donat (name,tk)VALUES ('$name','$tk')";
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Refresh:2; url=../view/");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
function creat($username,$email,$password,$type){
    $conn=con();
    $sql = "INSERT INTO users (username, email, password,type)
    VALUES ('$username','$email','$password','$type')";
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Refresh:2; url=../");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
function showall(){
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="users";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
        $sql = "SELECT * From donat";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table style='padding:5px;margin:5px;background-color: #04AA6D;color: white;border: 1px solid black;border-collapse: collapse;width: 50%;text-align: center;'>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td style='padding:15px;border: 1px solid black;border-collapse: collapse; width: 100%;'>ID:</td><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:5px;'>".$row["ID"]."</td>";
                echo "<td style='padding:15px; border: 1px solid black;border-collapse: collapse; width: 100%;'>Amount:</td><td style='border: 1px solid black;border-collapse: collapse;width: 100%;padding:5px;'>".$row["tk"]."</td></tr>";
            }
            echo "</table>";
        } 
        else {
            echo "ID not found";
        }
        $conn->close();
}
function login($email,$password){
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="users";
        //create connection..
        try{
        $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
        if(mysqli_connect_error())
        {
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        
        }
        else{$email = mysqli_real_escape_string($conn, stripcslashes($email));  
            $password = mysqli_real_escape_string($conn, stripcslashes($password));  
            $SELECT= "SELECT * From users Where email='$email' and password='$password'"; 
            $result = mysqli_query($conn, $SELECT);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result); 
            if($count==0)
            {
                echo" Email not found".'<br>'."Wrong password <br>";
                header("Refresh: 3; url=index.php");
            }
            else{
                session_start();
                $_SESSION["ID"]=$row["Id"];
                $_SESSION["email"]=$row["email"];
                $_SESSION["password"]=$password;
                $_SESSION["username"]=$row["username"];
                $_SESSION["type"]=$row["type"];
                header("Refresh: 0; url=../view/");
            }
        }
            $conn->close();
}