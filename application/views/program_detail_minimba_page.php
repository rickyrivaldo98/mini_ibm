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

</head>


<body>
    <!--header-->
    <?php $this->load->view('templates/navbar') ?>

    <!--//header-->


    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-sec-style py-5">
            <div class="container py-md-4 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <!-- <p>We prepare the best program to produce great leaders for the future and welcome the acceleration of technology in Indonesia.</p> -->
                        </div>
                    </div>
                </div>
                <div class="content-sec-11" style="position: relative">
                    <div class="d-flex align-items-center">
                        <div class="title-style">Project Implementation</div>
                        <!-- <h6 style="color:#9C1718" class="ml-auto news-detail-tanggal"><i class="fa fa-calendar" aria-hidden="true"></i><b> 20 May 2021</b></h6> -->
                    </div>
                    <img class="center mt-4 img-responsive" src="<?= base_url('assets'); ?>/images/bgnewsdetails.png">
                    <div style="background-color: #F5F7FB; margin-top:30px; padding:80px 30px">
                        <h3 class="title-style mb-2" style="color:#9B191B">Program Content</h3>
                        <div class="mt-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel imperdiet neque. Sed id finibus nisi. Vivamus leo augue, faucibus quis enim in, condimentum imperdiet mi. Nullam accumsan feugiat lectus iaculis mollis. Etiam nec mauris ligula. Duis dolor nisi, sodales posuere pellentesque id, posuere quis sapien. Phasellus eleifend magna vel tortor dignissim vestibulum at ac leo. Cras mattis mi quis ligula porttitor, et euismod eros luctus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed imperdiet accumsan nisl nec rhoncus. Sed vel diam mollis, eleifend massa nec, vestibulum leo. Nulla quis enim lectus. Nullam tincidunt varius diam et varius. Fusce lacinia sed sem ac laoreet. Aliquam erat volutpat.
                        </div>
                        <div class="mt-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel imperdiet neque. Sed id finibus nisi. Vivamus leo augue, faucibus quis enim in, condimentum imperdiet mi. Nullam accumsan feugiat lectus iaculis mollis. Etiam nec mauris ligula. Duis dolor nisi, sodales posuere pellentesque id, posuere quis sapien. Phasellus eleifend magna vel tortor dignissim vestibulum at ac leo. Cras mattis mi quis ligula porttitor, et euismod eros luctus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed imperdiet accumsan nisl nec rhoncus. Sed vel diam mollis, eleifend massa nec, vestibulum leo. Nulla quis enim lectus. Nullam tincidunt varius diam et varius. Fusce lacinia sed sem ac laoreet. Aliquam erat volutpat.
                        </div>
                        <div class="mt-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel imperdiet neque. Sed id finibus nisi. Vivamus leo augue, faucibus quis enim in, condimentum imperdiet mi. Nullam accumsan feugiat lectus iaculis mollis. Etiam nec mauris ligula. Duis dolor nisi, sodales posuere pellentesque id, posuere quis sapien. Phasellus eleifend magna vel tortor dignissim vestibulum at ac leo. Cras mattis mi quis ligula porttitor, et euismod eros luctus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed imperdiet accumsan nisl nec rhoncus. Sed vel diam mollis, eleifend massa nec, vestibulum leo. Nulla quis enim lectus. Nullam tincidunt varius diam et varius. Fusce lacinia sed sem ac laoreet. Aliquam erat volutpat.
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