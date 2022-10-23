<?php 
include 'include/dbconnect.php';
include 'include/session.php';
include 'include/function.php'; 
?>

<?php


$r_q = query("SELECT * FROM user WHERE id='$session_id'");
confirm($r_q);
$r_row = fetch_array($r_q);

if ($r_row['rank'] == 1) {

				 header("location: admin");
				 // session_write_close();
				 // exit();
			}
			else if ($r_row['rank'] == 0) {
				header("location: dashboard");
				// session_write_close();
				// exit();
			}

?>