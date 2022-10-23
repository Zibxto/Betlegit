<?php
  
    include '../include/dbconnect.php';
      include '../include/session.php';
    include '../include/function.php';

?>
 <?php
  include 'header.php';  ?>

            <div class="card">
                    <div class="table-responsive">
                                
                            <table class="table table-hover table-borderless table-striped">

                                <?php  
                                        if (isset($_GET['success'])) {
                                            echo "<p id='cancel' style='background-color: green; color: white; padding: 8px; font-weight: 600;'>Registration successfull proceed to login <button type='button' onClick='cancel()'><span style='color:red; background-color: green'><b>X</b></span></button></p> <br>";
                                        }
                                    ?>

                                     <script>
                                                    function cancel() {
                                                        document.getElementById('cancel').style.display = 'none';

                                                    }
                                                </script>

                                <form method="POST" action="">
                                
                                <thead class="card-head">
                                  <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Teams</th>
                                    <th scope="col">Odds</th>
                                    <th scope="col">CS Tips</th>
                                    <th scope="col">Tips</th>
                                    <th scope="col">Result</th>
                                  </tr>
                                </thead>
                                <tbody class="card-body">
                                  <tr>
                                    <td><input style="width: 6vw" placeholder="Time" name="time"> </td>
                                    <td>
                                        <input placeholder="Country" name="country">
                                    </td>
                                    <td>
                                        <input name="team" placeholder="Teams"> 
                                    </td>
                                    <td>
                                        <input style="width: 10vw" placeholder="Odds" name="odd">
                                    </td>
                                    <td>
                                        <input style="width: 10vw" placeholder="CS tips" name="cs_tip">
                                    </td>
                                    <td>
                                        <input style="width: 10vw" placeholder="Tips" name="tip">
                                    </td>
                                    <td><input style="width: 10vw" placeholder="Result" name="result"></td>
                                  </tr>
                                  <tr>
                                      <td><center><input type="submit" name="submit" value="PUBLISH" class="bttn-small btn-fill w-20"></center></td>
                                  </tr>
                                  
                                </tbody>

                                </form>
                            </table>




        <?php 

        if (isset($_POST['submit'])) {
        
            $date = $_POST['time'];
            $country = $_POST['country'];
            $teams = $_POST['team'];
            $odd = $_POST['odd'];
            $cs_tip = $_POST['cs_tip'];
            $tip = $_POST['tip'];
            $result = $_POST['result'];


            $qp = query("INSERT INTO free_tip (admin_id, m_date, country, teams, odd, cs_tip, tip, result) VALUES ('$session_id','$date', '$country', '$teams', '$odd','$cs_tip', '$tip', '$result')");
        confirm($qp);

        if ($qp) {
            header("location: prediction.php");
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
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Teams</th>
                                                    <th scope="col">Odds</th>
                                                    <th scope="col">CS Tips</th>
                                                    <th scope="col">Tips</th>
                                                    <th scope="col">Result</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                    <th scope="col">Push to past</th>
                                                  </tr>
                                                </thead>
                                                <tbody class="card-body">

      <?php
    $query = query("SELECT * FROM free_tip WHERE push='0' ORDER BY f_tip_id ASC");
    confirm($query);



    while ($row = fetch_array($query)) {
        $t_id = $row['f_tip_id'];
        
     
       
    
     ?> 
                      <tr>
                        <td><?php echo $row['m_date']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                        <td><?php echo $row['teams']; ?></td>
                        <td><?php echo $row['odd']; ?></td>
                        <td><?php echo $row['cs_tip']; ?></td>
                        <td><?php echo $row['tip']; ?></td>
                        <td><?php echo $row['result']; ?></td>
                        <td><?php 
                            if ($row['status']==1) {
                                echo "<img src='../assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
                            }else if ($row['status']==2) {
                                echo "<img src='../assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
                            }else {
                                echo "??";
                            }


                         ?></td>   

                        <td>
                            <a href="edit_prediction.php<?php echo '?id='.$t_id; ?>">Edit</a>
                        </td>
                        <td>
                            <a href="<?php echo '?delete='.$t_id; ?>">Delete</a>
                        </td>
                     <td>
                        <a style="background-color: orange; padding: 5px; border-radius: 4px; color: #fff;" href="<?php echo '?push='.$t_id; ?>">Push</a>
                     </td>
                        
                      </tr>

    <?php
        

    }


        if (isset($_GET['delete'])) {
            $delete = $_GET['delete'];
            $qy = query("DELETE FROM free_tip WHERE f_tip_id='$delete'");
            confirm($qy);
            header('location: prediction.php');
        
         } 

         if (isset($_GET['push'])) {
              $push = $_GET['push'];
              $n_push = 1;
              $qp = query("UPDATE free_tip SET push='$n_push' WHERE f_tip_id='$push'");
              confirm($qp);
              header('location: prediction.php');
          } 

  ?>

                                                </tbody>
                                            </table>
                                        </div>
                                      </div>








  <?php include 'footer.php';  ?>