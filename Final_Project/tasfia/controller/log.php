<?php
$email=$password="";
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $email=$_POST["email"];
    $password=$_POST["password"];
        if(!empty($email)||!empty($password)){
            include '../model/donarmodel.php';
            login($email,$password);
        }
}
else{
    echo "Not submit";
}