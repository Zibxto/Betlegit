<?php 
include '../include/dbconnect.php';
include '../include/session.php';
include '../include/function.php'; 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">


    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">


    <!-- Main css -->
    <link href="assets/css/main.css" rel="stylesheet">
    <!-- Subsidiary css -->
    <link href="assets/css/subsidiary.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
            <?php include 'header.php';  ?>

    <section>
        <div class="container-fluid">
            <div class="row">

                <?php include 'sidebar.php';  ?>

                <?php
                

 $u_query = query("SELECT * FROM user WHERE id='$session_id'");
                    confirm($u_query);
                    $u_row = fetch_array($u_query);
                ?>
                
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6">
                    <div class="card" style="margin-top: 6.5vh">
                        <div class="card-header">
                            <h3 style="color: #222;">Hello <?php echo $u_row['firstname'] . ' ' . $u_row['lastname']; ?></h3>
                            <p>Welcome to your dashboard, click the whatsapp icon below to be redirected to get your Betlegit 99.9 accurate predictions.</p>
                            <h5><a href="" class="cl-whatsapp"><i class="fa fa-whatsapp" style="font-size: 30px;"></i></a></h5>
                        </div>
                    </div>
                    
                </div>



                
                <?php include 'widget.php';  ?>
                
            </div>
        </div>
    </section>

                <!-- Footer Area -->
     <?php include 'footer.php'; ?> 

        <?php include 'copyright.php'; ?>

    