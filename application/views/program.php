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
    <style>
        .profile-card-2 {
            max-width: 100%;
            background-position: center;
            overflow: hidden;
            position: relative;
            margin: 2px auto;
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
            bottom: 100px;
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
    </style>
</head>

<body>
    <!--header-->
    <?php $this->load->view('templates/navbar') ?>

    <!--//header-->

    <!-- inner banner -->
    <div class="inner-banner">
        <div class="w3l-breadcrumb">
            <div class="container">
                <p style="color:aqua;text-align:left !important">Program</p>
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2" style="text-align:left;color:aqua !important;">Rumah Amal Salman</h4>
            </div>
        </div>
    </div>
    <!-- //inner banner -->


    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-sec-style py-5">
            <div class="container-ibm py-md-4 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <h3 class="title-style mb-2" style="color:aqua">Partnership</h3>
                        </div>
                    </div>
                </div>
                <div class="content-sec-11">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-2 mb-5">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/everida.png">
                        </div>
                        <div class="col-3 col-md-2 mb-5">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/pemimpin.png">
                        </div>
                        <div class="col-3 col-md-2 mb-5">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/sbmitb.png">
                        </div>
                        <div class="col-3 col-md-2 mt-3 mt-md-0 mb-5">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/paragon.png">
                        </div>
                        <div class="col-3 col-md-2 mt-3 mt-md-0 mb-5">
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
                            <h3 class="title-style mb-2" style="color:aqua">About This Program</h3>
                            <p>The current Covid-19 pandemic does not only affect the health sector but also affects the social sector of the Indonesian people. The limitations of these social activities have changed many things, one example is education activities that must be done online. Communication that occurs in Indonesian society at this time is also considered not good or ineffective so that it is enough to cause unrest in the community. The contributors will create social movements that will certainly help the community in dealing with unrest in this social field.</p>
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

                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12">
                        <div class="section-heading text-center mb-sm-5 mb-2">
                            <h3 class="title-style mb-2 text-left" style="color:aqua; ">Program Content</h3>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 764.png')" class="profile-card-2">
                            <div class="wrap-profile mx-5">
                                <div class="profile-name ">Web Binar Tecknologi</div>
                                <div class="profile-username ">Festifal tentang edukasi tentang teknologi yang berlangsung 4 hari</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">

                            <div class="wrap-profile mx-5">
                                <div class="profile-name ">Web Binar Tecknologi</div>
                                <div class="profile-username ">Festifal tentang edukasi tentang teknologi yang berlangsung 4 hari</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 764.png')" class="profile-card-2">
                            <div class="wrap-profile mx-5">
                                <div class="profile-name ">Web Binar Tecknologi</div>
                                <div class="profile-username ">Festifal tentang edukasi tentang teknologi yang berlangsung 4 hari</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">
                            <div class="wrap-profile mx-5">
                                <div class="profile-name ">Web Binar Tecknologi</div>
                                <div class="profile-username ">Festifal tentang edukasi tentang teknologi yang berlangsung 4 hari</div>
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

                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12">
                        <div class="section-heading text-center mb-sm-5 mb-2">
                            <h3 class="title-style mb-2 text-left" style="color:aqua; ">Fasilitator</h3>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 764.png')" class="profile-card-2">
                            <div class="wrap-profile mx-5">
                                <div class="profile-name ">Najeela Shiab</div>
                                <div class="profile-username ">Founder Sekolah Murid Merdeka</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">
                            <div class="wrap-profile mx-5">
                                <div class="profile-name ">Dr. Kuntoro Mangkusubroto</div>
                                <div class="profile-username ">Kepala UKP-UPP</div>
                            </div>
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