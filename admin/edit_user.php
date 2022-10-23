<?php
  
    include '../include/dbconnect.php'; 
      include '../include/session.php';
    include '../include/function.php';

?>
 <?php include 'header.php';  ?>

 <?php

$user = $_GET['id'];

 		$qs = query("SELECT * FROM user WHERE id='$user'");
 		confirm($qs);
 		$qs_row = fetch_array($qs);

  ?>


 			<div class="card" style="background-color:#f2f2f2;">



 				<form style="margin: 5%;" method="POST" action="">
 					First Name: <input type="" value="<?php echo $qs_row['firstname']; ?>" name="firstname"> <br><br>
 					Last Name: <input type="" value="<?php echo $qs_row['lastname']; ?>" name="lastname"> <br><br>
 					Username: <input type="" value="<?php echo $qs_row['username']; ?>" name="username"> <br><br>
 					Password: <input type="" value="<?php echo $qs_row['password']; ?>" name="password"> <br><br>
 					Phone Number: <input type="number" value="<?php echo $qs_row['phone']; ?>" name="phone"> <br><br>
 					Email: <input type="email" value="<?php echo $qs_row['email']; ?>" name="email"><br><br>
 					Package: <input type="text" value="<?php echo $qs_row['package']; ?>" name="package"><br><br>

 					<input style="color: red; background-color: gold; padding: 15px; border-radius: 5px;" type="submit" name="edit" value="EDIT">			
 				</form>
			 </div>

			 <?php
			 	if (isset($_POST['edit'])) {
			 		$firstname = $_POST['firstname'];
			 		$lastname = $_POST['lastname'];
			 		$username = $_POST['username'];
			 		$password = $_POST['password'];
			 		$phone = $_POST['phone'];
			 		$email = $_POST['email'];
			 		$package = $_POST['package'];

			 	

			 	$qe = query("UPDATE user SET firstname='$firstname', lastname='$lastname', username='$username', password='$password', phone='$phone', email='$email', package='$package' WHERE id='$user'");
			 	confirm($qe);
			 		header("location: index.php");

			 	
			 		
			 	}

			  ?>










  <?php include 'footer.php';  ?>