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
						<h3 class="title-style mb-2" style="color:#9B191B">ASN Academy (hosted by Pemimpin.id)
						</h3>
						<div class="mt-5">
							ASN Academy adalah program pengembangan kapasitas yang dipersembahkan kepada para aparatur
							sipil negara (ASN) terpilih untuk menjadi seorang change agent. Program ini bertujuan
							membentuk ASN yang berdaya dengan memperkuat keterampilan kunci, mengasah jiwa kepemimpinan,
							dan menyinergikan kekuatan jejaring ASN di Indonesia.
						</div>
						
						<div class="mt-5">
							<div
								class="article-gambar d-flex flex-md-row justify-content-md-between justify-content-center flex-column">
								<img class="img-responsive" src="<?= base_url ('assets/images/asn1.jpg') ?>"
									alt="">
								<img class="img-responsive" src="<?= base_url ('assets/images/asn2.jpg') ?>"
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