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
						<h3 class="title-style mb-2" style="color:#9B191B">Jejaring Menang Bersama (hosted by
							Pemimpin.id)
						</h3>
						<div class="mt-5">
							Lahir dari kegelisahan atas meningkatnya kasus Covid-19, #JejaringMenangBersama menjadi
							wadah kolaborasi untuk mempercepat proses pemulihan bangsa. Pada akhir Agustus 2021 lalu,
							kasus Covid-19 mengalami penurunan signifikan. Kasus aktif tadinya 500.000 kini telah
							menjadi 38,652. Walau begitu, masyarakat tetap diingatkan untuk terus waspada dan tetap
							mematuhi protokol kesehatan untuk mencegah terjadinya kembali kenaikan kasus. Merespon hal
							tersebut, #JejaringMenangBersama akan terus menggaungkan semangat menang bersama untuk
							merangkul masyarakat beradaptasi saat pandemi dan menjalani transisi kehidupan dengan
							semangat juang yang tiada habisnya. Dengan berbagai kemungkinan yang terjadi,
							#JejaringMenangBersama juga akan terus menjadi pesan sekaligus gerakan kepedulian dan
							kerelawanan yang digagas oleh berbagai organisasi dan komunitas yang bertujuan memperkuat
							kolaborasi untuk memperluas praktik baik ke lapisan masyarakat Indonesia.
						</div>

						<div class="mt-5">
							<div
								class="article-gambar d-flex flex-md-row flex-wrap  justify-content-center flex-column">
								<img class="img-responsive mr-3" src="<?= base_url ('assets/images/jejaring1.png') ?>"
									alt="">
								<img class="img-responsive" src="<?= base_url ('assets/images/jejaring2.png') ?>"
									alt="">
								<img class="img-responsive" src="<?= base_url ('assets/images/jejaring3.png') ?>"
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