<html>
<head>
</head>
    <title>view Profile</title>
    <?php include 'nav.php';?>

<body>

        <?php  
        include '../model/profile.php'; showuserbyID($_SESSION["ID"]);
            
        ?>

</div>
</body>

</html>