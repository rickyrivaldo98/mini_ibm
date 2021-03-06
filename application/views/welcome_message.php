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
								<h2 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2 text-wrap" style="text-align:left; line-height:40px">Shaping the best generation in the digital
									era</h2>
								<p class="text-left mb-3" style="color:white;">Shaping the best generation in the
									digital era</p>
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
								<h2 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2 text-wrap" style="text-align:left; line-height:40px">Shaping the best generation in the digital
									era</h2>
								<p class="text-left mb-3" style="color:white;">Shaping the best generation in the
									digital era</p>
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
								<h2 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2 text-wrap" style="text-align:left; line-height:40px">Shaping the best generation in the digital
									era</h2>
								<p class="text-left mb-3" style="color:white;">Shaping the best generation in the
									digital era</p>
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
		<div class="call-sec-style pt-3 pb-1">
			<div class="container-ibm py-md-5 py-3">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="section-heading text-center mb-4 mb-4">
							<h3 class="title-style mb-2" style="color:#9B191B">Partnership</h3>
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

	<!-- call section -->
	<section class="w3l-call-to-action-6" style="margin-bottom:-50px">
		<div class="call-sec-style py-3">
			<div class="container-ibm py-md-4 py-3">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="section-heading text-center mb-4 mb-4">
							<h3 class="title-style  text-md-center text-left mb-4 mb-md-2" style="color:#9B191B">About
								Us</h3>
							<p class="text-md-center text-left">The current Covid-19 pandemic does not only affect the
								health sector but also affects the social sector of the Indonesian people. The
								limitations of these social activities have changed many things, one example is
								education activities that must be done online. Communication that occurs in Indonesian
								society at this time is also considered not good or ineffective so that it is enough to
								cause unrest in the community. The contributors will create social movements that will
								certainly help the community in dealing with unrest in this social field.</p>
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
						<div class="section-heading text-center mb-4 mb-4">
							<!-- <h3 class="title-style mb-2" style="color:#9B191B">Program Content</h3>
							<p>We prepare the best program to produce great leaders for the future and welcome the acceleration of technology in Indonesia.</p> -->
						</div>
					</div>
				</div>
				<div class="content-sec-11">
					<div class="row">
						<div class="col-md-12">
							<div class="section-heading text-left mb-4 mb-2">
								<h3 class="title-style mb-2" style="color:#9B191B;">Programs</h3>
							</div>
						</div>

					</div>
					<div class="row justify-content-center align-items-center">
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 764.png')" class="profile-card-2">
								<div class="wrap-profile mx-5">
									<a href="<?= base_url('Homepage/detail_leaders_cafe') ?>">
										<div class="profile-name ">Leaders Cafe </div>
										<div class="profile-username ">
											The Leaders Cafe is an open-for-all one month leadership program. Gathering
											students and fresh graduates from all over Indonesia to connect, learn, and
											solve real social problems. By using two-way communication learning,
											case-based,
											and less strict rules, this program is expected to help distribute knowledge
											for
											every student from all over Indonesia to become future-ready leaders ......


										</div>
									</a>

								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">
								<a href="<?= base_url('Homepage/detail_jejaring_bersama') ?>">
									<div class="wrap-profile mx-5">
										<div class="profile-name ">Jejaring Menang Bersama</div>
										<div class="profile-username mb-3">
											Lahir dari kegelisahan atas meningkatnya kasus
											Covid-19, #JejaringMenangBersama menjadi wadah kolaborasi untuk mempercepat
											proses pemulihan bangsa. Pada akhir Agustus 2021 lalu, kasus Covid-19
											mengalami
											penurunan signifikan. Kasus aktif tadinya 500.000 kini telah menjadi
											38,652.....
										</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 764.png')" class="profile-card-2">
							<div class="wrap-profile mx-5">
								<a href="<?= base_url('Homepage/detail_leaders') ?>">

									<div class="profile-name ">Leaders Academy Indonesia</div>
									<div class="profile-username ">
										Leaders Academy Indonesia (LeadID) merupakan program pelatihan kepemimpinan
										yang
										bertujuan untuk meningkatkan kapasitas sumberdaya manusia Indonesia,
										terutama
										anak muda, sehingga ia bisa berdaya atas dirinya dan siap untuk
										memberdayakan
										orang lain. Program ini diinisiasi oleh Pemimpin.id sebagai implementasi
										dari....

									</div>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">
							<div class="wrap-profile mx-5">
								<a href="<?= base_url('Homepage/detail_asn') ?>">

									<div class="profile-name ">ASN Academy</div>
									<div class="profile-username ">ASN Academy adalah program pengembangan kapasitas
										yang dipersembahkan kepada para aparatur sipil negara (ASN) terpilih untuk
										menjadi seorang change agent. Program ini bertujuan membentuk ASN yang berdaya
										dengan memperkuat keterampilan kunci, mengasah jiwa kepemimpinan, dan
										menyinergikan kekuatan jejaring ASN di Indonesia....
									</div>
								</a>
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
						<div class="section-heading text-center mb-4 mb-4">
							<!-- <h3 class="title-style mb-2" style="color:#9B191B">Program Content</h3>
							<p>We prepare the best program to produce great leaders for the future and welcome the acceleration of technology in Indonesia.</p> -->
						</div>
					</div>
				</div>
				<div class="content-sec-11" style="position: relative">
					<div class="row ">
						<div class="col-md-12">
							<div class="section-heading text-center mb-4 mb-2">
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
							<h6 style="color:#000;">In this program, the innovative results that can be seen from the
								learning activity process are participants who are fostered to be able to gain new
								insights and knowledge, skills in technology, and skills needed in the 21st Century.
							</h6>
						</div>
						<div class="col-lg-6">
							<img class="text-left text-md-center img-responsive my-4" style="width:90px" src="<?= base_url('assets'); ?>/images/knowledge 1.png">
							<h5 class="mb-2" style="color:#000;"><b>Impact</b></h5>
							<h6 style="color:#000;">From the initiative projects that have been described previously,
								the positive impact that can be shared with the general public is that the students who
								are fostered can become people who have broad knowledge.</h6>
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
						<div class="section-heading text-center mb-4 mb-4">
							<!-- <h3 class="title-style mb-2" style="color:#9B191B">Program Content</h3>
							<p>We prepare the best program to produce great leaders for the future and welcome the acceleration of technology in Indonesia.</p> -->
						</div>
					</div>
				</div>
				<div class="content-sec-11" style="position: relative">
					<div class="row ">
						<div class="col-md-4">
							<div class="section-heading mb-4 mb-2">
								<h3 class="title-style mb-2" style="color:#9B191B;">Event</h3>
							</div>
						</div>
						<div class="col-md-6">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 mb-3">
							<a style="display:block;" href="<?= base_url("Homepage"); ?>">
								<img class="center mb-3" src="<?= base_url('assets'); ?>/images/Rectangle 792.png">
								<h6 style="color:#9C1718"><i class="fa fa-calendar-o mr-2" aria-hidden="true"></i><b> 17 Desember 2021</b></h6>
								<h6 style="color:black"><b>TB x SIRCLO</b></h6>
							</a>
						</div>
						<div class="col-lg-3 mb-3">
							<a style="display:block;" href="<?= base_url("Homepage"); ?>">
								<img class="center mb-3" style="width:280px;height:230px;border-radius:20px" src="<?= base_url('assets'); ?>/images/event2.png">
								<h6 style="color:#9C1718"><i class="fa fa-calendar-o mr-2" aria-hidden="true"></i><b> 22 Desember 2021</b></h6>
								<h6 style="color:black"><b>Evertalks#12</b></h6>
							</a>
						</div>
						<!-- <div class="col-lg-3 mb-3">
							<a style="display:block;" href="<?= base_url("Homepage/program_initiative_details"); ?>">
								<img class="center mb-3" src="<?= base_url('assets'); ?>/images/Rectangle 792.png">
								<h6 style="color:#9C1718"><i class="fa fa-calendar-o mr-2" aria-hidden="true"></i><b> 25 September 2021</b></h6>
								<h6 style="color:black"><b>Evertalks</b></h6>
							</a>
						</div> -->
						<!-- <div class="col-lg-3 mb-3">
							<img class="center mb-3" src="<?= base_url('assets'); ?>/images/Rectangle 791.png">
							<h6 style="color:#9C1718"><i class="fa fa-calendar-o mr-2" aria-hidden="true"></i><b> 06
									June 2021</b></h6>
							<h6 style="color:black"><b>SMARTIES Awards Indonesia</b></h6>
						</div> -->
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