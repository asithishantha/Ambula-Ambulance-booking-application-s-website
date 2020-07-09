<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Contact</title>
		<meta name="author" content="PC VISION" />
		<!-- Date: 2019-01-04 -->
	</head>
	<body>

<?php

	include "dbcon 3.php";

	echo 
	$name = $_POST["name"];
	$email = $_POST["email"];	
	$message = $_POST["message"];

	$sql = "INSERT INTO requestedhospitals(name, email, message) VALUES ('$name', '$email', '$message')";
	
	$result = mysqli_query($con, $sql);
	

?>

	</body>
</html>

