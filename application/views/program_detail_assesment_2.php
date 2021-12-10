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
											style="line-height:40px">Digital Assesment Tools</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //inner banner -->
				</div>
				<div class="content-sec-11" style="position: relative">
					<div style="background-color: #F5F7FB; margin-top:30px; padding:80px 30px">
						<h3 class="title-style mb-2" style="color:#9B191B">Leadership Style Quiz</h3>
						<div class="mt-5">
							Everidea Education mengaptasi kembali berkolaborasi dengan pemimpin.id yaitu “Leadership
							Style Quiz”. Leadership style ini diadaptasi dari Jurnal “Leadership style of sustainability
							professionals in the UK construction industry”. Dengan ini kalian dapat mengetahui Gaya
							Kepemimpinan kalian.
							<br>
							Kira-kira gaya kepemimpinan kalian apa sih?
							<br>
							<a class="mt-3 btn btn-outline-danger"
								href="https://play.kanvas.id/q/LeadershipStyle">Leadership Style Quiz</a>
						</div>
						<div class="mt-5">
							<div class="article-gambar d-flex flex-md-row  justify-content-center flex-column">
								<img class="img-responsive" src="<?= base_url ('assets/images/leadership.png') ?>"
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