<?php
    include '../include/dbconnect.php';
      include '../include/session.php';
    include '../include/function.php';

?>

 <?php include 'header.php';  ?>


 			<div class="card">
					<div class="table-responsive">
								
			                <table class="table table-hover table-borderless table-striped">

			                	<form method="post" action="">
			                    <!-- BET FOR THE DAY -->
			                    <thead class="card-head">
			                      <tr>
			                        <th scope="col">Time</th>
                                    <th scope="col">Date</th>
			                        <th scope="col">Country</th>
			                        <th scope="col">Featured Matches</th>
			                        <th scope="col">Tips</th>
			                        <th scope="col">Result</th>
			                        <th scope="col">Status</th>
			                      </tr>
			                    </thead>
			                    <tbody class="card-body">
			                      <tr>
			                        <td><input style="width: 6vw" placeholder="Time" name="tb_date"></td>
                                    <td>
                                        <?php 
                                        $d = date("d");
                                        $t = date("d", strtotime("+1 days"));
                                        ?>
                                        <select name="date_bet">
                                            <option value="<?php echo $d; ?>">Today</option>
                                            <option value="<?php echo $t; ?>">Tomorrow</option>
                                        </select>
                                    </td>
			                        <td>
			                            <input placeholder="Country" name="country">
			                        </td>
			                        <td>
			                            <input name="team" placeholder="F.matches"> 
			                        </td>
			                        <td>
			                            <input style="width: 6vw" placeholder="Tips" name="tip">
			                        </td>
			                        <td>
			                            <input style="width: 6vw" placeholder="Result" name="result">
			                        </td>
			                      </tr>
			                      <tr>
			                      	<td>
			                      		<center><button type="submit" name="submit" class="bttn-small btn-fill w-20">PUBLISH</button></center>
			                      	</td>
			                      </tr>
			                      
			                    </tbody>

			                    </form>
			                </table>

 
        <?php 

        if (isset($_POST['submit'])) {

            $dk = date("d");
            $t = date("d", strtotime("+1 days"));
        
        	$admin_id = $session_id;
            $tb_date = $_POST['tb_date'];
            $date_bet = $_POST['date_bet'];

            $when_bet;



            if ($date_bet == $dk) {
                $when_bet = 2;
                $t_month = date("m");

            }
            else{
                $when_bet = 3;
                $t_month = date("m", strtotime("+1 days"));
            }

            $country = $_POST['country'];
            $team = $_POST['team'];
            $tip = $_POST['tip'];
            $result = $_POST['result'];
            

            $qp = query("INSERT INTO tomorrow_bet (admin_id, tb_date, date_bet, country, team, tip, result, when_bet, month_bet) VALUES ('$admin_id','$tb_date', '$date_bet', '$country', '$team', '$tip', '$result', '$when_bet', '$t_month')");
        confirm($qp);

        if ($qp) {
            header("location: tomorrow_bet.php");
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
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Featured Matches</th>
                                                    <th scope="col">Tips</th>
                                                    <th scope="col">Result</th>
                                                    <th scope="col">Status</th>
                                                     <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                  </tr>
                                                </thead>
                                                <tbody class="card-body">

     <?php

    $query = query("SELECT * FROM tomorrow_bet WHERE when_bet!='0' ORDER BY tb_id ASC");
    confirm($query); 

    while ($row = fetch_array($query)) {
        $tb_id = $row['tb_id'];
        
        ?>

 
                                  <tr>
                                    <td><?php echo $row['tb_date']; ?></td>
                                    <td><?php echo $row['date_bet']; ?></td>
                                    <td><?php echo $row['country']; ?></td>
                                    <td><?php echo $row['team']; ?></td>
                                    <td><?php echo $row['tip']; ?></td>
                                    <td><?php echo $row['result']; ?></td>
                                    <td> <?php
                                     if ($row['status']==1) {
                                echo "<img src='../assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
                            }else if ($row['status']==2) {
                                echo "<img src='../assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
                            }else {
                                echo "??";
                            }  ?></td> 
                                    <td>
                                        <a href="edit_tomorrow_bet.php<?php echo '?id='.$tb_id; ?>">Edit</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo '?delete='.$tb_id; ?>">Delete</a>
                                    </td>    
                                </tr>
          <?php 


      }  ?>
         

   
<?php

        if (isset($_GET['delete'])) {
            $delete = $_GET['delete'];
            $qy = query("DELETE FROM tomorrow_bet WHERE tb_id='$delete'");
            confirm($qy);
            header('location: tomorrow_bet.php');
        
         } 

  ?>
                                </tbody>
                            </table>
                        </div>


                      </div>








  <?php include 'footer.php';  ?>