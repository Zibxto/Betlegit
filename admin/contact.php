<?php
  
    include '../include/dbconnect.php';
      include '../include/session.php';
    include '../include/function.php';

?>
 <?php include 'header.php';  ?>


<div class="card">
					<div class="table-responsive">
								
			                <table class="table table-hover table-borderless table-striped">

			                	<?php 
			                	$s = 1;
			                		$qsi = query("SELECT * FROM site_info WHERE site_id='$s'");
			                		confirm($qsi);
			                		$qrow = fetch_array($qsi);
			                	?>

			                	<form method="POST" action="">
			                    <!-- BET FOR THE DAY -->
			                    <thead class="card-head">
			                      <tr>
			                        <th scope="col">Subscription/general enquiry</th>
			                      </tr>
			                    </thead>
			                    <tbody class="card-body">
			                      <tr>
			                        <td><label>Sponsorship Email</label><input style="padding-left: 6px;" value="<?php echo $qrow['email']; ?>" name="email"> <br> 
			                        <label>Phone Number</label><input style="padding-left: 6px;" value="<?php echo $qrow['phone']; ?>" name="phone"></td>
			                        <td><label>Advert Email</label><input style="padding-left: 6px;" value="<?php echo $qrow['a_email']; ?>" name="a_email"> </td>
			                      </tr>
			                      <tr>
			                      		<td><input type="submit" name="edit" value="PUBLISH" class="bttn-small btn-fill w-20"></td>
			                      </tr>
			                    </tbody>
			                    			
			                    </form>
			                </table>
			                				
			            </div>
			           </div> 

			            <?php
			 	if (isset($_POST['edit'])) {
			 		$phone = $_POST['phone'];
			 		$email = $_POST['email'];
			 		$a_email = $_POST['a_email'];
			 		$s_id = 1;
			 		
			 	$qc = query("UPDATE site_info SET phone='$phone',email='$email',a_email='$a_email' WHERE site_id='$s_id'");

			 	confirm($qc);
			 	if ($qc) {
			 		header("location: index.php");

			 	}
			 		
			 	}

			  ?>


 <?php include 'footer.php';  ?>