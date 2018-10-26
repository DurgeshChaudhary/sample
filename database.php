<!DOCTYPE html>
<html>
<head>
	<title>Sample of Database Connection</title>
</head>
<body>
	<form method="POST" action="create.php">
		<label>Feedback Form</label><br>
		<label>First Name</label><input type="text" name="fName" placeholder="Your name..."><br>
		<label>Last Name</label><input type="text" name="lName" placeholder="Your Last Name.."><br>
		<label >Country</label>
		<select name="country">
			<option>Nepal</option>
			<option>India</option>
			<option>China</option>
		</select><br>
		<label>Subject</label><br>
		<textarea name="msg">Write something...</textarea><br>
		<input type="submit" name="register" value="Submit">
	</form>
</body>
</html>