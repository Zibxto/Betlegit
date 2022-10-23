<?php 
include 'include/dbconnect.php'; 
include 'include/function.php';  ?>


<?php 

	if (isset($_POST["submit"])) {
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];

		$sql = query("INSERT INTO user (firstname, lastname, username, password, phone, email) VALUES ('$firstname', '$lastname', '$username', '$password','$phone', '$email')");
		confirm($sql);

		header("location: register.php?success");
		
	}



 ?>