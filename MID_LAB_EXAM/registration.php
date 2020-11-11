
<?php
	
	session_start();
    if(isset($_REQUEST['submit'])){
        if(!empty($_REQUEST['name']) || !empty($_REQUEST['password']) || !empty($_REQUEST['cpass']) ||  !empty($_REQUEST['id']) ||  !empty($_REQUEST['user']))
		{
            
            $info = $_REQUEST['name']."|".$_REQUEST['password']. "|".$_REQUEST['cpass'] ."|".$_REQUEST['id'] ."|".$_REQUEST['user']."\n";
            $home = fopen("registration", "w");
            fwrite($home, $info);
            fclose($home);
            echo "Registration done!";
            
        }
        
        else{
            echo "Error!";
            
        }
    }
?>

<html>
<head>
    <title>HOME</title>
</head>
<body>
 <form method= "post" action="" >
			 <fieldset >
			 <legend><b>REGISTRATION</b></legend>
			 <pre>ID                : <input type="id" name="id"></pre>
			 <pre>Password          : <input type="text" name="password"></pre>
			 <pre>Confirm Password  : <input type="text" name="password"></pre>
			 <pre>Name              : <input type="name" name="name"></pre>
			 User Type<hr>
			 User<input type="radio" name="user" value="user"> admin <input type="radio" name="admin" value="admin"> <hr>
			 <input type="submit" name="sign up" value="sign up">
			 <a href="login.html">Sign In</a>
			 </fieldset >
			 </form>
			 </body>
			 </html>
			 
			 