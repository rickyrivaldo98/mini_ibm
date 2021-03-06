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
											style="line-height:40px">Evertalks</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //inner banner -->
				</div>
				<div class="content-sec-11" style="position: relative">
					<div style="background-color: #F5F7FB; margin-top:30px; padding:80px 30px">
						<h3 class="title-style mb-2" style="color:#9B191B">Evertalks</h3>
						<div class="mt-5">
							Program EverTalks yang merupakan sebuah program ruang diskusi virtual yang dilaksanakan
							setiap bulan dalam rangka memberikan wadah untuk berbagai elemen masyarakat dan tokoh
							Indonesia untuk saling berbagi dan berdiskusi bersama membahas suatu isu atau topik yang
							relevan dengan kehidupan sehari-hari. Sesi ini akan diikuti bersama dengan tiga orang
							narasumber ahli di bidangnya dan dipandu oleh satu orang moderator.
							Untuk melihat evertalks kita, yuk tonton di :
							<br>
							<a class="mt-3 btn btn-outline-danger" href="https://bit.ly/EvertalksEvdu">Evertalks</a>
						</div>
						<div class="mt-5">
							<div class="article-gambar d-flex flex-md-row  justify-content-center flex-column">
								<img class="img-responsive mr-3" src="<?= base_url ('assets/images/evertalks.png') ?>"
									alt="">
								<img class="img-responsive" src="<?= base_url ('assets/images/evertalks2.png') ?>"
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