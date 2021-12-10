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
		.inner-banner {
			border-radius: 20px;
		}

		@media screen and (max-width:568px) {
			.inner-banner {
				border-radius: 0;
			}
		}

		.article-gambar img {
			max-width: 70%;
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
					<!-- inner banner -->
					<div class="container mt-3 inner-banner pb-5">
						<div class="w3l-breadcrumb">
							<div class="container p-5">
								<div class="row mb-5 align-items-center my-auto">
									<div class="col-12">
										<p class="text-white text-left">Program</p>
									</div>

									<div class="col-12">
										<h2 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2 text-left"
											style="line-height:40px">Pak Kades</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //inner banner -->
				</div>
				<div class="content-sec-11" style="position: relative">
					<div style="background-color: #F5F7FB; margin-top:30px; padding:80px 30px">
						<h3 class="title-style mb-2" style="color:#9B191B">Games Pak Kades</h3>
						<div class="mt-5">
							Games ala Harvest Moon versi Evdu dengan kearifan lokal. Dengan bermain games Pak Kades ini
							kita dapat mengetahui hasil DISC yang dimiliki. Everidea Education mentransformasi alat tes
							yang pada umumnya berupa tulisan menjadi sebuah cerita di dalam games. Seru bukan ? Nanti
							kita berperan menjadi seorang “Pak Kades” baru dimana, Pak Kades” ingin membantu menjawab
							aspirasi dari warga lingkungan yang dia pimpin sehingga timbul rasa saling menghargai antara
							warga dengan aparatur sipil negara.
							<br>
							Yuk, Coba hasil DISC kalian apa nih ?
							<br>
							<a class="mt-3 btn btn-outline-danger" href="https://bit.ly/Pak-Kades">Games Pak Kades</a>
						</div>
						<div class="mt-5">
							<div
								class="article-gambar d-flex flex-md-row justify-content-md-between justify-content-center flex-column">
								<img class="img-responsive" src="<?= base_url ('assets/images/desagame.png') ?>"
									alt="">
								<img class="img-responsive" src="<?= base_url ('assets/images/desagame2.png') ?>"
									alt="">

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