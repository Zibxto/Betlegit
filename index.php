


<?php  
                include 'in_session.php'; 

    if (isset($session_id)) {
         header("location: home.php");
    } 
    elseif (!isset($session_id)){

        include 'tips.php';
    }

?>

