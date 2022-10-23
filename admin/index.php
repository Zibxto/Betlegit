<?php
  
    include '../include/dbconnect.php';
      include '../include/session.php';
    include '../include/function.php';

?>


            <?php 
             include 'header.php';  ?>

<div class="card">

                    
            <?php  
                                        if (isset($_GET['updated'])) {
                                            echo "<p id='cancel' style='background-color: red; color: white; padding: 8px; font-weight: 600;'>Updated Successfully! <button type='button' onClick='cancel()'><span style='color:red; background-color: red; color:white;'><b>X</b></span></button></p> <br>";
                                        }
                                    ?>

                                                <script>
                                                    function cancel() {
                                                        document.getElementById('cancel').style.display = 'none';

                                                    }
                                                </script>

    <div class="table-responsive">
        <table class="table table-hover table-borderless table-striped">
            <thead class="card-head">
              <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Package</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
                <th scope="col">Reg. Time</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody class="card-body">

    <?php

    $query = query("SELECT * FROM user ORDER BY id ASC");
    confirm($query); 

    while ($row = fetch_array($query)) {
        $session_id = $row['id'];
        
    if ($row['rank'] == 0) {
       
    
     ?>
               
              <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['package']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['reg_time']; ?></td>
                <td>
                    <a href="edit_user.php<?php echo '?id='.$session_id; ?>">Edit</a>
                </td>
                <td>
                    <a href="<?php echo '?delete='.$session_id; ?>">Delete</a>
                </td>
              </tr>
      <?php
        }

 }

        if (isset($_GET['delete'])) {
            $delete = $_GET['delete'];
            $qy = query("DELETE FROM user WHERE id='$delete'");
            confirm($qy);
            header('location: index.php');
        }  

  ?>
            </tbody>
        </table>
    </div>
</div>



<?php include 'footer.php';  ?>



