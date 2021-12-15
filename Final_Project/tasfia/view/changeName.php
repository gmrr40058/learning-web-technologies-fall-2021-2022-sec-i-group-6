<html>
<head>
<?php include 'nav.php';?>
</head>
    <title>Change Name</title>

<body>
<div class="content">
    <div class="main" style="margin-left: 20%;text-align: center;"><br>
    <form action="../controller/users.php" method="post">
        Password: <input type="password" name="password" id="password" ><br><br>
        <fieldset>
             Name: <input type="text" name="name" id="name">
        </fieldset>
        <br> 
        <span id="spane" style="color: red;"></span> <br> <br>
        <button type="submit" id="sub" style=" background-color: #313131; border-radius: 5px;color: beige;font-family: 'Source Sans Pro', sans-serif;justify-content: center;text-align: center;font-size: 24px;">Edit Name</button>
        </form>
    </div>
</div>
</body>

</html>
