<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?= base_url('assets'); ?>/images/Mask Group.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MINI MBA</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/style-starter.css">

</head>


<body>
    <!--header-->
    <?php $this->load->view('templates/navbar') ?>

    <!--//header-->

    <!-- inner banner -->
    <div class="inner-banner-news">
        <div class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2" style="text-align:left">Events Details</h4>
                <!-- <p style="color:white;text-align:left !important">Shaping the best generation in the digital era</p> -->
            </div>
        </div>
    </div>
    <!-- //inner banner -->


    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-sec-style py-5">
            <div class="container py-md-4 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <!-- <h3 class="title-style mb-2" style="color:#9B191B">Program Content</h3>
							<p>We prepare the best program to produce great leaders for the future and welcome the acceleration of technology in Indonesia.</p> -->
                        </div>
                    </div>
                </div>
                <div class="content-sec-11" style="position: relative">
                    <!-- <div class="d-flex align-items-center">
                        <div class="title-style">Webinar Technology</div>
                        <h6 style="color:#9C1718" class="ml-auto"><i class="fa fa-calendar" aria-hidden="true"></i><b> 20 May 2021</b></h6>
                    </div>
                    <img class="center mt-4" src="<?= base_url('assets'); ?>/images/Rectangle 792.png"> -->
                    <div class="card mb-4" style="width: auto;border-radius: 20px;">
                        <img class="card-img-top" src="<?= base_url('assets'); ?>/images/bgeventdetails.png" alt="Card image cap">
                        <div class="card-body p-5">
                            <h5 class="card-title font-weight-bold">TB x SIRCLO</h5>
                            <h6 style="color:#9C1718"><i class="fa fa-calendar" aria-hidden="true"></i><b> 17 Desember 2021</b></h6>
                            <hr>
                            <div class="d-flex flex-wrap">
                                <div class="mr-5">
                                    <div class="mb-3 font-weight-bold">Hosted By</div>
                                    <img class="footer-title-29" style="width:80%" src="<?= base_url('assets'); ?>/images/pemimpin.png">
                                </div>
                                <div class="mr-5">
                                    <div class="mb-3 font-weight-bold">Time & Location</div>
                                    <div>10:00-12:00</div>
                                    <div>Online by Zoom</div>

                                </div>
                                <div>
                                    <div class="mb-3 font-weight-bold">Share</div>
                                    <div class="d-flex ">
                                        <a href="#facebook" class="facebook mr-2"><span class="fa fa-facebook"></span></a>
                                        <a href="#facebook" class="instagram mr-2"><span class="fa fa-instagram"></span></a>
                                        <a href="#facebook" class="youtube mr-2"><span class="fa fa-youtube"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="title-style mb-2" style="color:#9B191B;">Event Description</h3>
                    <hr>
                    <div class="mt-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel imperdiet neque. Sed id finibus nisi. Vivamus leo augue, faucibus quis enim in, condimentum imperdiet mi. Nullam accumsan feugiat lectus iaculis mollis. Etiam nec mauris ligula. Duis dolor nisi, sodales posuere pellentesque id, posuere quis sapien. Phasellus eleifend magna vel tortor dignissim vestibulum at ac leo. Cras mattis mi quis ligula porttitor, et euismod eros luctus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed imperdiet accumsan nisl nec rhoncus. Sed vel diam mollis, eleifend massa nec, vestibulum leo. Nulla quis enim lectus. Nullam tincidunt varius diam et varius. Fusce lacinia sed sem ac laoreet. Aliquam erat volutpat.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->

    <!-- call section -->
    <section class="w3l-call-to-action-6" style="margin-bottom:25px">
        <div class="call-sec-style py-5">
            <div class="container py-md-4 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <!-- <h3 class="title-style mb-2" style="color:#9B191B">Program Content</h3>
							<p>We prepare the best program to produce great leaders for the future and welcome the acceleration of technology in Indonesia.</p> -->
                        </div>
                    </div>
                </div>
                <div class="content-sec-11" style="position: relative">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="section-heading text-center mb-sm-5 mb-2">
                                <h3 class="title-style mb-4 text-left" style="color:#9B191B;">Other Events</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>

                    <div id="test" class="row">

                        <div class="col-lg-3">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 792.png">
                            <h6 style="margin-left:5%;color:#9C1718"><i class="fa fa-calendar" aria-hidden="true"></i><b> 11 May 2021</b></h6>
                            <h6 style="margin-left:5%;color:black"><b>Webinar Technology</b></h6>
                        </div>
                        <div class="col-lg-3">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 734.png">
                            <h6 style="margin-left:5%;color:#9C1718"><i class="fa fa-calendar" aria-hidden="true"></i><b> 20 May 2021</b></h6>
                            <h6 style="margin-left:5%;color:black"><b>Carry On Indonesian Education</b></h6>
                        </div>
                        <div class="col-lg-3">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 775.png">
                            <h6 style="margin-left:5%;color:#9C1718"><i class="fa fa-calendar" aria-hidden="true"></i><b> 31 May 2021</b></h6>
                            <h6 style="margin-left:5%;color:black"><b>Cooperation with Australian companies</b></h6>
                        </div>
                        <div class="col-lg-3">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 791.png">
                            <h6 style="margin-left:5%;color:#9C1718"><i class="fa fa-calendar" aria-hidden="true"></i><b> 06 June 2021</b></h6>
                            <h6 style="margin-left:5%;color:black"><b>SMARTIES Awards Indonesia</b></h6>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- //call section -->



    <!-- footer -->
    <?php $this->load->view('templates/footer') ?>

</body>

</html>