<?php
echo = "";

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		
		if($name == ""){
			echo = "";
		}else{
			echo = $name;
		}
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