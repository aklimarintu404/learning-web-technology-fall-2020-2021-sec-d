<?php
echo = "";
if(isset($_POST['submit'])){
    echo = $_REQUEST['bloodGroup'];
}
else{
    echo= "";
}
?>



<html>
<head>
	<title>BLOOD_GROUP</title>
</head>
<body>
	<tr>
<form method= "post" action="bloodGroup.php">
		<th align="left"><h4>6.</h4></th>
		<fieldset style="width:150px">
            
		Blood Group
		<select name="bloodGroup" >
			<option value="">A+</option>
			<option value="">A-</option>
			<option value="">B+</option>
			<option value="">B-</option>
			<option value="">AB+</option>
			<option value="">AB-</option>
			<option value="">O+</option>
			<option value="">O-</option>
			</select>
			<hr>
   
        </fieldset>
        <br>
		<input type="submit" value="submit">
</form> 
	</tr>
</body>
</html>