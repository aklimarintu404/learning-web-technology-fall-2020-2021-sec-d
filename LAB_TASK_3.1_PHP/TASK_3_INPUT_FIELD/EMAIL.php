<?php
echo = "";
if(isset($_REQUEST['submit'])){
	$name = $_REQUEST['Email'];
		
	if($name == ""){
	echo = "";
	}else{
	echo = $name;
	}
	}
?>





<html>
<head>
	<title>EMAIL</title>
</head>
<body>
	<tr>
<form method= "post" action="email.php">
		<th align="left"><h4>2.</h4></th>
		<th>Email</th><br>
		<input type="email" name="email"  > 
		<button title="hint:Sample@example.com" style="color: blue; front-size : 10px;"><b>i</b></button><br><br>
		<input type="submit" value="submit">
</form> 
	</tr>
</body>
</html>
