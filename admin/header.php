

<?php //ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <title>Admin</title>

    <!-- Bootstrap -->

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/magnific-popup.css" rel="stylesheet">
    <link href="../assets/css/jquery-ui.css" rel="stylesheet">


    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/owl.carousel.min.css" rel="stylesheet">


    <!-- Main css -->
    <link href="../assets/css/main.css" rel="stylesheet">
        <!-- Subsidiary CSS -->
    <link href="../assets/css/subsidiary.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Preloader -->
	<div class="preloader">
		<div class="spinner">
		   <span class="spinner-rotate"></span>
		</div>
	</div><!-- /Preloader -->

    <?php 

            $q = query("SELECT * FROM user WHERE id='$session_id'");
            confirm($q);
            $q_row = fetch_array($q);

    ?>
  
    <!--Header Area-->
    <header class="header-area gradient-bg">
        <nav class="navbar navbar-expand-lg main-menu">
            <div class="container-fluid">

                <a class="navbar-brand" href="../index.php" style="color: #f5f5f5;"><h3>ADMIN DASHBOARD</h3><p style="color: red;">Welcome <?php echo $q_row['firstname']; ?></p></a>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item"><a style="color: gold;" class="nav-link" href="index.php">User</a></li>
                        <li class="nav-item"><a class="nav-link" href="tomorrow_bet.php">Bet of the Day</a></li> 
                        <li class="nav-item"><a class="nav-link" href="prediction.php">Free Prediction Tips</a></li>
                         <li class="nav-item"><a class="nav-link" href="past_prediction.php">Past Predictions</a></li>
                         <li class="nav-item"><a class="nav-link" href="vip_result.php">VIP Result</a></li>
                         <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                    <div class="header-btn justify-content-end">
                        <a href="logout.php" class="bttn-small btn-fill ml-2"><i class="fa fa-lock"></i>Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header><!--/Header Area-->