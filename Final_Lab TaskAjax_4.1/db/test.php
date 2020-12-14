<?php

	

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	// if(!$conn){
		// echo "error";
	// }else{
		// echo"connected";
	// }
	$sql = "select * from profile";
	$result = mysqli_query($conn, $sql);
	
	//print_r($result);
	//echo "connect";
	// $data = mysqli_fetch_assoc($result);
	 //$data2 = mysqli_fetch_assoc($result);

	 //print_r($data);
	 //print_r($data2);

	// echo "<table border=1>
			// <tr>
				// <td>ID</td>
				// <td>USERNAME</td>
				// <td>PASSWORD</td>
				
				// <td>TYPE</td>
			// </tr>";
	 // while($data = mysqli_fetch_assoc($result)){
		// print_r($data); 
		 //echo"<br>";
	 //}
		// echo "<tr>
				// <td>".$data['id']."</td>
				// <td>".$data['username']."</td>
				// <td>".$data['password']."</td>
				
				// <td>".$data['type']."</td>
			// </tr>";
	// }
	 // echo "</table>";
	 // mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Info</title>
</head>
<body>

	<h1>User Info</h1>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Password</td>
			
			<td>Type</td>
		</tr>

<?php 
	while($data = mysqli_fetch_assoc($result)){
?>
		<tr>
			<td><?= $data['id'] ?></td>
			<td><?= $data['username'] ?></td>
			<td><?= $data['password'] ?></td>
			
			<td><?= $data['type'] ?></td>
		</tr>

<?php } ?>

	</table>
</body>
</html>
