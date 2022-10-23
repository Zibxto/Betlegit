<?php
                include 'include/dbconnect.php';
                include 'include/function.php'; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <title>Payment</title>

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

<?php include 'include/header.php'; ?>

    <section>
        <div class="container-fluid">
            <div class="row">
              
                     <?php include 'include/sidebar.php';  ?>


                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6">
                    
                            <!-- subscription plan -->

<style>
    .card-body a {
        color: #f5f5f5;
    }

</style>
                    <div id="subscribe" class="row" style="text-align: center; margin-top: 5%;">
                        <p style="color: #f5f5f5">
                            Click on your prefered subscription plan below and proceed to make payment. Note that Currency are automatically converted to NGN<br>
                            <span>After making deposit, ensure to send your full name, whatsapp number and evidence of payment (receipt) to our whatsapp number: <b style="color: red;">+2348061702407</b> or email: <b style="color: red;">sholexe@gmail.com</b></span>
                        </p>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card sub-card">
                        <div class="card-header sub-card-header">
                                <div class="sub-title" style="background-color: lightblue;"><h3>ROLL OVER</h3></div>
                                <div class="sub-amt"><h3>&#8358;10,000 <br>&#8373;200 <br> 4,000Ksh <br>&#x24;30</h3></div>
                        </div>
                        <div class="card-body">
                          <a href="https://paystack.com/pay/betlegit_rollover" class="btn btn-warning">Proceed</a>
                        </div>
                        </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card sub-card">
                        <div class="card-header sub-card-header">
                               <div class="sub-title" style="background-color: #b9f2ff;"> <h3>DIAMOND</h3> </div>
                                <div class="sub-amt"><h3>&#8358;15,000 <br>&#8373;250 <br> 6,500Ksh <br>&#x24;45</h3> </div>
                        </div>
                        <div class="card-body">
                          <a href="https://paystack.com/pay/betlegit_diamond" class="btn btn-warning">Proceed</a>
                        </div>
                        </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card sub-card">
                        <div class="card-header sub-card-header">

                                <div class="sub-title" style="background-color: silver"><h3>SILVER</h3></div>
                                <div class="sub-amt"> <h3>&#8358;10,000 <br>&#8373;200 <br> 4,000Ksh <br>&#x24;30</h3> </div>
                        </div>
                        <div class="card-body">
                          <a href="https://paystack.com/pay/betlegit_silver" class="btn btn-warning">Proceed</a>
                        </div>
                        </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card sub-card">
                        <div class="card-header sub-card-header">
                            
                               <div class="sub-title"> <h3>GOLD</h3> </div>
                                <div class="sub-amt"><h3>&#8358;25,000 <br>&#8373;400 <br> 9,500Ksh <br>&#x24;80</h3> </div>
                        </div>
                        <div class="card-body">
                          <a href="https://paystack.com/pay/betlegit" class="btn btn-warning">Proceed</a>
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
   