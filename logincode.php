<?php
	require('include/dbconnect.php'); 
	include 'include/function.php';

?>


<?php

	if (isset($_POST['login'])) {
		$username = escape_string($_POST['username']); 
		$password = escape_string($_POST['password']);

		$query = query("SELECT * FROM user WHERE username='$username' AND password='$password'");
		confirm($query);
		$row = fetch_array($query);

		if (mysqli_num_rows($query) > 0) {
			session_start();
			session_regenerate_id();
			$_SESSION['id'] = $row['id'];
			header("location: redail.php");
			session_write_close();
			exit();

		}
		else {
				header("location: admin_login.php?log=invalidLogin");	
				session_write_close();
				exit();
			}
		
	}

?>