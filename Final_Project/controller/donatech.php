<?php 
    require_once('../views/header.php');
	require_once('../model/userModel.php');
?>
      <div>
            <div style="background-color: cyan; text-align:center; width: 400px;height: 200px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Account</h1>
                <hr>
                <a href="../views/home.php">Dashboard</a><br/>
                <a href="logout.php">logout </a>
            </div>
            <div style="background-color: cyan; text-align:center; width: 400px;height: 600px; margin: 2px auto; padding: 20px; border: 1px solid black; border-radius:5PX ;">
                <h1>Donation of <?php echo $_COOKIE['username']; ?></h1>
                <hr>
               <?php 
					if(isset($_POST['sbt'])){

						$id = $_REQUEST['id'];
						$data = getUserById($id);
						$fname   	= $data['firstname'];
						$lname    	= $data['lastname'];
						$phone 	    = $data['phonenumber'];
						$email 		= $data['email'];
						$type       = $data['type'];
						$donate     = $_POST['donate'];
						$book       = 0;
						$donation   = 0;
						$donationNo = 1;
						$totalDonation = 0;

						$result = getAllDonars();
						while ($data = mysqli_fetch_assoc($result)) {
							if ($email == $data['email']) {
								$book = 1;
								break;
							}
						}

						
						if($id != ""){
							if($donate != ""){
								$user = ['email' => $email, 'donation'=>$donate];
								$status = donations($user);
								if ($status) {
									echo "<table border='1' align='center'>
											<tr>
												<th>Donation No</th>
												<th>Donation</th>
												<th>Total Donation No</th>
											</tr>";
											
									$result = getAlldonations();
				
									while ($data = mysqli_fetch_assoc($result)) {
										if ($email == $data['email']) {
											echo "<tr align='center'> <td>" . $donationNo . "</td>";
											$donationNo++;
											$donation = $data['donation'];
											echo '<td>' . $donation . '</td>';
											$totalDonation = $totalDonation+$donation;
											echo '<td>' . $totalDonation . '</td> </tr>';
										}
									}
									echo '</table>';
								}else{
									echo 'gello';
								}
								if ($book == 0) {
									$user = ['fname' => $fname, 'lname' => $lname, 'donation'=>$totalDonation, 'phone' => $phone, 'email' => $email];
									$status = donars($user);
								}else {
									$user = ['donation'=>$totalDonation, 'email'=>$email,];
									$status = donationup($user);
								}

							}else{
								echo "invalid Donation....";
							}
						}else{
							echo "invalid confirm Username....";
						}
							
					}
?>           
        </div>
    </div>


