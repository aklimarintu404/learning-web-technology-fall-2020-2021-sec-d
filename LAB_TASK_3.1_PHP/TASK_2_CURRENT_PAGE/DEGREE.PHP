<?php
if(isset($_REQUEST['submit'])){
	if (!empty($_POST["dept"]))
	{
		foreach ($_POST["dept"] as $key => $value) {
		echo $value."<br>";
		}
	}
}
?>




<html>
<head>
	<title>DEGREE</title>
</head>
<body>
	<tr>
<form method= "post" action="degree.php">
		<th align="left"><h4>5.</h4></th>
		<fieldset style="width:200px">
            
		<legend>Degree</legend>
		<input type="checkbox" name="SSC"> SSC
		<input type="checkbox" name="HSC"> HSC
		<input type="checkbox" name="BSC"> BSC
   
        	</fieldset>
        <br>
		<input type="submit" value="submit">
</form> 
	</tr>
</body>
</html>
