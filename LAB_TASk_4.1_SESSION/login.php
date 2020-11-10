<?php
if(isset($_REQUEST['submit'])){
    
    if($_REQUEST['uname']==$_COOKIE['username'] and $_REQUEST['password']==$_COOKIE['password']){
        
        if(isset($_REQUEST['remember_me'])){
            setcookie('runame', $_REQUEST['uname'], time()+3600);
            setcookie('rpassword', $_REQUEST['password'], time()+3600);
        }
        
        session_start();
        $_SESSION['uname'] = $_REQUEST['uname'];
        $_SESSION['password'] = $_REQUEST['password'];
        header('location: dashboard.php');
        
    }
    
    else{
        echo "Invalid !";
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
                <td width="100px" ><img width="100px" height="100px" src="company.jpg"></td>
		<td colspan="2" align="right">
                <a href="public_home.html">Home</a> |
                <a href="login.html">Login</a> |
                <a href="registration.html">Registration</a></td>
            </tr>
			
            <tr height="400px" >
			 <td  colspan="2" 
			 <td   
			 <form method= "post" action="" >
			 <fieldset >
			 <legend><b>LOGIN</b></legend>
			 <pre>User Name : <input type="text" name="name"></pre>
			 <pre>Password  : <input type="text" name="password"><hr></pre>
			 <input type="checkbox" name="remember me"> Remember Me<br>
			 <input type="submit" value="Submit">
			 <a href="Forget Password.html">Forget Password?</a> 
				
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