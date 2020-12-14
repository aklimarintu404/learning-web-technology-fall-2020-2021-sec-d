<?php

	

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	if(!$conn){
		echo "error";
	}else{
		echo"connected";
	}
	$sql = "select * from profile";
	$result = mysqli_query($conn, $sql);
	
	//print_r($result);
	//echo "connect";
	// $data = mysqli_fetch_assoc($result);
	 // $data2 = mysqli_fetch_assoc($result);

	 // print_r($data);
	 // print_r($data2);

	echo "<table border=1>
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>Email</td>
				
				<td>TYPE</td>
			</tr>";
	 while($data = mysqli_fetch_assoc($result)){
		print_r($data); 
		 echo"<br>";
	 }
		echo "<tr>
				<td>".$data['id']."</td>
				<td>".$data['name']."</td>
				<td>".$data['email']."</td>
				
				<td>".$data['type']."</td>
			</tr>";
	}
	 echo "</table>";
	 mysqli_close($conn);
?>
