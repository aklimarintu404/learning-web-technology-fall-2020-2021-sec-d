<?php
if(isset($_REQUEST['submit'])){
	
	
	if ($_REQUEST['gender']==" ")
	
		echo "Error";
	elseif ($_REQUEST['gender']=="male")
	
		echo "Male";
	elseif ($_REQUEST['gender']=="female")
	
		echo "Female";
	else
	
		echo "Other";
}
?>



<html>
<head>
	<title>GENDER</title>
</head>
<body>
	<tr>
<form method= "post" action="gender.php">
		<th align="left"><h4>3.</h4></th>
		<fieldset style="width:200px">
		<legend>Gender</legend>
		<input type="radio" name="gender"  > Male 
		<input type="radio" name="gender"  > Female
		<input type="radio" name="gender"  > Other <br>
            
        </fieldset>
        <br>
		<input type="submit" value="submit">
</form> 
	</tr>
</body>
</html>
