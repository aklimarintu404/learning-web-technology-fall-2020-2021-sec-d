// <?php
  
  // session_start();
  // if($_COOKIE['status'] == "OK" || $_COOKIE['status'] == "always ok")
  // {
	 // ?>

<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
</head>
<body>
	
	<table border ='1' border="2" width="60%" >
			 <tr>	
				<td>

                 <a href="homepage.php"><img src="fundraiser.png" alt="Logo"></a>



            </td>
       
            <td colspan='2'align="right">
			
                 <a href = "homepage.php" name="username" > <?php echo $_COOKIE['uname']; ?></a>
            
        </td>
		</tr>
		
		<tr>		
			<td>
			<b>Donator</b>
			<hr>
				<ul>
				<a href="homepage.php"><li>Home Page</li></a>
                    <a href="profile.php"><li>View Profile</li></a>
                    <a href="edit_profile.php"><li>Edit Profile</li></a>
					<a href="check_data.php"><li>Check data</li></a>
					<a href="donor.php"><li>Donor</li></a>
					<a href="idea.php"><li>Comsumer request</li></a>
					<a href="member.php"><li>Membership</li></a>
					<a href="web.php"><li>web content</li></a>
					<a href="help_center.php"><li>Help Center</li></a>
                    <a href="security_system.php"><li>Security System</li></a>
					<a href="Comment.php"><li>Comment</li></a>
                    <a href="logout.php"><li>Logout</li></a>
				</ul>
			</td>
			<td width=80%><h3>"We rise by lifting others"</h3>
			<?php echo $_COOKIE['uname']; ?> </td>
			</tr>			
            
    </table>
	</form>
</body>
</html>
// <?php
	 // }

  // else
  // {
    // header("location:login.php");
  // }

// ?>