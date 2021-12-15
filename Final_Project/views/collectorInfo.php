<?php 
    require_once('header.php');
    require_once('../model/userModel.php');
    $result = getAllDonars();
?>
  <html>
    <body>
        <div>
            <div style="background-color: cyan; text-align:center; width: 100%;height: 20%; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Account</h1>
                <hr>
                <a href="home.php">Dashboard</a><br/>
                <a href="../controller/logout.php">logout </a>
            </div>
            <div style="background-color: cyan; text-align:center; width: 100%;height: 80%; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Collectors</h1>

               
                  <table border="1" align="center">
                            <tr>
                               <th>Id</th>
                               <th>First Name</th>
                               <th>Last Name</th>
                               <th>Collections</th>
                               <th>Phone</th>
                               <th>Email</th>
                            </tr>
                    <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                      <tr align="center">
                               <td><?=$data['id']?></td>
                               <td><?=$data['fname']?></td>
                               <td><?=$data['lname']?></td>
                               <td><?=$data['donation']?></td>
                               <td><?=$data['phonenumber']?></td>
                               <td><?=$data['email']?></td>
                            </tr>
                    <?php } ?>
                  </table>
            </div>
            
        </div>

    </body>
  </html>

