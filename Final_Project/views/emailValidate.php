<?php 
    //require_once('header.php');
    require_once('../model/userModel.php');

    $result = getAllUsers();
	$data = json_decode($_REQUEST['data']);

	$uname = $data->uname;
	$phone = $data->phone;
	$email = $data->email;
    while ($row = mysqli_fetch_assoc($result)) {
       if($row['username'] != $uname){
           if ($row['phonenumber'] != $phone) {
               if ($row['email'] != $email) {
                   
                //echo " ";
                return true;

               }else {
                   echo '* Email already taken.';
                   return false;
                   break;
               }

           }else {
                echo '* Phone Number already taken.';
                return false;
                break;
           }

       }else {
            echo '* Username already taken.';
            return false;
            break;
       }
    }
?>