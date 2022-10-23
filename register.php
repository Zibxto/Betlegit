<?php

                // include 'include/dbconnect.php'; 
                // include 'include/function.php';
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <title>Sign up</title>

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
                                        <h3>Create your account</h3>
                                    </div>
                                   
                                    <form method="post" action="regcode.php">
        
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
                                            <div class="row">
                                            <div class="col-xl-6">
                                                <input type="text" name="firstname" placeholder="First Name">
                                            </div>
                                            <div class="col-xl-6">
                                                <input type="text" name="lastname" placeholder="Last Name">
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="text" name="username" placeholder="Username">
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="text" name="Phone" placeholder="Phone Number">
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="email" name="email" placeholder="Email">
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="text" list="package" name="package" placeholder="Select pacakge">
                                                <datalist id="package">
                                                    <option value="Roll over">
                                                    <option value="Diamond">
                                                    <option value="Silver">
                                                    <option value="Gold">
                                                </datalist>
                                            </div>
                                            <div class="col-xl-12">
                                                <p>By signing up to betlegit you confirm that you agree with the <a href="#">member terms and conditions</a></p>
                                            </div>
                                            <div class="col-xl-12">
                                                <button type="submit" name="submit" class="bttn-small btn-fill w-100">Create my account</button>
                                            </div>
                                            <div class="col-xl-12">
                                                <p><a href="login.php">Do you already have an account?</a></p>
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