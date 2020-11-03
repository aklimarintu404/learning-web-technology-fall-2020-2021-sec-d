<?php
if(isset($_REQUEST['submit'])){
	echo $_POST['dd'];
	echo "/";
	echo $_POST['mm'];
	echo "/";
	echo $_POST['yyyy'];
}
?>




<html>
<head>
	<title>DATE_OF_BIRTH</title>
</head>
<body>
	<tr>
<form method= "post" action="Date Of Birth.php">
		<th align="left"><h4>4.</h4></th>

		<fieldset style="width:200px">
		<legend><b>Date of Birth</b></legend>
		<pre>  dd      mm     yyyy</pre>
		<input type="tel" name="dob" size="1"><b> /</b>
		<input type="tel" name="dob" size="1"><b> /</b>
		<input type="tel" name="dob" size="1">
		<hr>
                <input type="submit" value="Submit">
        </fieldset>
</form> 
	</tr>
</body>
</html>
