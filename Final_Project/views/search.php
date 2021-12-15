<?php 

	$term = $_REQUEST['name'];
	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from donars where fname like '%{$term}%'";
	$result = mysqli_query($con, $sql);

	//echo $sql;

	if($result != null){
		$data = "<table border=1 align='center'>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Donation</th>
			<th>Phone Number</th>
			<th>Email</th>
		</tr>";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
						<td>{$row['id']}</td>
						<td>{$row['fname']}</td>
						<td>{$row['lname']}</td>
						<td>{$row['donation']}</td>
						<td>{$row['phonenumber']}</td>
						<td>{$row['email']}</td>
					 <tr/>";
		}

		$data .= "</table>";
		echo $data;
	}else{
		echo $sql;
	}

?>