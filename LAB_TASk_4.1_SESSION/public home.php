<?php
	
    
        if(isset($_REQUEST['hbutton']))
        {
            header('location: publicHome.php');
        }
        elseif(isset($_REQUEST['lbutton']))
        {
            header('location: login.html');
        }
        elseif(isset($_REQUEST['rbutton']))
        {
            header('location: Registration.html');
        }
        

?>



<html>
<head>
    <title>X Company</title>
</head>
<body>

    <form action="#" method="POST">
        <table border ="1" width="100%"  >
            <tr>
                <td width="100px" ><img width="100px" height="100px" src="company.jpg"></td>
		<td colspan="2" align="right">
                <a href="public_home.html">Home</a> |
                <a href="login.html">Login</a> |
                <a href="registration.html">Registration</a></td>
            </tr>
            <tr height="400px" >
                <td colspan="4"><h3>Welcome to xCompany</h3></td>
            </tr>
            <tr>
                <td align="center" colspan="4">Copyright &#169; 2017</td>
            </tr>
        </table>
    </form>
</body>
</html>