<?php
	if(!isset($_COOKIE['flag'])){
		header('location: login.php?msg=login_first');
	}

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from profile";
	$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page, <?php echo $_COOKIE['flag'];?></title>
</head>
<body>
	<h1>Welcome Home! </h1>
	<a href="profile.php">Profile</a> |
	<a href="logout.php">logout</a>

	<h3>User list</h3>

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
					<td><?= $data['name'] ?></td>
					<td><?= $data['email'] ?></td>
					
					<td><?= $data['usertype'] ?></td>
				</tr>

		<?php } ?>

	</table>

</body>
</html>