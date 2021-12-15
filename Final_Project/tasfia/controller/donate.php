<?php
$tk="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $tk=$_POST["tk"];
    if(!empty($_POST["tk"])){
        include '../model/donarmodel.php';
        donate($tk);
    }


}
else{
    echo "Not submit";
}