<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                    <div class="web-sidebar-widget">
                        <div class="widget-head">
                            <h3>Betlegit ads</h3>
                        </div>
                        <div class="widget-body p-0">
                            <a href="#"><img class="w-100" src="assets/images/bet365.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="web-sidebar-widget">
                        <div class="widget-head">
                            <h3>GET IN TOUCH</h3>
                            <p>We are at the tips of your finger!</p>
                        </div>
                <?php


                $d = 1; 
                    $qc = query("SELECT * FROM site_info WHERE site_id='$d'");
                    confirm($qc);
                    $qc_row = fetch_array($qc);

                ?>

                        <div class="widget-body" style="color: #963847; background-color: #f2f2f2; word-break: wrap;">
                            <p><strong style="color: #222">Subscription/general enquiries: </strong><?php echo $qc_row['email']; ?> <br>whatsapp:  <a href="https://wa.link/2rp19w" class="cl-whatsapp"><i class="fa fa-whatsapp" style="font-size: 20px;"></i></a>
                                <br>phone/sms: <b><?php echo $qc_row['phone']; ?></b>

                            </p>
                            <p><strong style="color: #222">Advert/sponsorship: <br></strong><?php echo $qc_row['a_email']; ?></p>
                            <p><strong style="color: #222">Working Hours:</strong> 8:00am - 6:00pm (West African Time)</p>
                        </div>
                    </div>
                  <div class="web-sidebar-widget">
                        <div class="widget-head">
                            <h3>Betlegit ads</h3>
                        </div>
                        <div class="widget-body p-0">
                            <a href="#"><img class="w-100" src="assets/images/bet365.jpg" alt=""></a>
                        </div>
                    </div>             
                </div>


                