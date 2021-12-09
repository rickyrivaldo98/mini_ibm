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
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/custom.css">
    <style>
        .profile-card-2 {
            max-width: 100%;
            background-position: center;
            overflow: hidden;
            position: relative;
            margin: -5px auto;
            /* cursor: pointer; */
            border-radius: 30px;
            height: 500px;
            background-position: center;
            background-size: cover;
            transition: all linear 0.25s;
        }

        .profile-card-2 img {
            transition: all linear 0.25s;
        }



        .profile-card-2 .wrap-profile {
            position: absolute;
            left: 20px;
            bottom: 70px;
            /* font-size: 20px; */
            color: #FFF;
            text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            /* font-weight: bold; */
        }

        @media screen and (max-width: 768px) {
            .profile-card-2 .wrap-profile {
                bottom: 50px;

            }
        }

        .profile-card-2 .profile-name {
            left: 20px;
            font-size: 20px;
            color: #FFF;
            text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            font-weight: bold;
        }

        .profile-card-2 .profile-username {
            left: 20px;
            color: #FFF;
            font-size: 13px;
        }

        .profile-card-2 .profile-icons .fa {
            margin: 5px;
        }

        .profile-card-2:hover {
            filter: grayscale(50%);
        }

        .inner-banner {
            border-radius: 20px;
        }

        .contact-us {
            background: #FFFFFF;
            border-radius: 9px;
            padding: 16px 32px;
            font-weight: bold;
            font-size: 18px;
            text-transform: capitalize;
            color: #9C1718;
            position: absolute;
            left: 60px;
        }

        @media screen and (max-width:568px) {
            .inner-banner {
                border-radius: 0;
            }
        }
    </style>
</head>

<body>
    <!--header-->
    <?php $this->load->view('templates/navbar') ?>
    <!--//header-->

    <!-- inner banner -->
    <!-- <div class="container mt-3 inner-banner pb-5">
        <div class="w3l-breadcrumb">
            <div class="container p-5">
                <div class="row mb-5 align-items-center my-auto">
                    <h2 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2 text-wrap" style="text-align:left; line-height:40px">Shaping the best generation in the digital era</h2>
                    <p class="text-left mb-3" style="color:white;">Shaping the best generation in the digital era</p>
                </div>

                <a class="contact-us btn" href="<?= base_url("Homepage/contact"); ?>">Contact Us</a>

            </div>
        </div>
    </div> -->
    <!-- //inner banner -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container mt-3 inner-banner pb-5">
                    <div class="w3l-breadcrumb">
                        <div class="container p-5">
                            <div class="row mb-5 align-items-center my-auto">
                                <h2 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2 text-wrap" style="text-align:left; line-height:40px">Shaping the best generation in the digital era</h2>
                                <p class="text-left mb-3" style="color:white;">Shaping the best generation in the digital era</p>
                            </div>

                            <a class="contact-us btn" href="<?= base_url("Homepage/contact"); ?>">Contact Us</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container mt-3 inner-banner pb-5">
                    <div class="w3l-breadcrumb">
                        <div class="container p-5">
                            <div class="row mb-5 align-items-center my-auto">
                                <h2 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2 text-wrap" style="text-align:left; line-height:40px">Shaping the best generation in the digital era</h2>
                                <p class="text-left mb-3" style="color:white;">Shaping the best generation in the digital era</p>
                            </div>

                            <a class="contact-us btn" href="<?= base_url("Homepage/contact"); ?>">Contact Us</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container mt-3 inner-banner pb-5">
                    <div class="w3l-breadcrumb">
                        <div class="container p-5">
                            <div class="row mb-5 align-items-center my-auto">
                                <h2 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2 text-wrap" style="text-align:left; line-height:40px">Shaping the best generation in the digital era</h2>
                                <p class="text-left mb-3" style="color:white;">Shaping the best generation in the digital era</p>
                            </div>

                            <a class="contact-us btn" href="<?= base_url("Homepage/contact"); ?>">Contact Us</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-sec-style pt-3 pb-5">
            <div class="container-ibm py-md-4 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <h3 class="title-style mb-2" style="color:#9B191B">Partnership</h3>
                        </div>
                    </div>
                </div>
                <div class="content-sec-11">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-2 mb-5 mx-3">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/everida.png">
                        </div>
                        <div class="col-3 col-md-2 mb-5 mx-3">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/pemimpin.png">
                        </div>
                        <div class="col-3 col-md-2 mb-5 mx-3">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/sbmitb.png">
                        </div>
                        <div class="col-3 col-md-2 mx-3 mt-3 mt-md-0 mb-5">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/paragon.png">
                        </div>
                        <div class="col-3 col-md-2 mx-3 mt-3 mt-md-0 mb-5">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/maxima.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->

    <!-- call section -->
    <section class="w3l-call-to-action-6" style="margin-bottom:-50px">
        <div class="call-sec-style py-5">
            <div class="container-ibm py-md-4 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <h3 class="title-style  text-md-center text-left mb-4 mb-md-2" style="color:#9B191B">About Us</h3>
                            <p class="text-md-center text-left">The current Covid-19 pandemic does not only affect the health sector but also affects the social sector of the Indonesian people. The limitations of these social activities have changed many things, one example is education activities that must be done online. Communication that occurs in Indonesian society at this time is also considered not good or ineffective so that it is enough to cause unrest in the community. The contributors will create social movements that will certainly help the community in dealing with unrest in this social field.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->

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
                <div class="content-sec-11">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading text-left mb-sm-5 mb-2">
                                <h3 class="title-style mb-2" style="color:#9B191B;">Programs</h3>
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-6">
                            <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 764.png')" class="profile-card-2">
                                <div class="wrap-profile mx-5">
                                    <div class="profile-name ">Mini MBA Social Innovation</div>
                                    <div class="profile-username ">The Mini MBA Social Innovation is a fast-track mini MBA format that aims to strengthen strategic insights and key knowledge that drive social innovation, as well as to build a network of leaders and ecosystem networks that drive social transformation.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">

                                <div class="wrap-profile mx-5">
                                    <div class="profile-name ">Mini MBA by Rumah Amal Salman</div>
                                    <div class="profile-username  mb-4">Rumah Amal Salman is an institution that manages zakat, infaq, alms, and other virtues that focus on the fields of education and technology.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 764.png')" class="profile-card-2">
                                <div class="wrap-profile mx-5">
                                    <div class="profile-name ">More Initiative Programs</div>
                                    <div class="profile-username ">The Mini MBA Social Innovation is a fast-track mini MBA format that aims to strengthen strategic insights and key knowledge that drive social innovation, as well as to build a network of leaders and ecosystem networks that drive social transformation.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">
                                <div class="wrap-profile mx-5">
                                    <div class="profile-name ">Admission</div>
                                    <div class="profile-username ">The Mini MBA Social Innovation is a fast-track mini MBA format that aims to strengthen strategic insights and key knowledge that drive social innovation, as well as to build a network of leaders and ecosystem networks that drive social transformation.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- //call section -->



    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-sec-style ">
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
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="section-heading text-center mb-sm-5 mb-2">
                                <h3 class="title-style mb-2 text-left " style="color:#9B191B; ">Innovation</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="text-left text-md-center img-responsive my-4" style="width:90px" src="<?= base_url('assets'); ?>/images/premium-quality 1.png">
                            <h5 class="mb-2" style="color:#000;"><b>More Initiative Projects</b></h5>
                            <h6 style="color:#000;">In this program, the innovative results that can be seen from the learning activity process are participants who are fostered to be able to gain new insights and knowledge, skills in technology, and skills needed in the 21st Century.</h6>
                        </div>
                        <div class="col-lg-6">
                            <img class="text-left text-md-center img-responsive my-4" style="width:90px" src="<?= base_url('assets'); ?>/images/knowledge 1.png">
                            <h5 class="mb-2" style="color:#000;"><b>Impact</b></h5>
                            <h6 style="color:#000;">From the initiative projects that have been described previously, the positive impact that can be shared with the general public is that the students who are fostered can become people who have broad knowledge.</h6>
                        </div>
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
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="section-heading mb-sm-5 mb-2">
                                <h3 class="title-style mb-2" style="color:#9B191B;">Event</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 mb-3">
                            <img class="center mb-3" src="<?= base_url('assets'); ?>/images/Rectangle 792.png">
                            <h6 style="color:#9C1718"><i class="fa fa-calendar-o" aria-hidden="true"></i><b> 11 May 2021</b></h6>
                            <h6 style="color:black"><b>Webinar Technology</b></h6>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <img class="center mb-3" src="<?= base_url('assets'); ?>/images/Rectangle 734.png">
                            <h6 style="color:#9C1718"><i class="fa fa-calendar-o" aria-hidden="true"></i><b> 20 May 2021</b></h6>
                            <h6 style="color:black"><b>Carry On Indonesian Education</b></h6>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <img class="center mb-3" src="<?= base_url('assets'); ?>/images/Rectangle 775.png">
                            <h6 style="color:#9C1718"><i class="fa fa-calendar-o" aria-hidden="true"></i><b> 31 May 2021</b></h6>
                            <h6 style="color:black"><b>Cooperation with Australian companies</b></h6>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <img class="center mb-3" src="<?= base_url('assets'); ?>/images/Rectangle 791.png">
                            <h6 style="color:#9C1718"><i class="fa fa-calendar-o" aria-hidden="true"></i><b> 06 June 2021</b></h6>
                            <h6 style="color:black"><b>SMARTIES Awards Indonesia</b></h6>
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px">
                        <div class="col-lg-3 mb-3">
                            <img class="center mb-3" src="<?= base_url('assets'); ?>/images/Rectangle 792.png">
                            <h6 style="color:#9C1718"><i class="fa fa-calendar-o" aria-hidden="true"></i><b> 11 May 2021</b></h6>
                            <h6 style="color:black"><b>Webinar Technology</b></h6>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <img class="center mb-3" src="<?= base_url('assets'); ?>/images/Rectangle 734.png">
                            <h6 style="color:#9C1718"><i class="fa fa-calendar-o" aria-hidden="true"></i><b> 20 May 2021</b></h6>
                            <h6 style="color:black"><b>Carry On Indonesian Education</b></h6>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <img class="center mb-3" src="<?= base_url('assets'); ?>/images/Rectangle 775.png">
                            <h6 style="color:#9C1718"><i class="fa fa-calendar-o" aria-hidden="true"></i><b> 31 May 2021</b></h6>
                            <h6 style="color:black"><b>Cooperation with Australian companies</b></h6>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <img class="center mb-3" src="<?= base_url('assets'); ?>/images/Rectangle 791.png">
                            <h6 style="color:#9C1718"><i class="fa fa-calendar-o" aria-hidden="true"></i><b> 06 June 2021</b></h6>
                            <h6 style="color:black"><b>SMARTIES Awards Indonesia</b></h6>
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