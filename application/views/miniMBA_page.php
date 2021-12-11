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

	<!-- inner banner -->
	<!-- <div class="inner-banner">
        <div class="w3l-breadcrumb">
            <div class="container h-50">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2" style="text-align:left">Shaping the best generation in the digital era</h4>
                <p style="color:white;text-align:left !important">Shaping the best generation in the digital era</p>
            </div>
        </div>
    </div> -->
	<!-- //inner banner -->

	<section class="w3l-call-to-action-6 pt-5 ">
		<div class="call-sec-style pt-5">
			<div class="container-ibm py-md-4 py-3 bg-minimba">
				<div class="banner-minimba">
					<div class="pb-3">Program</div>
					<h3 class="font-weight-bold">Mini MBA Social Innovation</h3>
				</div>
			</div>
		</div>
	</section>

	<!-- call section -->
	<section class=" w3l-call-to-action-6 ">
		<div class=" call-sec-style py-5">
			<div class="container-ibm py-md-4 py-3">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="section-heading text-center mb-sm-5 mb-4">
							<h3 class="title-style  text-md-center text-left mb-4 mb-md-2 pt-5 pb-3" style="color:#215AA8">About This Program</h3>
							<p class="text-md-center text-left">The Mini MBA Social Innovation is a fast-track MBA
								format that aims to strengthen strategic insights and key knowledge that drive social
								innovation, as well as to build a network of leaders and ecosystem networks that drive
								social transformation. This two-month business intensive program provides 20 business
								courses and equips business leaders with the skills needed to execute a hands-on
								project. A great foundation for expanding the social impact of each of your initiatives
								and businesses.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //call section -->

	<section class=" w3l-call-to-action-6 ">
		<div class=" call-sec-style">
			<div class="d-flex container justify-content-lg-between justify-content-start flex-lg-row flex-column ">
				<div class="isi-container-mba ">
					<div><img src="<?= base_url('assets'); ?>/images/stars 1.png" alt=""></div>
					<div class="py-4 font-weight-bold">Objective</div>
					<div class="button-container-mba">
						<a href="">Lihat Detail</a>
					</div>
				</div>
				<div class="isi-container-mba">
					<div><img src="<?= base_url('assets'); ?>/images/rocket 1.png" alt=""></div>
					<div class="py-4 font-weight-bold">Outcome</div>
					<div class="button-container-mba">
						<a href="">Lihat Detail</a>
					</div>
				</div>
				<div class="isi-container-mba">
					<div><img src="<?= base_url('assets'); ?>/images/conquest 1.png" alt=""></div>
					<div class="py-4 font-weight-bold">Output</div>
					<div class="button-container-mba">
						<a href="">Lihat Detail</a>
					</div>
				</div>
			</div>

		</div>
	</section>


	<!-- call section -->
	<section class="w3l-call-to-action-6">
		<div class="call-sec-style pt-5">
			<div class="container py-md-4 py-3">
				<div class="content-sec-11 py-5 text-center" style="background-color: #F5F7FB;">
					<div class="row">
						<div class="col-md-12">
							<div class="section-heading text-center mb-2">
								<h3 class="title-style mb-2" style="color:#215AA8;">Programs</h3>
							</div>
						</div>
						<div class="col-md-12">
							<div class="section-heading text-center mb-sm-5 mb-4">
								<p>We prepare the best program to produce great leaders for the future <br> and welcome
									the acceleration of technology in Indonesia.</p>
							</div>
						</div>
					</div>
					<div class="row justify-content-between align-items-center">
						<div class="col-md-4">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 764.png')" class="profile-card-2">
								<div class="wrap-profile text-left mx-5">
									<a href="<?= base_url() . 'Homepage/program_detail_mini_mba' ?>">
										<div class="profile-name ">Week 1</div>
										<div class="profile-username ">On Boarding</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">

								<div class="wrap-profile text-left mx-5">
									<a href="<?= base_url() . 'Homepage/program_detail_mini_mba' ?>">
										<div class="profile-name ">Week 1</div>
										<div class="profile-username ">On Boarding</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">

								<div class="wrap-profile text-left mx-5">
									<a href="<?= base_url() . 'Homepage/program_detail_mini_mba' ?>">
										<div class="profile-name ">Week 1</div>
										<div class="profile-username ">On Boarding</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 764.png')" class="profile-card-2">
								<div class="wrap-profile text-left mx-5">
									<a href="<?= base_url() . 'Homepage/program_detail_mini_mba' ?>">
										<div class="profile-name ">Week 1</div>
										<div class="profile-username ">On Boarding</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">

								<div class="wrap-profile text-left mx-5">
									<a href="<?= base_url() . 'Homepage/program_detail_mini_mba' ?>">
										<div class="profile-name ">Week 1</div>
										<div class="profile-username ">On Boarding</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">

								<div class="wrap-profile text-left mx-5">
									<a href="<?= base_url() . 'Homepage/program_detail_mini_mba' ?>">
										<div class="profile-name ">Week 1</div>
									</a>
									<div class="profile-username ">On Boarding</div>
								</div>
							</div>
						</div>
					</div>
					<div class="button-container-mba">
						<a href="<?= base_url("Homepage/program_mini_mba"); ?>">Lihat Detail</a>
					</div>
				</div>
			</div>
	</section>
	<!-- //call section -->

	<!-- call section -->
	<section class="w3l-call-to-action-6">
		<div class="call-sec-style">
			<div class="container py-md-4 py-3">
				<div class="content-sec-11 py-5 text-center" style="background-color: #F5F7FB;">
					<div class="row">
						<div class="col-md-12">
							<div class="section-heading text-center mb-2">
								<h3 class="title-style mb-5" style="color:#215AA8;">Facilitator</h3>
							</div>
						</div>
					</div>
					<div class="row justify-content-center align-items-center text-left mb-5">
						<div class="col-md-3 col-6 mb-3">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Fasilitator1.png')" class="profile-card-3">
							</div>
							<div class="font-weight-bold">Najeela Shihab</div>
							<div>Founder <br> Sekolah Murid Merdeka
							</div>
						</div>
						<div class="col-md-3 col-6  mb-3">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Fasilitator2.png')" class="profile-card-3">
							</div>
							<div class="font-weight-bold">Dr. Kuntoro Mangkusubroto</div>
							<div>Kepala UKP-PPP<br>
								2010-2014
							</div>
						</div>
						<div class="col-md-3 col-6  mb-3">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Fasilitator3.png')" class="profile-card-3">
							</div>
							<div class="font-weight-bold">Salman Sukabat</div>
							<div>CEO PT. Paragon <br>
								Technology and Innovation
							</div>
						</div>
						<div class="col-md-3 col-6  mb-3">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Fasilitator4.png')" class="profile-card-3">
							</div>
							<div class="font-weight-bold">Dr. Donald Lantu</div>
							<div>Associate <br> Professor
							</div>
						</div>

					</div>
					<div class="row justify-content-between align-items-center text-left">
						<div class="col-md-3 col-6  mb-3">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Fasilitator5.png')" class="profile-card-3">
							</div>
							<div class="font-weight-bold">Shobby Lawalata</div>
							<div>Learning Division <br>
								Manager YUID
							</div>
						</div>
						<div class="col-md-3 col-6  mb-3">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Fasilitator6.png')" class="profile-card-3">
							</div>
							<div class="font-weight-bold">Hasnul Suhaimi, MBA</div>
							<div>Komisaris Utama<br>
								PT Eureka
							</div>
						</div>
						<div class="col-md-3 col-6  mb-3">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Fasilitator7.png')" class="profile-card-3">
							</div>
							<div class="font-weight-bold">Dr. Yudo Anggoro</div>
							<div>Assistant Professor
							</div>
						</div>
						<div class="col-md-3 col-6  mb-3">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Fasilitator8.png')" class="profile-card-3">
							</div>
							<div class="font-weight-bold">Alfatih Timur</div>
							<div>Kitabisa
							</div>
						</div>

					</div>
					<div class="button-container-mba">
						<a href="<?= base_url() . 'Homepage/facilitator_mini_mba' ?>">Lihat Detail</a>
					</div>
				</div>
			</div>
	</section>
	<!-- //call section -->

	<!-- call section -->
	<section class="w3l-call-to-action-6 ">
		<div class="call-sec-style py-5">
			<div class="container-ibm py-md-4 py-3">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="section-heading text-center mb-sm-5 mb-4">
							<h3 class="title-style mb-2" style="color:#215AA8">Partnership</h3>
						</div>
					</div>
				</div>
				<div class="content-sec-11">
					<div class="row justify-content-center align-items-center">
						<div class="col-3 col-md-2 mb-5 ">
							<img class="center img-responsive" src="<?= base_url('assets'); ?>/images/sbmitb.png">
						</div>
						<div class="col-3 col-md-2  mt-3 mt-md-0 mb-5">
							<img class="center img-responsive" src="<?= base_url('assets'); ?>/images/paragon.png">
						</div>
						<div class="col-3 col-md-2 mb-5 ">
							<img class="center img-responsive" src="<?= base_url('assets'); ?>/images/pemimpin.png">
						</div>
						<div class="col-3 col-md-2 mb-5 ">
							<img style="width:50%" class="center img-responsive" src="<?= base_url('assets'); ?>/images/fsa.png">
						</div>
						<div class="col-3 col-md-2  mt-3 mt-md-0 mb-5">
							<img class="center img-responsive" src="<?= base_url('assets'); ?>/images/maxima.png">
						</div>
						<div class="col-3 col-md-2 mb-5 ">
							<img class="center img-responsive" src="<?= base_url('assets'); ?>/images/everida.png">
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