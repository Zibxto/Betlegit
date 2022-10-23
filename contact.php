<?php
                include 'include/dbconnect.php';
                include 'include/function.php'; 

                if (isset($_GET['mailsent'])) {
                    echo "<script>alert('Thank you, your mail was sent successfully.')</script>";
                }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <title>Contact us</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">


    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">


    <!-- Main css -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Subsidiary CSS -->
    <link href="assets/css/subsidiary.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
        <?php include 'include/header.php';  ?>

    <section>
        <div class="container-fluid">
            <div class="row">
                
                <?php include 'include/sidebar.php';  ?>
                    
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6 mt-40">
                    <div class="content-center cl-white">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-form">
                                    <div class="title">
                                        <h3>Drop a Message</h3>
                                    </div>


<?php 
if(isset($_POST['submit'])){
    $to = "christianaziba@gmail.com"; // this is your Email address
    $from = escape_string($_POST['email']); // this is the sender's Email address
    $first_name = escape_string($_POST['first_name']);
    $last_name = escape_string($_POST['last_name']);
    $subject = escape_string($_POST['subject']);
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . escape_string($_POST['message']);
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . escape_string($_POST['message']);

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
     header('Location: contact.php?mailsent'); 
    }
?>

                                    <form action="#" method="POST">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <input type="text" placeholder="First Name" name="first_name" required>
                                            </div>
                                            <div class="col-xl-6">
                                                <input type="text" placeholder="Last Name" name="last_name" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="email" placeholder="Email" name="email" required>
                                            </div>
                                             <div class="col-xl-12">
                                                <input type="text" placeholder="Subject" name="subject" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <textarea name="message" rows="4" placeholder="Message"></textarea>
                                            </div>
                                            <div class="col-xl-12">
                                                <button type="submit" name="submit" class="bttn-small btn-fill w-100">Send it</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
                        <?php include 'include/widget.php';  ?>
            </div>
        </div>
    </section>

   <!-- Footer Area -->
        <?php include 'include/footer.php'; ?>

        <?php include 'include/copyright.php'; ?>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery-migrate.js"></script>
    <script src="assets/js/jquery-ui.js"></script>

    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>

    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scrollUp.min.js"></script>
    <script src="assets/js/jquery.accrue.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>


</html>