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
	<style>
		body {
			overflow-x: hidden;
		}

		.about-img {
			background-color: #EFF4FF;
			padding: 100px 80px;
			border-radius: 18px;
			width: 336px;
		}

		.title-about {
			font-weight: 700;
		}
	</style>
</head>


<body>
	<!--header-->
	<?php $this->load->view('templates/navbar') ?>

	<!--//header-->


	<!-- //inner banner -->

	<!-- call section -->
	<section class="w3l-call-to-action-6" style="margin-top:5%;margin-bottom:5%;">
		<div class="call-sec-style">
			<div class="container  d-flex">
				<div class="section-heading  mb-sm-5 mb-2">
					<h3 class="title-style mb-5 text-left" style="color:#9B191B; ">About Us</h3>
				</div>
			</div>




			<div class="container d-flex justify-content-center align-items-center flex-md-row flex-column mb-5">
				<div class="text-center">
					<img class="about-img" src="<?= base_url () . 'assets/images/sbmitb.png' ?>" alt="">
				</div>
				<div class="m-auto pl-md-4">
					<div class="row justify-content-center my-3">
						<div class="col-md-12">
							<h2 class="title-about mb-3">SBM ITB</h2>
							<p>The current Covid-19 pandemic does not only affect the health sector but also affects the
								social sector of the Indonesian people. The limitations of these social activities have
								changed many things, one example is education activities that must be done online.s</p>
						</div>
					</div>
				</div>

			</div>

			<div class="container d-flex justify-content-center align-items-center flex-md-row flex-column mb-5">
				<div class="about-img text-center flex-fill">
					<img class="" src="<?= base_url () . 'assets/images/paragon.png' ?>" alt="">
				</div>
				<div class="m-auto pl-md-4">
					<div class="row justify-content-center my-3">
						<div class="col-md-12">
							<h2 class="title-about mb-3">Paragon</h2>
							<p>The current Covid-19 pandemic does not only affect the health sector but also affects the
								social sector of the Indonesian people. The limitations of these social activities have
								changed many things, one example is education activities that must be done online.</p>
						</div>
					</div>
				</div>

			</div>
			<div class="container d-flex justify-content-center align-items-center flex-md-row flex-column mb-5">
				<div class="about-img text-center flex-fill">
					<img class="" src="<?= base_url () . 'assets/images/pemimpin.png' ?>" alt="">
				</div>
				<div class="m-auto pl-md-4">
					<div class="row justify-content-center my-3">
						<div class="col-md-12">
							<h2 class="title-about mb-3">Pemimpin.id</h2>
							<p>
								Inspired by the story of HOS Tjokroaminoto's Rumah Peneleh, where the nation's leaders
								lived and grew up. Pemimpin Indonesia has a goal to become a learning house for leaders
								for the betterment of Indonesia's leadership ecosystem.

							</p>
						</div>
					</div>
				</div>

			</div>
			<div class="container d-flex justify-content-center align-items-center flex-md-row flex-column mb-5">
				<div class="about-img text-center flex-fill">
					<img class="" src="<?= base_url () . 'assets/images/paragon.png' ?>" alt="">
				</div>
				<div class="m-auto pl-md-4">
					<div class="row justify-content-center my-3">
						<div class="col-md-12">
							<h2 class="title-about mb-3">SBM ITB</h2>
							<p>The current Covid-19 pandemic does not only affect the health sector but also affects the
								social sector of the Indonesian people. The limitations of these social activities have
								changed many things, one example is education activities that must be done online.</p>
						</div>
					</div>
				</div>

			</div>
			<div class="container d-flex justify-content-center align-items-center flex-md-row flex-column mb-5">
				<div class="about-img text-center flex-fill">
					<img class="" src="<?= base_url () . 'assets/images/maxima.png' ?>" alt="">
				</div>
				<div class="m-auto pl-md-4">
					<div class="row justify-content-center my-3">
						<div class="col-md-12">
							<h2 class="title-about mb-3">Maxima</h2>
							<p>
								Maxima is a consulting agency
								| Public Sector Consultant
								| Transforming people and organization for excellent service
							</p>
						</div>
					</div>
				</div>

			</div>
			<div class="container d-flex justify-content-center align-items-center flex-md-row flex-column mb-5">
				<div class="about-img  flex-fill">
					<img class="text-center" src="<?= base_url () . 'assets/images/everida.png' ?>" alt="">
				</div>
				<div class="m-auto pl-md-4">
					<div class="row justify-content-center my-3">
						<div class="col-md-12">
							<h2 class="title-about mb-3">Everidea Education</h2>
							<p>
								We are an educational creative technology studio headquartered in Bandung. We focus on
								develop community through continuous learning and high engagement education with
								creative and innovation product to make

								impactful society by creating gamified and interactive products that ensure all people
								will have a high engagement education which result in better understanding and
								performance.
							</p>
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