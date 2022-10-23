<?php
  
    include '../include/dbconnect.php';
      include '../include/session.php';
    include '../include/function.php';

?>

 <?php include 'header.php';  ?>


 <?php

 $tb = $_GET['id'];

 		$qs = query("SELECT * FROM tomorrow_bet WHERE tb_id='$tb'");
 		confirm($qs);
 		$qs_row = fetch_array($qs);

  ?>


 			<div class="card" style="background-color:#f2f2f2;">
 				<form style="margin: 5%;" method="POST" action="">
 					Time: <input type="" name="tb_date" value="<?php echo $qs_row['tb_date']; ?>"> <br><br>
 					Date: <td>
                                        <?php 
                                        $d = date("d");
                                        $t = date("d", strtotime("+1 days"));
                                        ?>
                                        <select name="date_bet">
                                            <option value="<?php echo $d; ?>">Today</option>
                                            <option value="<?php echo $t; ?>">Tomorrow</option>
                                        </select>
                                    </td> <br><br>
 					Country: <input type="" name="country" value="<?php echo $qs_row['country']; ?>"> <br><br>
 					Featured Matches: <input type="" name="team" value="<?php echo $qs_row['team']; ?>"> <br><br>
 					Tips: <input type="" name="tip" value="<?php echo $qs_row['tip']; ?>"> <br><br>
 					Result: <input type="" name="result" value="<?php echo $qs_row['result']; ?>"> <br><br>
 					Status: <select name="status">
 								<option>--select status--</option>
 								<option value="1">Successful</option>
 								<option value="2">Unsuccessful</option>
 						
 							</select> 	<br><br>
 					<input style="color: red; background-color: gold; padding: 15px; border-radius: 5px;" type="submit" name="edit" value="EDIT">			
 				</form>

 	<?php
			 	if (isset($_POST['edit'])) {
			 		$tb_date = $_POST['tb_date'];
			 		$date_bet = $_POST['date_bet'];
			 		$country = $_POST['country'];
			 		$team = $_POST['team'];
			 		$tip = $_POST['tip'];
			 		$result = $_POST['result'];
			 		$status = $_POST['status'];


			 	

			 	$qe = query("UPDATE tomorrow_bet SET tb_date='$tb_date', date_bet='$date_bet', country='$country', team='$team', tip='$tip', result='$result', status='$status' WHERE tb_id='$tb'");
			 	confirm($qe);

			 	if ($qe) {
			 		header("location: tomorrow_bet.php");
			 	}
			 		
			 	}

			  ?>
				
				
			 </div> 







  <?php include 'footer.php';  ?>