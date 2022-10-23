<?php
ob_start();
                include 'include/dbconnect.php';
                include 'in_session.php'; 
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

    <title>Home</title>

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



<?php 
		//include 'include/session.php';
        include 'admin/in_header.php';
?>

    <section>
        <div class="container-fluid">
            <div class="row">
              
                     <?php include 'include/sidebar.php';  ?>


                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6">
                    <div class="main-content-slider owl-carousel">
                        <div class="single-slider" style="background: url('assets/images/banner/hero-a.jpg') no-repeat center / cover;">
                            <div class="row">
                                <div class="col-xl-6">
                                    <h3 style="color: #963847; text-shadow: 2px 2px black; font-weight: 900;">BEST SOCCER PREDICTION SITE IN THE WORLD</h3>
                                    <ol style="list-style-type: square;">
                                        <li><i class="fa fa-check"></i> Proven Performance of Tips</li>
                                        <li><i class="fa fa-check"></i> Increased Winning Stability</li>
                                        <li><i class="fa fa-check"></i> Oddsmaker on Your Side</li>
                                    </ol> <br>

                                    <button class="hero-score" style="background-color: gold;"><a style=" color: #963847; font-weight: 600; " href="#subscribe">SUBSCRIBE NOW</a></button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="single-slider" style="background: url('assets/images/banner/hero-b.jpeg') no-repeat center / cover;">
                            <div class="row">
                                <div class="col-xl-6">
                                   <h3 style="color: #963847; text-shadow: 2px 2px black; font-weight: 900;">BEST SOCCER PREDICTION SITE IN THE WORLD</h3>
                                    <ol style="list-style-type: square;">
                                        <li><i class="fa fa-check"></i> Proven Performance of Tips</li>
                                        <li><i class="fa fa-check"></i> Increased Winning Stability</li>
                                        <li><i class="fa fa-check"></i> Oddsmaker on Your Side</li>
                                    </ol> <br>
                                    <button class="hero-score" style="background-color: gold;"><a style=" color: #963847; font-weight: 600; " href="#subscribe">SUBSCRIBE NOW</a></button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>





                <div class="game-box">
                     <div class="card">
                        <!-- BET OF THE DAY -->

                            <div class="sub-card-header"><h3 style="text-align: center; color: #963847; text-shadow: 1px 2px black;">Bet of the day</h3></div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: #222; font-size: 17px; font-weight: 600;">Yesterday</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: #222; font-size: 17px; font-weight: 600;">Today</a>
                                    </li>
                                     <li class="nav-item">
                                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="color: #222; font-size: 17px; font-weight: 600;">Tomorrow</a>
                                    </li> 
                                  </ul>
                                  <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-borderless table-striped">
                                                <!-- Yesterday -->
                                                <thead>
                                                  <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Featured Matches</th>
                                                    <th scope="col">Tips</th>
                                                    <th scope="col">Result</th>
                                                    <th scope="col">Status</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
   <?php

   updateMeter();

    $query = query("SELECT * FROM tomorrow_bet WHERE when_bet='1' ORDER BY tb_id ASC");
    confirm($query); 

    while ($row = fetch_array($query)) {
        $tb_id = $row['tb_id'];
        
        ?>

 
                                  <tr>
                                    <td><?php echo $row['tb_date']; ?></td>
                                    <td><?php echo $row['country']; ?></td>
                                    <td><?php echo $row['team']; ?></td>
                                    <td><?php echo $row['tip']; ?></td>
                                    <td><?php echo $row['result']; ?></td>
                                    <td> <?php
                                     if ($row['status']==1) {
                                echo "<img src='assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
                            }else if ($row['status']==2) {
                                echo "<img src='assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
                            }else {
                                echo "??";
                            }  ?></td> 


                                 </tr>
                    <?php }  ?>
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Today -->
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-borderless table-striped">
                                                <thead>
                                                  <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Featured Matches</th>
                                                    <th scope="col">Tips</th>
                                                    <th scope="col">Result</th>
                                                    <th scope="col">Status</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
     <?php

    $query = query("SELECT * FROM tomorrow_bet WHERE when_bet='2' ORDER BY tb_id ASC");
    confirm($query); 

    while ($row = fetch_array($query)) {
        $tb_id = $row['tb_id'];
        
        ?>

 
                                  <tr>
                                    <td><?php echo $row['tb_date']; ?></td>
                                    <td><?php echo $row['country']; ?></td>
                                    <td><?php echo $row['team']; ?></td>
                                    <td><?php echo $row['tip']; ?></td>
                                    <td><?php echo $row['result']; ?></td>
                                    <td> <?php
                                     if ($row['status']==1) {
                                echo "<img src='assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
                            }else if ($row['status']==2) {
                                echo "<img src='assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
                            }else {
                                echo "??";
                            }  ?></td> 


                                 </tr>
                    <?php }  ?>
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-borderless table-striped">
                                                <!-- Tomorrow -->
                                                <thead>
                                                  <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Featured Matches</th>
                                                    <th scope="col">Tips</th>
                                                    <th scope="col">Result</th>
                                                    <th scope="col">Status</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
      <?php

    $query = query("SELECT * FROM tomorrow_bet WHERE when_bet='3' ORDER BY tb_id ASC");
    confirm($query); 

    while ($row = fetch_array($query)) {
        $tb_id = $row['tb_id'];
        
        ?>

 
                                  <tr>
                                    <td><?php echo $row['tb_date']; ?></td>
                                    <td><?php echo $row['country']; ?></td>
                                    <td><?php echo $row['team']; ?></td>
                                    <td><?php echo $row['tip']; ?></td>
                                    <td><?php echo $row['result']; ?></td>
                                    <td> <?php
                                     if ($row['status']==1) {
                                echo "<img src='assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
                            }else if ($row['status']==2) {
                                echo "<img src='assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
                            }else {
                                echo "??";
                            }  ?></td> 


                                 </tr>
                    <?php 



                }  ?>
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                  </div>
                            </div>

                            <div>
                                
                            </div>

                            <!-- Free prediction tips -->

                            <div class="card">
                                <div class="sub-card-header"><h3 style="text-align: center; color: #963847; text-shadow: 1px 2px black;">Free prediction </h3></div>
                                <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-hover table-borderless table-striped">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Teams</th>
                                                    <th scope="col">Odds</th>
                                                    <th scope="col">CS Tips</th>
                                                    <th scope="col">Tips</th>
                                                    <th scope="col">Result</th>
                                                    <th scope="col">Status</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
         <?php

    $query = query("SELECT * FROM free_tip WHERE push='0' ORDER BY f_tip_id ASC");
    confirm($query);

if (mysqli_num_rows($query) <= 0) {
?>

<tr>
                        <center><p style="background-color: red; color: #fff; padding: 5px; border-radius: 4px;">No record available now</p> </center>
</tr>
<?php
    }
else{
    while ($row = fetch_array($query)) {
        
     
       
    
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
                                echo "<img src='assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
                            }else if ($row['status']==2) {
                                echo "<img src='assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
                            }else {
                                echo "??";
                            }


                         ?></td>  
                    </tr> 

                <?php }
}
                 ?>

                                                </tbody>
                                            </table>

                                        </div>
                                </div>
                                
                            </div>


                            <!-- Past prediction -->

                            <div id="p" class="card" style="display: none; height: 300px; overflow-y: scroll;">
                                <div class="sub-card-header"><h3 style="text-align: center; color: #963847; text-shadow: 1px 2px black;">Past prediction </h3></div>
                                <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-borderless table-striped">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Teams</th>
                                                    <th scope="col">Odds</th>
                                                    <th scope="col">CS Tipd</th>
                                                    <th scope="col">Tips</th>
                                                    <th scope="col">Result</th>
                                                    <th scope="col">Status</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <?php

    $query = query("SELECT * FROM free_tip WHERE push='1' ORDER BY f_tip_id ASC");
    confirm($query); 

    while ($row = fetch_array($query)) {
        
     
       
    
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
                                echo "<img src='assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
                            }else if ($row['status']==2) {
                                echo "<img src='assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
                            }else {
                                echo "??";
                            }


                         ?></td>  
                    </tr> 

                <?php } ?>
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                 </div>
                            </div>

                            <!-- past prediction button -->
                            <button onclick="pastP()" style="color: red; padding: 4px; border: inset; text-align: right; font-weight: 600;">Past Predictions</button>

                            <script>
                                function pastP() {
                                    document.getElementById('p').style.display = 'block';
                                }
                            </script>

                            <div class="card">
                                <div class="sub-card-header"><h3 style="text-align: center; color: #963847; text-shadow: 1px 2px black;">Our Subscription Packages and Prices</h3></div>
                                <div class="card-body" style="color: #222;">
                                    <p>Betlegit all subscription packages tips is a service that picks the 99.9% best bets to help our users maximize winning chances and experience the joy of daily winning cashout from any boomaker of their choice.</p>
                                    <h5 style="color: red;">99.9% Accurate Sure rate Packages are;</h5>
                                        
                                 </div>
                            </div>

                            
                            



                            <!-- subscription plan -->

                    <div id="subscribe" class="row" style="text-align: center;">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card sub-card">
                        <div class="card-header sub-card-header">
                                <div class="sub-title" style="background-color: lightblue;"><h3>ROLL OVER</h3></div>
                                <div class="sub-amt"><h3>&#8358;10,000 <br>&#8373;200 <br> 4,000Ksh <br>&#x24;30</h3></div>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title" style="color: #963847;">Betlegit 99.9 accurate of the day</h4>
                          <p class="card-text">&#8358;10,000 to &#8358;60,000 weekly <br>
                            &#8373;150 to &#8373;900 weekly <br>
                            2600Ksh to 160Ksh weekly <br>
                            &#x24;25 to &#x24;150 weekly <br><br>
                            for 15days

                          </p>
                          <a href="payment.php?rollover" class="btn btn-warning">BUY NOW</a>
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
                          <h4 class="card-title" style="color: #963847;">Betlegit 99.9 accurate of the day</h4>
                          <p class="card-text">
                            (2.00 to 5 odds)<br>
                            Multi sport (5-15 odds) <br>
                            for 15days <br><br><br><br><br>

                          </p>
                          <a href="payment.php?diamond" class="btn btn-warning">BUY NOW</a>
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
                          <h4 class="card-title" style="color: #963847;">Betlegit 99.9 accurate of the day</h4>
                          <p class="card-text">
                                (2.00 to 5 odds) <br>
                                for 15days <br><br><br><br><br><br><br>

                          </p>
                          <a href="payment.php?silver" class="btn btn-warning">BUY NOW</a>
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
                          <h4 class="card-title" style="color: #963847;">Betlegit 99.9 accurate of the day</h4>
                          <p class="card-text">
                            (2.00 to 5 odds)<br>
                            Multi sport (5-15 odds) <br>
                            for 15days <br><br><br><br><br>

                          </p>
                          <a href="payment.php?gold" class="btn btn-warning">BUY NOW</a>
                        </div>
                        </div>
                        </div> 
                    </div>

                    <!-- vip result packages -->

                    <div class="card" style="margin-top: 5vh;">
                                <div class="sub-card-header"><h4 style="text-align: center; color: #963847; text-shadow: 1px 2px black;">VIP Result Packages</h4></div>
                                <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-borderless table-striped">
                                                <thead>
                                                  <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Rollover</th>
                                                    <th scope="col">Diamond</th>
                                                    <th scope="col">Silver</th>
                                                    <th scope="col">Gold</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
        

        <?php

    $query = query("SELECT * FROM vip_review ORDER BY vip_id ASC");
    confirm($query); 

    while ($row = fetch_array($query)) {
        $vip_id = $row['vip_id'];
        
     
       
    
     ?> 
                                  <tr>
                                    <td><?php echo $row['reg_time'];  ?></td>
                                    <td><?php
                                     if ($row['roll']==1) {
                                echo "<img src='assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
                            }else if ($row['roll']==2) {
                                echo "<img src='assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
                            }else {
                                echo "??";
                            }  ?></td>
                                    <td>
                                        <?php
                                     if ($row['diamond']==1) {
                                echo "<img src='assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
                            }else if ($row['diamond']==2) {
                                echo "<img src='assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
                            }else {
                                echo "??";
                            }  ?> </td>
                                    <td>
                                        <?php
                                     if ($row['silver']==1) {
                                echo "<img src='assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
                            }else if ($row['silver']==2) {
                                echo "<img src='assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
                            }else {
                                echo "??";
                            }  ?></td>
                                    <td><?php
                                     if ($row['gold']==1) {
                                echo "<img src='assets/images/icons/good.png' style='width: 20px; height: 15px;'>";
                            }else if ($row['gold']==2) {
                                echo "<img src='assets/images/icons/bad.png' style='width: 20px; height: 15px;'>";
                            }else {
                                echo "??";
                            }  ?></td>


                             </tr>

            <?php } ?>
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                 </div>
                            </div>





                        </div>
                    </div>
                </div>

                    <?php include 'include/widget.php';  ?>
                
            </div>
        </div>
    </section>

    <div class="container">
        <div class="top-fb-story">
                <h3 style="text-shadow: 1px 2px black;">
                    TOP FOOTBALL STORIES
                </h3>
                <p>Which Is The Best Football Prediction Website? <br>
 Betlegit is the Best Football Prediction Site. We Provide our daily visitors and consistent users with Free Football Predictions on all Football Matches</p>

                <p>
                    Betlegit is the best football prediction website in the world. Betlegit makes it easier for punters and football bettors to win their games. we provide accurate football prediction for free to visitors to help them win their bets.  we also provide accurate and recent football news from match report to help you stay informed.so if you are looking for the best, real, good, and accurate football prediction website, Betlegit.com is the best prediction site in africa and Europe.
                </p>

                <p>
                    Is Betlegit the most Accurate Football Prediction Website ?<br>
The answer is Betlegit is the most accurate football prediction website because we predict 99 percent of our daily matches correctly, which also make people tag  Betlegit is a site that predict football matches correctly . we get accurate football prediction using AI, and you can bank on it for winnings. Of all soccer prediction websites in the worldwide, Betlegit stands out as the platform that make winning our culture. Betlegit, one of the top soccer/football prediction sites in the World Wide Web, provides the most updated and well-researched and real football betting tips, winning game predictions and soccer picks for free to everyone. So, if you are looking for the best and most accurate soccer predictions today, come to Betlegit.com

                </p>

                <p>
                    Betlegit gives Free football predictions, Free Expert Tips of the day,correctly predicted matches from major soccer league.  Betlegit make predictions from major football leagues such as English Premier League, Spanish La Liga, Italian Serie A, German Bundesliga, French Ligue One, English Championship, Greece, Switzerland League, Belgium Pro League and many more. Betlegit is  the site that predicts football matches correctly. Betlegit is best Free football prediction site in Kenya, Tanzania, Uganda, Nigeria, South Africa, United States of America (USA) and United Kingdom (UK).
                </p>

                <p>
                    Betlegit.com provides you with a wide range of accurate predictions you can rely on. Our unique interface makes it easy for the users to browse easily both on desktop and mobile for online sports gambling. If you are looking for sites that predict football matches correctly, Betlegit is the Best Football Prediction Website.
                </p>
                
            </div>
        
    </div>


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