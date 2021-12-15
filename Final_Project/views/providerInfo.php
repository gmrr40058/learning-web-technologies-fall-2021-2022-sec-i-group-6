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
                <h1>Providers</h1>

               
                  <table border="1" align="center">
                            <tr>
                               <th>Id</th>
                               <th>First Name</th>
                               <th>Last Name</th>
                               <th>Provide</th>
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

<?php 
    require_once('header.php');
?>
  
  <div>
            <div style="background-color: cyan; text-align:center; width: 400px;height: 200px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Account</h1>
                <hr>
                <a href="home.php">Dashboard</a><br/>
                <a href="viewP.php">View Profile</a><br/>
                <a href="editP.php">Edit Profile</a><br/>
                <a href="logout.php">logout </a>
            </div>
            <div style="background-color: cyan; text-align:center; width: 700px;height: 300px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Provider</h1>
                <?php

                    $collectors = array (
                      array("MD. PRITOM RAHMAN","DHAKA","01723675401","muzahidcfund.php","muzahidcfund@gmail.com"),
                      array("MD. Mohsen KABIR","CHOTTOGRAM","01729075401","hasananikcfund.php","hasananikcfund@gmail.com"),
                      array("MD. REZUL HAQUE","KHULNA","01723675402","rhaquecfund.php","rhaquecfund@gmail.com"),
                      array("G.M TAMIM HOSSEN","RANGPUR","01723675403","kzamancfund.php","kzamancfund@gmail.com"),
                      array("MD. SABBIR RAHMAN","BARISAL","01723675404","rahmanmcfund.php","rahmanmcfund@gmail.com"),
                    );
                    echo '<table border="1" align="center">
                            <tr>
                               <th>Name</th>
                               <th>Area</th>
                               <th>Phone</th>
                               <th>Email</th>
                            </tr>';
                    for ($row = 0; $row < 5; $row++) {
                      echo '<tr>';
                      echo "<td>" . $collectors[$row][0] . "</td>";
                      
                      for ($col = 1; $col < 3; $col++) {
                        echo '<td>' . $collectors[$row][$col] . '</td>';
                      } 
                      echo '<td><a href="' . $collectors[$row][3] . '">' . $collectors[$row][4] . '</a></td>';
                      echo "</tr>";
                    }
                    echo '</table>'
                    ?>
            </div>
            
        </div>


