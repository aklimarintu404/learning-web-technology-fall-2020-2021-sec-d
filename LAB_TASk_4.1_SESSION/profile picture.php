
<?php
session_start();
if(isset($_REQUEST['submit'])){
    if(!empty($_REQUEST['image'])){
        
        echo "Picture updated";   
    }
    else{
        echo "Error!";   
    }   
}
?>

<html>
<head>
    <title>X Company</title>
</head>
<body>
    <form>
        <table border ="1" width="100%"  >
            <tr>
                <td width="100px" width="100px" ><img width="100px" height="100px" src="company.jpg"></td>
		<td colspan="2" align="right">
                Ligged in as <a href="bob.html">Bob</a> |
                <a href="login.html">Logout</a> 
        </td>
            </tr>
            <tr height="400px" >
			<td align="left"width="50px">
			<h3>Account</h3><hr>
			<ul>
			<li><a href="dashboard.html">Dashboard</a></li>
			<li><a href="view profile.html">View Profile</a></li>
			<li><a href="edit profile.html">Edit Profile</a></li>
			<li><a href="change profile picture.html">Change Profile Picture</a></li>
			<li><a href="change password.html">Change Password</a></li>
			<li><a href="logout.html">Logout</a></li></ul>
			</td>
			</td>
			
                <td colspan="2" 
				<td   
			 <form method= "post" action="" >
			 <fieldset >
			 <legend><b>PROFILE PICTURE</b></legend>
			 <img src="profile.png" alt="User" height="150px" width="150px"><br>
              <input type="file" name="image"><hr>
              <input type="submit" name="submit" value="Submit">
			  </fieldset >
		</td>
		</td>	
			</tr>
            <tr>
                <td align="center" colspan="4">Copyright &#169; 2017</td>
            </tr>
        </table>
    </form>
</body>
</html>
			 