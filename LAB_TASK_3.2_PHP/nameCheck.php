
<?php
if(isset($_GET['msg'])){
	echo "invalid request";
}

?>


<html>
<head>
	<title>NAME</title>
</head>
<body>
	<tr>
<form method= "post" action="name.php">
		<th align="left"><h4>1.</h4></th>
		<fieldset style="width:180px;">
		
		<th>Name</th><br>
		<input type="text" name="name"  > <br><br>
		<input type="submit" value="submit">
		</fieldset>
</form> 
	</tr>
</body>
</html>
