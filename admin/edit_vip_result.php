<?php
  
    include '../include/dbconnect.php';
      include '../include/session.php';
    include '../include/function.php';

?>

 <?php include 'header.php';  ?>

<?php

 $vip = $_GET['id'];

 		$qs = query("SELECT * FROM vip_review WHERE vip_id='$vip'");
 		confirm($qs);
 		$qs_row = fetch_array($qs);

  ?>


 			<div class="card" style="background-color:#f2f2f2;">
 				<form style="margin: 5%;" method="POST" action="">
 					Date: <input type="" name="reg_time" value="<?php echo $qs_row['reg_time']; ?>"> <br><br>
 					Roll Over: <select name="roll">
 								<option>--select status--</option>
 								<option value="1">Successful</option>
 								<option value="2">Unsuccessful</option>
 								</select> <br><br>
 					Diamond: <select name="diamond">
 								<option>--select status--</option>
 								<option value="1">Successful</option>
 								<option value="2">Unsuccessful</option>
 							</select> <br><br>
 					Silver: <select name="silver">
 								<option>--select status--</option>
 								<option value="1">Successful</option>
 								<option value="2">Unsuccessful</option>
 							</select> <br><br>
 					Gold: <select name="gold">
 								<option>--select status--</option>
 								<option value="1">Successful</option>
 								<option value="2">Unsuccessful</option>
 						
 							</select> <br><br>
 					  
 					<input style="color: red; background-color: gold; padding: 15px; border-radius: 5px;" type="submit" name="edit" value="EDIT">			
 				</form>

 	<?php
			 	if (isset($_POST['edit'])) {
			 		$reg_time = $_POST['reg_time'];
			 		$roll = $_POST['roll'];
			 		$diamond = $_POST['diamond'];
			 		$silver = $_POST['silver'];
			 		$gold = $_POST['gold'];
			 		

			 	$qe = query("UPDATE vip_review SET reg_time='$reg_time', roll='$roll', diamond='$diamond', silver='$silver', gold='$gold' WHERE vip_id='$vip'");
			 	confirm($qe);

			 	if ($qe) {
			 		header("location: vip_result.php");
			 	}
			 		
			 	}

			  ?>
				
			 </div> 







  <?php include 'footer.php';  ?>