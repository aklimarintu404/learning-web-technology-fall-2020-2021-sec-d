<?php
	 session_start();
 if(isset($_POST['submit']))
 {
	 $name = $_POST['name'];
	  $uname = $_POST['userName'];
	  if(empty($name)||empty($uname)||empty($email)||empty($password))
		  {
            echo "null submission";
        }
		
	 $password = $_POST['password'];
	 $conpassword = $_POST['confirmPassword'];
	  elseif($password != $conpassword)
        {
          echo "Warrning: Password and Confirm Password are not matched!";
          echo "Please, do registration again!";
        }
		 else {

          if($_POST['gender']=='Male')
          {
            $gender = 'Male';
               
          }
          elseif($_POST['gender']=='Female')
          {
            $gender = 'Female';
          }

          elseif($_POST['gender']=='Other'){
            $gender = 'Other';
          }
          
          $user = [
		  'name'=>$name,
                'uname'=>$uname,
                'email'=>$email,
                'password'=>$password,
                'conpassword'=>$conpassword,
                'date'=>$date,
                'month'=>$month,
                'year'=>$year,
                'gender'=>$gender
              ];
    
          setcookie('name', $name, time()+3600, '/');
          setcookie('uname', $uname, time()+3600, '/');
          setcookie('email', $email, time()+3600, '/');
          setcookie('password', $password, time()+3600, '/');
          setcookie('date', $date, time()+3600, '/');
          setcookie('month', $month, time()+3600, '/');
          setcookie('year', $year, time()+3600, '/');
          setcookie('gender', $gender, time()+3600, '/');
    
          header('location:login.php');
        }
 ?>
<html>
<head>
    <title>X Company</title>
</head>
<body>
    <form>
        <table border ="1" width="100%" colspan="2" >
            <tr>
                <td width="100px" height="100px" ><img width="100px" height="100px" src="company.jpg"></td>
		<td colspan="2" align="right">
                <a href="public_home.html">Home</a> |
                <a href="login.html">Login</a> |
                <a href="registration.html">Registration</a></td>
            </tr>
			<tr height="400px" >
			 <td colspan="2"
		<td>
		<form method= "post" action="" >
		
		<fieldset >
            
		<legend><b>REGISTRATION</b></legend>
		<pre>Name            : <input type="text" name="name"></pre><hr>
        <pre>Email           : <input type="email" name="email">
        <button title="hint:Sample@example.com"><b>i</b></button></pre><hr>
		<pre>User Name       : <input type="text" name="user name"></pre><hr>
		<pre>Confirm Password: <input type="text" name="confirm password"><hr></pre>
		<fieldset style="width:200px">
		
		<legend><b>Gender</b></legend>
		<input type="radio" name="gender"  > Male 
		<input type="radio" name="gender"  > Female
		<input type="radio" name="gender"  > Other <br>
        </fieldset><hr>
		
		<fieldset style="width:200px">
		<legend><b>Date of Birth</b></legend>
		<input type="tel" size="1"> <b> /</b> <input type="tel" size="1"> <b> /</b> <input type="tel" size="2"> (dd/mm/yyyy)
        </fieldset><hr>
		
		<input type="submit" value="Submit">
		<input type="reset" name="" value="Reset"> 
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