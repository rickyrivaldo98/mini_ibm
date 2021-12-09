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
			margin-bottom: 25px;
			/* cursor: pointer; */
			height: 300px;
			background-position: center;
			background-size: cover;
			transition: all linear 0.25s;
			border-radius: 20px;
		}

		.profile-card-2 img {
			transition: all linear 0.25s;
		}

		.profile-card-3 {

			max-width: 100%;
			background-position: center;
			overflow: hidden;
			position: relative;
			margin-bottom: 10px;
			/* cursor: pointer; */
			width: 140px;
			height: 140px;
			background-position: center;
			background-size: cover;
			transition: all linear 0.25s;
		}

		.profile-card-3 img {
			transition: all linear 0.25s;
		}



		.profile-card-2 .wrap-profile {
			position: absolute;
			bottom: 30px;
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

	<!-- call section -->
	<section class="w3l-call-to-action-6 pt-5">
		<div class="call-sec-style">
			<div class="container py-md-4 py-3">
				<div class="content-sec-11 py-5 text-center" style="background-color: #F5F7FB;">
					<div class="row">
						<div class="col-md-12">
							<div class="section-heading text-center mb-5">
								<h3 class="title-style mb-2" style="color:#07B0C8;">Programs Content</h3>
								<p>We prepare the best program to produce great leaders for the future and welcome <br> the acceleration of technology in Indonesia.</p>
							</div>
						</div>
					</div>
					<div class="row justify-content-between align-items-center">
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 764.png')" class="profile-card-2">
								<div class="wrap-profile text-left mx-5">
									<a href=" <?= base_url() . 'Homepage/program_initiative_details' ?>">
										<div class="profile-name ">Week 1</div>
										<div class="profile-username ">Festival Edukasi Tentang teknologi yang
											berlangsung 4
											hari ini, akan memberi kamu pengetahuan dan ilmu banyak sekali!</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">

								<div class="wrap-profile text-left mx-5">
									<a href=" <?= base_url() . 'Homepage/program_initiative_details' ?>">
										<div class="profile-name ">Webinar Technology</div>
									</a>
									<div class="profile-username ">Festival Edukasi Tentang teknologi yang berlangsung 4
										hari ini, akan memberi kamu pengetahuan dan ilmu banyak sekali!</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">

								<div class="wrap-profile text-left mx-5">
									<a href=" <?= base_url() . 'Homepage/program_initiative_details' ?>">
										<div class="profile-name ">Webinar Technology</div>
									</a>
									<div class="profile-username ">Festival Edukasi Tentang teknologi yang berlangsung 4
										hari ini, akan memberi kamu pengetahuan dan ilmu banyak sekali!</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">

								<div class="wrap-profile text-left mx-5">
									<a href=" <?= base_url() . 'Homepage/program_initiative_details' ?>">
										<div class="profile-name ">Webinar Technology</div>
									</a>
									<div class="profile-username ">Festival Edukasi Tentang teknologi yang berlangsung 4
										hari ini, akan memberi kamu pengetahuan dan ilmu banyak sekali!</div>
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