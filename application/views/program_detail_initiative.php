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
											style="line-height:40px">Inspiring Lecturer Paragon (ILP)</h2>
									</div>
								</div>


							</div>
						</div>
					</div>
					<!-- //inner banner -->
				</div>
				<div class="content-sec-11" style="position: relative">
					<div style="background-color: #F5F7FB; margin-top:30px; padding:80px 30px">
						<h3 class="title-style mb-2" style="color:#9B191B">About This Program</h3>
						<div class="mt-5">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel imperdiet neque. Sed
							id finibus nisi. Vivamus leo augue, faucibus quis enim in, condimentum imperdiet mi. Nullam
							accumsan feugiat lectus iaculis mollis. Etiam nec mauris ligula. Duis dolor nisi, sodales
							posuere pellentesque id, posuere quis sapien. Phasellus eleifend magna vel tortor dignissim
							vestibulum at ac leo. Cras mattis mi quis ligula porttitor, et euismod eros luctus.
							Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
							egestas. Sed imperdiet accumsan nisl nec rhoncus. Sed vel diam mollis, eleifend massa nec,
							vestibulum leo. Nulla quis enim lectus. Nullam tincidunt varius diam et varius. Fusce
							lacinia sed sem ac laoreet. Aliquam erat volutpat.
						</div>
						<div class="mt-5">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel imperdiet neque. Sed
							id finibus nisi. Vivamus leo augue, faucibus quis enim in, condimentum imperdiet mi. Nullam
							accumsan feugiat lectus iaculis mollis. Etiam nec mauris ligula. Duis dolor nisi, sodales
							posuere pellentesque id, posuere quis sapien. Phasellus eleifend magna vel tortor dignissim
							vestibulum at ac leo. Cras mattis mi quis ligula porttitor, et euismod eros luctus.
							Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
							egestas. Sed imperdiet accumsan nisl nec rhoncus. Sed vel diam mollis, eleifend massa nec,
							vestibulum leo. Nulla quis enim lectus. Nullam tincidunt varius diam et varius. Fusce
							lacinia sed sem ac laoreet. Aliquam erat volutpat.
						</div>
						<div class="mt-5">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel imperdiet neque. Sed
							id finibus nisi. Vivamus leo augue, faucibus quis enim in, condimentum imperdiet mi. Nullam
							accumsan feugiat lectus iaculis mollis. Etiam nec mauris ligula. Duis dolor nisi, sodales
							posuere pellentesque id, posuere quis sapien. Phasellus eleifend magna vel tortor dignissim
							vestibulum at ac leo. Cras mattis mi quis ligula porttitor, et euismod eros luctus.
							Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
							egestas. Sed imperdiet accumsan nisl nec rhoncus. Sed vel diam mollis, eleifend massa nec,
							vestibulum leo. Nulla quis enim lectus. Nullam tincidunt varius diam et varius. Fusce
							lacinia sed sem ac laoreet. Aliquam erat volutpat.
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