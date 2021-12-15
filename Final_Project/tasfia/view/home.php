<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php include 'nav.php';?>
<br>
<div class="content">
<?php 
    include '../model/donarmodel.php';
    showall();
?>
 <h2>Delete</h2>
    <form action="../controller/deleteid.php" method="post">
        <fieldset>
            The ID You want to: <input type="text" name="ID" id="ID" required><br><br>
            Your Password: <input type="password" name="password" id="password" required ><br>
        </fieldset>
        <br> 
        <span id="spane" style="color: red;"></span> <br> <br>
        <button onclick="alert" type="submit" id="sub" style=" background-color: #A91B0D; border-radius: 5px;color: beige;font-family: 'Source Sans Pro', sans-serif;justify-content: center;text-align: center;font-size: 20px;">DELETE</button>
        </form>
    </div>
</body>
</html>