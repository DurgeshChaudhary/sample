<?php
	require_once "config.php";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$firstName = $_POST['fName'];
		$lastName = $_POST['lName'];
		$country = $_POST['country'];
		$msg = $_POST['msg'];

		$sql = "INSERT INTO tbl_feedback(first_name, last_name, country, msg) VALUES(?, ?, ?, ?)";
		if($stmt = mysqli_prepare($link, $sql))
		{
			mysqli_stmt_bind_param($stmt,"sss", $param_fname, $param_lname, $param_country, $param_msg);
			// Set Parameter
			$param_fname = $firstName;
			$param_lname = $lastName;
			$param_country = $country;
			$param_msg = $msg;
			if(mysqli_stmt_execute($stmt))
			{
				header("location:database.php");
				exit();
			}
		
			else
				{
					echo "Error Occured !";
				}
				mysqli_stmt_close($stmt);
		}
		mysqli_close($link);
	}
?>