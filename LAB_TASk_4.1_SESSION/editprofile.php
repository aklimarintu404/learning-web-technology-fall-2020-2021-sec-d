

<?php

session_start();
if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['name']) and !empty($_REQUEST['email']) and !empty($_REQUEST['gender']) and !empty($_REQUEST['date'])){
        
        setcookie('name', $_REQUEST['name'], time()+3600, '/');
        setcookie('email', $_REQUEST['email'], time()+3600, '/');
        setcookie('gender', $_REQUEST['gender'], time()+3600, '/');
        setcookie('date', $_REQUEST['date'], time()+3600, '/');   
    }
    else{
        
        echo "Please fill all info";
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
			 <legend><b>EDIT PROFILE</b></legend>
			 <pre>Name            : <input type="text" name="name"></pre><hr>
			 <pre>Email           : <input type="email" name="email"><hr>
			 <pre>Gender          : <input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female"> Female <input type="radio" name="gender" value="Other"> Other<hr>
             <pre>Date of Birth   : <input type="tel" size="1"> <b> /</b> <input type="tel" size="1"> <b> /</b> <input type="tel" size="2"> (dd/mm/yyyy)<br>
			  <input type="submit" value="Submit">
			  
			  </fieldset >
		</td
		</td>	
			</tr>
            <tr>
                <td align="center" colspan="4">Copyright &#169; 2017</td>
            </tr>
        </table>
    </form>
</body>
</html>
			 