<?php

include '../include/dbconnect.php';
include '../include/session.php';
include '../include/function.php';

?>

<?php include 'header.php';  ?>


		<div class="card">
			<div class="table-responsive">
						
	                <table class="table table-hover table-borderless table-striped">

	                	<form method="POST" action="">
	                    <!-- BET FOR THE DAY -->
	                    <thead class="card-head">
	                      <tr>
	                      	<th scope="col">Date</th>
	                        <th scope="col">Roll Over</th>
	                        <th scope="col">Diamond</th>
	                        <th scope="col">Silver</th>
	                        <th scope="col">Gold</th>
	                      </tr>
	                    </thead>
	                    <tbody class="card-body">
	                      <tr>
	                      	<td><input style="width: 6vw" placeholder="Date" name="reg_time"></td>
                             
	                      	<td>
	                            <select name="roll">
	                            	<option>--select--</option>
	                            	<option value="1">Succesful</option>
	                            	<option value="2">Unsuccesful</option>
	                            </select>
	                        </td>
	                        <td>
	                            <select name="diamond">
	                            	<option>--select--</option>
	                            	<option value="1">Succesful</option>
	                            	<option value="2">Unsuccesful</option>
	                            </select> 
	                        </td>
	                        <td>
	                            <select name="silver">
	                            	<option>--select--</option>
	                            	<option value="1">Succesful</option>
	                            	<option value="2">Unsuccesful</option>
	                            </select>
	                        </td>
	                        <td>
	                            <select name="gold">
	                            	<option>--select--</option>
	                            	<option value="1">Succesful</option>
	                            	<option value="2">Unsuccesful</option>
	                            </select>
	                        </td>
	            
	                      </tr>
	                      <tr>
	                      	<td colspan="4">
	                      		<center><button type="submit" name="submit" class="bttn-small btn-fill w-20">PUBLISH</button></center>
	                      	</td>
	                      </tr>
	                      
	                    </tbody>
	                    </form>
	                </table>

	                


<?php 

if (isset($_POST['submit'])) {
	$admin_id = $session_id;
	$reg_time = $_POST['reg_time'];
    $roll = $_POST['roll'];
    $diamond = $_POST['diamond'];
    $silver = $_POST['silver'];
    $gold = $_POST['gold'];


    $qp = query("INSERT INTO vip_review (admin_id, reg_time, roll, diamond, silver, gold) VALUES ('$admin_id', '$reg_time', '$roll', '$diamond', '$silver', '$gold')");
confirm($qp);

if ($qp) {
    header("location: vip_result.php");
}


}






?>
	                		


	                
	            </div>
	           </div> <br><br><br>




	         <div class="card">

	         	<h3 style="text-align: center; color: gold; margin-top: 2%; margin-bottom: 2%;">RETRIEVED DATA</h3>
	           <div class="table-responsive">
                                    <table class="table table-hover table-borderless table-striped">
                                        <!-- BET FOR THE DAY -->
                                      <thead class="card-head">
                                       <tr>
                                         <th scope="col">Date</th>
				                        <th scope="col">Roll Over</th>
				                        <th scope="col">Diamond</th>
				                        <th scope="col">Silver</th>
				                        <th scope="col">Gold</th>
                                         <th scope="col">Edit</th>
                                          <th scope="col">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody class="card-body">
<?php

$query = query("SELECT * FROM vip_review ORDER BY vip_id ASC");
confirm($query); 

while ($row = fetch_array($query)) {
$vip_id = $row['vip_id'];




?> 
                  <tr>
                    <td><?php echo $row['reg_time'];  ?></td>
                    <td><?php
                     if ($row['roll']==1) {
                echo "<img src='../assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
            }else if ($row['roll']==2) {
                echo "<img src='../assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
            }else {
                echo "??";
            }  ?></td>
                    <td>
                    	<?php
                     if ($row['diamond']==1) {
                echo "<img src='../assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
            }else if ($row['diamond']==2) {
                echo "<img src='../assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
            }else {
                echo "??";
            }  ?> </td>
                    <td>
                    	<?php
                     if ($row['silver']==1) {
                echo "<img src='../assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
            }else if ($row['silver']==2) {
                echo "<img src='../assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
            }else {
                echo "??";
            }  ?></td>
                    <td><?php
                     if ($row['gold']==1) {
                echo "<img src='../assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
            }else if ($row['gold']==2) {
                echo "<img src='../assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
            }else {
                echo "??";
            }  ?></td>
                    <td>
                        <a href="edit_vip_result.php<?php echo '?id='.$vip_id; ?>">Edit</a>
                    </td>
                    <td>
                        <a href="<?php echo '?delete='.$vip_id; ?>">Delete</a>
                    </td>    
                </tr>
<?php


}


if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
    $qy = query("DELETE FROM vip_review WHERE vip_id='$delete'");
    confirm($qy);
    header('location: vip_result.php');

 }  

?>
                        </tbody>

                    </table>
                </div>
              </div>








<?php include 'footer.php';  ?>