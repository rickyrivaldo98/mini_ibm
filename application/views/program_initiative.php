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
			z-index: 2;
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

		.img-overlay {
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			opacity: .8;
			background: linear-gradient(360deg, rgba(0, 0, 0, 0.6) 20.31%, rgba(0, 0, 0, 0) 100%),
				linear-gradient(180deg, rgba(7, 176, 200, 0.12) 21.15%, rgba(69, 196, 214, 0.4) 66.46%),
				linear-gradient(0deg, #C4C4C4, #C4C4C4),
				linear-gradient(0deg, #FFFFFF, #FFFFFF);


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
				<div class="content-sec-11 py-5 px-5 text-center" style="background-color: #F5F7FB;border-radius:18px">
					<div class="row">
						<div class="col-md-12">
							<div class="section-heading text-center mb-5">
								<h3 class="title-style mb-2" style="color:#9C1718;">Programs Content</h3>
								<p>We prepare the best program to produce great leaders for the future and welcome <br>
									the acceleration of technology in Indonesia.</p>
							</div>
						</div>
					</div>
					<div class="row justify-content-between align-items-center">
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/evertalks.png')"
								class="profile-card-2">
								<div class="wrap-profile text-left mx-5">
									<a href=" <?= base_url() . 'Homepage/program_initiative_details' ?>">
										<div class="profile-name ">Evertalks</div>
										<div class="profile-username ">Program EverTalks yang merupakan sebuah program
											ruang diskusi virtual yang dilaksanakan setiap bulan dalam rangka memberikan
											wadah untuk berbagai elemen masyarakat dan tokoh Indonesia untuk saling
											.....
										</div>
									</a>
								</div>
								<div class="img-overlay"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/evertalks2.png')"
								class="profile-card-2">
								<div class="wrap-profile text-left mx-5">
									<a href=" <?= base_url() . 'Homepage/program_initiative_details' ?>">
										<div class="profile-name ">Evertalks</div>
										<div class="profile-username ">Program EverTalks yang merupakan sebuah program
											ruang diskusi virtual yang dilaksanakan setiap bulan dalam rangka memberikan
											wadah untuk berbagai elemen masyarakat dan tokoh Indonesia untuk saling
											.....
										</div>
									</a>
								</div>
								<div class="img-overlay"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/evertalks.png')"
								class="profile-card-2">
								<div class="wrap-profile text-left mx-5">
									<a href=" <?= base_url() . 'Homepage/program_initiative_details' ?>">
										<div class="profile-name ">Evertalks</div>
										<div class="profile-username ">Program EverTalks yang merupakan sebuah program
											ruang diskusi virtual yang dilaksanakan setiap bulan dalam rangka memberikan
											wadah untuk berbagai elemen masyarakat dan tokoh Indonesia untuk saling
											.....
										</div>
									</a>
								</div>
								<div class="img-overlay"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/evertalks2.png')"
								class="profile-card-2">
								<div class="wrap-profile text-left mx-5">
									<a href=" <?= base_url() . 'Homepage/program_initiative_details' ?>">
										<div class="profile-name ">Evertalks</div>
										<div class="profile-username ">Program EverTalks yang merupakan sebuah program
											ruang diskusi virtual yang dilaksanakan setiap bulan dalam rangka memberikan
											wadah untuk berbagai elemen masyarakat dan tokoh Indonesia untuk saling
											.....s
										</div>
									</a>
								</div>
								<div class="img-overlay"></div>
							</div>
						</div>






					</div>
				</div>
			</div>
	</section>
	<!-- //call section -->
	<!-- call section -->
	<section class="w3l-call-to-action-6 pt-5">
		<div class="call-sec-style">
			<div class="container py-md-4 py-3">
				<div class="content-sec-11 py-5 px-5 text-center" style="background-color: #F5F7FB;border-radius:18px">
					<div class="row">
						<div class="col-md-12">
							<div class="section-heading text-center mb-5">
								<h3 class="title-style mb-2" style="color:#9C1718;">Innovation Content</h3>
								<p>We prepare the best program to produce great leaders for the future and welcome the
									acceleration of technology in Indonesia.</p>
							</div>
						</div>
					</div>
					<div class="row justify-content-between align-items-center">
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/desagame.png')"
								class="profile-card-2">
								<div class="wrap-profile text-left mx-5">
									<a href=" <?= base_url() . 'Homepage/program_detail_kades' ?>">
										<div class="profile-name ">Pak Kades </div>
										<div class="profile-username ">Games ala Harvest Moon versi Evdu dengan kearifan
											lokal. Dengan bermain games Pak Kades ini kita dapat mengetahui hasil DISC
											yang dimiliki. Everidea Education mentransformasi alat tes yang pada umumnya
											......
										</div>
									</a>
								</div>
								<div class="img-overlay"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/desagame.png')"
								class="profile-card-2">
								<div class="wrap-profile text-left mx-5">
									<a href=" <?= base_url() . 'Homepage/program_detail_kades' ?>">
										<div class="profile-name ">Pak Kades </div>
										<div class="profile-username ">Games ala Harvest Moon versi Evdu dengan kearifan
											lokal. Dengan bermain games Pak Kades ini kita dapat mengetahui hasil DISC
											yang dimiliki. Everidea Education mentransformasi alat tes yang pada umumnya
											......
										</div>
									</a>
								</div>
								<div class="img-overlay"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/teachingstyle.png')"
								class="profile-card-2">
								<div class="wrap-profile text-left mx-5">
									<a href=" <?= base_url() . 'Homepage/program_detail_digital_assesment' ?>">
										<div class="profile-name ">Digital Assesment Tools </div>
										<div class="profile-username ">Gaya Mengajar merupakan alat penilaian. Everidea
											Education mengadaptasi dari David Wall 2007 yang berjudul “Determining Your
											Teaching Style”
											.......
										</div>
									</a>
								</div>
								<div class="img-overlay"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/leadership.png')"
								class="profile-card-2">
								<div class="wrap-profile text-left mx-5">
									<a href=" <?= base_url() . 'Homepage/program_detail_digital_assesment_2' ?>">
										<div class="profile-name ">Digital Assesment Tools </div>
										<div class="profile-username ">Everidea Education mengaptasi kembali
											berkolaborasi dengan pemimpin.id yaitu “Leadership Style Quiz”. Leadership
											style ini diadaptasi dari Jurnal “Leadership style of sustainability
											.....
										</div>
									</a>
								</div>
								<div class="img-overlay"></div>
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