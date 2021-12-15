<?php
$username=$email=$password=$cpassword=$type="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $type=$_POST["type"];
    if($password==$cpassword){
        if(!empty($username)||!empty($username)||!empty($username)||!empty($username)){
            include '../model/donarmodel.php';
            creat($username,$email,$password,$type);
        }
    }
    else{
        echo "Password and Confirm Password didn't match";
    }


}
else{
    echo "Not submit";
}