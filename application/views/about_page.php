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

    </style>
</head>

<body>
    <!--header-->
    <?php $this->load->view('templates/navbar') ?>

    <!--//header-->

    <!-- inner banner -->
    <div class="inner-banner-about">
        <div class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2" style="text-align:left">Get In Touch</h4>
                <p style="color:white;text-align:left !important">Contact us if you have any questions or suggestions</p>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <!-- form -->
    <div class="form-about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 form-contact-info">
                    <div class="wrapper-form-info">
                        <div class="row">
                            <div class="col-12">
                                <h4 style="font-weight: 600;">Send A Message</h4>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <input type="text" placeholder="First Name">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="Last Name">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="Phone">
                            </div>
                            <div class="col-12 my-5">
                                <label style="color: #C0C0C0;" for="textarea">How can I help you ?</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                            <div class=" col-12 text-center text-md-left  ">
                                <a id="send-button" href="" class="btn btn-danger btn-block btn-md-nonblock">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 contact-info">
                    <div class="wrapper-contact-info">
                        <div class="row">
                            <div class="col-12">
                                <h4 style="font-weight: 600;">Contact Info</h4>
                            </div>
                        </div>

                        <div class="row wrap-icon-about">
                            <div class="col-2">
                                <div class="icon-box">
                                    <a href="#facebook" class="facebook"><span class="fa fa-phone"></span></a>
                                </div>
                            </div>
                            <div class="col-10">
                                (021) 987654321
                            </div>
                        </div>
                        <div class="row  wrap-icon-about">
                            <div class="col-2">
                                <div class="icon-box">
                                    <a href="#facebook" class="facebook"><span class="fa fa-envelope"></span></a>
                                </div>
                            </div>
                            <div class="col-10">
                                <p>
                                    socialinnovation@gmal.com

                                </p>
                            </div>
                        </div>
                        <div class="row wrap-icon-about">
                            <div class="col-2">
                                <div class="icon-box ">
                                    <a href="#facebook" class="facebook"><span class="fa fa-map-marker"></span></a>
                                </div>
                            </div>
                            <div class="col-10">
                                JL. Monas No.3 RT.10/RW.05, Jakarta Pusat
                                <p id="badge-maps">See on Maps</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-2">
                                    <div class="icon-box">
                                        <a href="#facebook" class="facebook"><span class="fa fa-phone"></span></a>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="icon-box">
                                        <a href="#facebook" class="facebook"><span class="fa fa-instagram"></span></a>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="icon-box">
                                        <a href="#facebook" class="facebook"><span class="fa fa-youtube"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>



    <!-- call section -->
    <section class="w3l-call-to-action-6" style="margin-bottom:5%;">
        <div class="call-sec-style py-5">
            <div class="container-ibm py-md-4 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <h3 class="title-style mb-2" style="color:#9B191B">Our Purpose</h3>
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 733.png">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <!-- <h3 class="title-style mb-2" style="color:#9B191B">Our Purpose</h3> -->
                            <p style="text-align: justify; margin-top:50px">The current Covid-19 pandemic does not only affect the health sector but also affects the social sector of the Indonesian people. The limitations of these social activities have changed many things, one example is education activities that must be done online. Communication that occurs in Indonesian society at this time is also considered not good or ineffective so that it is enough to cause unrest in the community. The contributors will create social movements that will certainly help the community in dealing with unrest in this social field.</p>
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