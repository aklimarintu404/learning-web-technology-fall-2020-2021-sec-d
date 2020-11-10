<?php
session_start();
$name = $_COOKIE['name'];
$email = $_COOKIE['email'];
$gender = $_COOKIE['gender'];
$date = $_COOKIE['date'];
                    

?>
        

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
			 <legend><b>PROFILE</b></legend>
			 <pre>Name   : Bob</pre><hr>
			 <pre>Email  : bob@aiub.edu</pre><hr>
			 <pre>Gender : Male</pre><hr>
			 <pre>Date of Birth : 19/09/1998</pre><hr>
			  <td>
                  <img src="profile.png" alt="User" height="150px" width="150px"><br>
                   <a href="profilepicture.php">Change</a>
                            
               </td>
			 <a href="edit profile.html">Edit Profile</a>
			 
			 </fieldset >
            </tr>
            <tr>
                <td align="center" colspan="4">Copyright &#169; 2017</td>
            </tr>
        </table>
    </form>
</body>
</html>