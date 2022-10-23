 <?php 
include '../include/dbconnect.php';
include '../include/session.php';
include '../include/function.php'; 
?>

 <?php
			 	if (isset($_POST['edit'])) {
			 		$firstname = $_POST['firstname'];
			 		$lastname = $_POST['lastname'];
			 		$username = $_POST['username'];
			 		$password = $_POST['password'];
			 		$phone = $_POST['phone'];
			 		$email = $_POST['email'];
			 		$package = $_POST['package'];
			 	}

			 	$qe = query("UPDATE user SET firstname='$firstname', lastname='$lastname', username='$username', password='$password', phone='$phone', email='$email', package='$package' WHERE id='$user'");
			 	confirm($qe);
			 		header('location: edit_user.php?updated');
			 	

			  ?>