<?php 
session_start();
    $flag=0;
    $password="";
    if($_POST["ID"]!=""){
            $ID=test_input($_POST["ID"]);
    }
    else{
        echo "No value insulted";
    }

    if($flag==1)
    {
        echo$passworderr."<br>";
        header("Refresh: 3; url=../view/editProfile.php");
    }

    else{
        if($_SESSION["password"]==$_POST["password"]){
            if($_POST["ID"]!=""){
                $id=$_POST["ID"];
                $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="users";
        try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM donat WHERE ID='$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo $stmt->rowCount() . " Record Deleted successfully";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
            }
            else{
                echo "no update";
                header("Refresh: 3; url=../view/editProfile.php");
            }
        }
        else{
            echo $password;
            header("Refresh: 3; url=../view/editProfile.php");
        }

    }
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    function fg($data1,$data2)
    {
        include_once "../model/profile.php";
            updatepassword($data1,$data2);
    }
?>