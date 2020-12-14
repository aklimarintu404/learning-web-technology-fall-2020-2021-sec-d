<?php
 
 session_start();
 if(isset($_POST['submit']))
	{

 
        $name = $_POST['name'];
        $uname = $_POST['userName'];
        $email = $_POST['email'];
		$number = $_POST['number'];
        $password = $_POST['password'];
        $conpassword = $_POST['confirmPassword'];
		$date =$_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];
		$user = $_POST['user'];
        
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name))
		{
			echo "<span style= 'color: red;'>Only letters and white space allowed. </span>";
		}
		
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			echo "<span style= 'color: red;'>Invalid email format. </span>";
		}
		
		if(strlen($password)<=6)
		{
			echo "<span style= 'color: red;'>password should be more than 6 characters. </span>";
		}
		
		
		if($user != "Donator")
		 {
			 echo "<span style= 'color: red;'>wrong user selected. </span>";
		 }
		
		
        if(empty($name)||empty($uname)||empty($email)||empty($number)||empty($password)||empty($conpassword)||!isset($_POST['gender'])||!isset($_POST['user'])||empty($date)||empty($month)||empty($year))
        {
			
            echo "<span style= 'color: red;'>null submission. </span>";
			
        }
         else if(empty($conpassword)||!isset($_POST['gender'])||!isset($_POST['user'])||empty($date)||empty($month)||empty($year))
        {
           echo "<span style= 'color: red;'>null submission. </span>";

         }
  
         elseif($password != $conpassword)
         {
           echo "<span style= 'color: red;'>Warrning: Password and Confirm Password are not matched! </span>";
           echo "<span style= 'color: red;'>Please, do registration again! </span>";
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

			elseif($_POST['gender']=='Other')
			{
				$gender = 'Other';
			}
        
          
          $user = [
                
                'name'=>$name,
                'uname'=>$uname,
                'email'=>$email,
				'number'=>$number,
                'password'=>$password,
                'conpassword'=>$conpassword,
				'date'=>$date,
                'month'=>$month,
                'year'=>$year,
                'gender'=>$gender,
				'user' =>$user,
              ];
    
          setcookie('name', $name, time()+36000, '/');
          setcookie('uname', $uname, time()+36000, '/');
          setcookie('email', $email, time()+36000, '/');
		  setcookie('number', $number, time()+36000, '/');
          setcookie('password', $password, time()+36000, '/');
		  setcookie('date', $date, time()+36000, '/');
          setcookie('month', $month, time()+36000, '/');
          setcookie('year', $year, time()+3600000, '/');
          setcookie('gender', $gender, time()+36000, '/');
		  setcookie('user', $user, time()+36000, '/');
		  
         
          header('location:login.php');
        }
		
	   }
			
	//}
			else{
				header("location: login.php");
				}
	
?>
