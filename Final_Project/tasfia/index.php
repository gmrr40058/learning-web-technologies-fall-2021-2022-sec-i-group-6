<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration For Provider</title>
    <style>
        .nav{
            background-color: blue;
            padding: 10px;
            font-size: 22px;
            border: 2px solid black;
        }
        body{
            background-color: pink;
            font-size: 18px;
        }
        .content{
            background-color: palevioletred;
            margin: 10px;
            padding: 15px;
            font-size: 20px;
            text-align: center;
        }
        label{
            font-size: 18px;
            padding: 10px;
        }
        button{
            background-color: greenyellow;
            padding: 15px;
            border: 3px solid gray;
        }
        a{
            margin: 5px;
            padding: 5px;
            color: black;
            border: 1px solid paleturquoise;
        }
    </style>
</head>
<body>
    <div class="nav">
        <h2>Provider</h2>
    </div>
    <div class="content">
        <form action="controller/reg.php" method="post">
            <fieldset>
                <legend>Registration</legend>
                <label for="Name">User Name</label>
                <input type="text" name="username" id="" required> <br><br>
                <label for="email">Email</label>
                <input type="email" name="email" id="" required> <br><br>
                <label for="password">Password</label> 
                <input type="password" name="password" id="" required> <br><br>
                <label for="cpassword">Confirm Password</label>
                <input type="password" name="cpassword" id="" required> <br><br>
                <label for="type">user Type</label>
                <select name="type" id="">
                    <option value="provider">provider</option>
                </select> <br><br>
                <button type="submit" value="submit">Register</button>
            </fieldset>
        </form>
        <br><br>
        <a href="view/login.php">Want to login?</a>
    </div>
</body>
</html>