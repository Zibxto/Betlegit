<?php
  
    include '../include/dbconnect.php';
      include '../include/session.php';
    include '../include/function.php';

?>

<?php include 'header.php';  ?>

			         <div class="card">

			         	<h3 style="text-align: center; color: gold; margin-top: 2%; margin-bottom: 2%;">PAST PREDICTION</h3>
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
                                                    <th scope="col">Delete</th>
                                                  </tr>
                                                </thead>
                                                <tbody class="card-body">
     <?php
    $query = query("SELECT * FROM free_tip WHERE push='1' ORDER BY f_tip_id ASC");
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
                        ?>
                         </td>   
                        <td>
                            <a href="<?php echo '?delete='.$t_id; ?>">Delete</a>
                        </td>
                     <tr>
                 <?php 

}


        if (isset($_GET['delete'])) {
            $delete = $_GET['delete'];
            $qy = query("DELETE FROM free_tip WHERE f_tip_id='$delete'");
            confirm($qy);
            header('location: past_prediction.php');
        
         } 



?>
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                      </div>







  <?php include 'footer.php';  ?>