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
	<link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<!-- //google-fonts -->
	<!-- Template CSS Style link -->
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/css/style-starter.css">
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/css/custom.css">
    <style>
        .article-gambar img {
            max-width:70%;
            width: 500px;
            min-width: 220px;
            margin-bottom: 20px;
        }
    </style>
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
						<div class="title-style">Programs Content</div>
						<!-- <h6 style="color:#9C1718" class="ml-auto news-detail-tanggal"><i class="fa fa-calendar" aria-hidden="true"></i><b> 20 May 2021</b></h6> -->
					</div>
					<img class="center mt-4 img-responsive" src="<?= base_url('assets'); ?>/images/bgnewsdetails.png">
					<div style="background-color: #F5F7FB; margin-top:30px; padding:80px 30px">
						<h3 class="title-style mb-2" style="color:#9B191B">Leaders Cafe (Hosted by Pemimpin.id)
						</h3>
						<div class="mt-5">
							The Leaders Cafe is an open-for-all one month leadership program. Gathering students and
							fresh graduates from all over Indonesia to connect, learn, and solve real social problems.
							By using two-way communication learning, case-based, and less strict rules, this program is
							expected to help distribute knowledge for every student from all over Indonesia to become
							future-ready leaders.

						</div>
						<div class="mt-5">
							In this program, you will meet notable speakers, inspiring mentors, and highly-motivated
							peers who will guide you through your process to finding you. This program uses a syllabus
							established by educational thought leaders. The syllabus will be the outcome of significant
							study into the requirements and ambitions of new leaders. The program will be given to the
							top 200 learners through 2 webinars held in Inspiring Cafés and they will stay engaged with
							us via Discord until graduation day. The top 30 learners will have the privilege to engage
							in 4 cafe classes accompanied by our experienced mentors in a friendly class environment.
							They will get grant funding to solve real social problems by our real client With a
							combination of activity and leisure, enjoyed with people who are supportive of your goals.
						</div>
						<div class="mt-5">
							<div class="article-gambar d-flex flex-md-row justify-content-md-between justify-content-center flex-column">
                                <img class="img-responsive" src="<?= base_url ('assets/images/graduation1.png') ?>" alt="">
                                <img class="img-responsive" src="<?= base_url ('assets/images/graduation1.png') ?>" alt="">

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