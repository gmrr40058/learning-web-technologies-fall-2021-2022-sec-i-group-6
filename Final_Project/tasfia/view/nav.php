<link rel="stylesheet" href="style.css">
    <div class="nav" style="display: flex;">
        <h1>Provider</h1>
        <h2 style="margin-left: 50rem ;">        <?php 
            session_start();
            echo $_SESSION["username"];
        ?></h2>
        <h2>
            <a href="logout.php">LogOut</a>
        </h2>
    </div>
    <div class="desh" style="background-color: blueviolet; margin: 1rem ; padding:1.5rem;">
        <a href="home.php">Home</a>
        <a href="editProfile.php">Edit Profile</a>
        <a href="viewProfile.php">View Profile</a>
        <a href="yourdonation.php">Your donation</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>