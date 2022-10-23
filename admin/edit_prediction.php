<?php
  
    include '../include/dbconnect.php';
      include '../include/session.php';
    include '../include/function.php';

?>

 <?php include 'header.php';  ?>

 <?php

$f_tip = $_GET['id'];

 		$qs = query("SELECT * FROM free_tip WHERE f_tip_id='$f_tip'");
 		confirm($qs);
 		$qs_row = fetch_array($qs);

  ?>


 			<div class="card" style="background-color:#f2f2f2;">
 				<form style="margin: 5%;" method="POST" action="">
 					Date/Time: <input type="text" name="m_date" value="<?php echo $qs_row['m_date']; ?>"> <br><br>
 					Country: <input type="" name="country" value="<?php echo $qs_row['country']; ?>"> <br><br>
 					Teams: <input type="" name="team" value="<?php echo $qs_row['teams']; ?>"> <br><br>
 					Odds: <input type="" name="odd" value="<?php echo $qs_row['odd']; ?>"> <br><br>
 					CS Tips: <input type="" name="cstip" value="<?php echo $qs_row['cs_tip']; ?>"> <br><br>
 					Tips: <input type="" name="tip" value="<?php echo $qs_row['tip']; ?>"> <br><br>
 					Result: <input type="" name="result" value="<?php echo $qs_row['result']; ?>"> <br><br>
 					Status: <select name="status">
 								<option>--select status--</option>
 								<option value="1">Successful tip</option>
 								<option value="2">Unsuccessful tip</option>
 						
 							</select> 	<br><br>
 					<input style="color: red; background-color: gold; padding: 15px; border-radius: 5px;" type="submit" name="edit" value="EDIT">			
 				</form>

 				<?php
			 	if (isset($_POST['edit'])) {
			 		$m_date = $_POST['m_date'];
			 		$country = $_POST['country'];
			 		$team = $_POST['team'];
			 		$odd = $_POST['odd'];
			 		$cstip = $_POST['cstip'];
			 		$tip = $_POST['tip'];
			 		$result = $_POST['result'];
			 		$status = $_POST['status'];


			 	

			 	$qe = query("UPDATE free_tip SET m_date='$m_date', country='$country', teams='$team', odd='$odd', cs_tip='$cstip', tip='$tip', result='$result', status='$status' WHERE f_tip_id='$f_tip'");
			 	confirm($qe);

			 	if ($qe) {
			 		header("location: prediction.php");
			 	}
			 		
			 	}

			  ?>
				
			 </div> 







  <?php include 'footer.php';  ?>