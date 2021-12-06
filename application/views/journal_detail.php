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
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2" style="text-align:left">Journals & Insight</h4>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <!-- call section -->
    <section class="w3l-call-to-action-6" style="margin-top:5%;margin-bottom:5%;">
        <div class="call-sec-style py-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="section-heading text-center mb-sm-5 mb-2">
                        <h3 class="title-style mb-2" style="color:#9B191B;">Nanoparticles: Properties, applications and toxicities</h3>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="d-flex justify-content-around justify-content-md-between">
                        <a href="<?= base_url('assets'); ?>/pdf/sample.pdf" target="_blank" style="color:blue;">View PDF</a>
                        <a href="<?= base_url('assets'); ?>/pdf/sample.pdf" download="sample" class="px-2 py-1" style="background-color: #9B191B; color:white;border-radius: 12px;">Download PDF</a>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center" style="margin-top:3%">
                <div class="col-md-10">
                    <p style="text-align: justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit, velit, nibh neque ultricies massa sit. Nullam posuere non consectetur tristique. Facilisis ipsum erat lorem lobortis aliquam urna non. Est, pharetra viverra tempus est et. Ac in suspendisse gravida ut arcu porttitor bibendum turpis. Magnis enim eu nunc varius feugiat. Metus, leo sed etiam molestie diam. Luctus ut massa tempus eget sit aenean in dolor. Massa accumsan pulvinar a sit venenatis viverra pellentesque viverra.
                    </p>
                    <p style="text-align: justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit, velit, nibh neque ultricies massa sit. Nullam posuere non consectetur tristique. Facilisis ipsum erat lorem lobortis aliquam urna non. Est, pharetra viverra tempus est et. Ac in suspendisse gravida ut arcu porttitor bibendum turpis. Magnis enim eu nunc varius feugiat. Metus, leo sed etiam molestie diam. Luctus ut massa tempus eget sit aenean in dolor. Massa accumsan pulvinar a sit venenatis viverra pellentesque viverra.
                    </p>
                    <p style="text-align: justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit, velit, nibh neque ultricies massa sit. Nullam posuere non consectetur tristique. Facilisis ipsum erat lorem lobortis aliquam urna non. Est, pharetra viverra tempus est et. Ac in suspendisse gravida ut arcu porttitor bibendum turpis. Magnis enim eu nunc varius feugiat. Metus, leo sed etiam molestie diam. Luctus ut massa tempus eget sit aenean in dolor. Massa accumsan pulvinar a sit venenatis viverra pellentesque viverra.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit, velit, nibh neque ultricies massa sit. Nullam posuere non consectetur tristique. Facilisis ipsum erat lorem lobortis aliquam urna non. Est, pharetra viverra tempus est et. Ac in suspendisse gravida ut arcu porttitor bibendum turpis. Magnis enim eu nunc varius feugiat. Metus, leo sed etiam molestie diam. Luctus ut massa tempus eget sit aenean in dolor. Massa accumsan pulvinar a sit venenatis viverra pellentesque viverra.
                    </p>
                    <p>
                        <img src="<?= base_url('assets'); ?>/images/image 14.png" class="center">
                    </p>
                    <p style="text-align: justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit, velit, nibh neque ultricies massa sit. Nullam posuere non consectetur tristique. Facilisis ipsum erat lorem lobortis aliquam urna non. Est, pharetra viverra tempus est et. Ac in suspendisse gravida ut arcu porttitor bibendum turpis. Magnis enim eu nunc varius feugiat. Metus, leo sed etiam molestie diam. Luctus ut massa tempus eget sit aenean in dolor. Massa accumsan pulvinar a sit venenatis viverra pellentesque viverra.
                    </p>
                </div>
            </div>


        </div>
    </section>
    <!-- //call section -->

    <!-- footer -->
    <?php $this->load->view('templates/footer') ?>

</body>

</html>