<!DOCTYPE html>
<html>
<head>
	<title>Sample of Form</title>
</head>
<body>
	<form method="GET" action="#">
		<label>First Number</label><input type="text" name="fNumber">
		<label>Second Number</label><input type="text" name="sNumber">
		<input type="submit" name="register" value="ADD">
	</form>
</body>
</html>
<?php
	$firstNum = $_GET['fNumber'];
	$secondNum = $_GET['sNumber'];
	$add = $firstNum + $secondNum;
	echo $add;
?>