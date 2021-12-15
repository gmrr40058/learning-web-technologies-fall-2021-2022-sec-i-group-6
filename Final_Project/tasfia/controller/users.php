<?php 
session_start();
    $flag=0;
    $password=$name=$ID="";
    $passworderr="";
    $email=$_SESSION["email"];
    if($_POST["password"]!=""){
        $password = test_input($_POST["password"]);
    }
    else{
        $flag=1;
        $passworderr="Password required";
    }
    if($_POST["name"]!=""){
        $lname = test_input($_POST["name"]);
    }
    elseif($_POST["ID"]!=""){
        if($_POST["ID"]==$_SESSION["ID"]){
            $ID=test_input($_POST["ID"]);
            delete($email,$password,$ID);
        }
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
        if($_SESSION["password"]==$password){
            include_once "../model/profile.php";
            if($_POST["fname"]!=""){editlname($email,$password,$lname);}
            else{
                echo "no update";
                header("Refresh: 3; url=../view/editProfile.php");
            }
        }
        else{
            header("Refresh: 3; url=../view/editProfile.php");
        }

    }
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>