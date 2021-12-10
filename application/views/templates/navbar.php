<header id="site-header" class="top">
	<div class="container container-nav">
		<nav class="navbar navbar-expand-lg stroke ">
			<!-- <img class="navbar-brand" style="margin-top:-15px" src="<?= base_url('assets'); ?>/images/Mask Group.png"> -->
			<h1><a id="main_navlink" class=" " style="color:#9C1718" href="<?= base_url("Homepage"); ?>"><img src="<?= base_url('assets'); ?>/images/socialinnovation.png" alt=""></a></h1>
			<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
				<span class="navbar-toggler-icon fa icon-close fa-times"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav ml-lg-auto mr-lg-auto">
					<li id="navlink-second" id="navlink-second" class="nav-item">
						<!-- <a class="nav-link" href="<?= base_url("Homepage/program"); ?>">Program</a> -->
						<div class="dropdown show">
							<a class="btn btn- dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Programs
								<i class="fa fa-caret-down"></i>

							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="<?= base_url() . 'Homepage/mini_mba' ?>">Mini MBA Social Innovation</a>
								<a class="dropdown-item" href="<?= base_url() . 'Homepage/rumah_amal' ?>">Mini MBA By RUmah Amal Salman</a>
								<a class="dropdown-item" href="<?= base_url() . 'Homepage/program_initiative' ?>">More Initiative Program</a>
								<a class="dropdown-item" href="<?= base_url() . 'Homepage/register' ?>">Admission</a>

							</div>
						</div>
					</li>
					<li id="navlink-second" class="nav-item">
						<a class="nav-link" href="<?= base_url("Homepage/journal"); ?>">Project & Article</a>
					</li>
					<li id="navlink-second" class="nav-item">
						<a class="nav-link" href="<?= base_url("Homepage/about"); ?>">About Us</a>
					</li>
					<li id="navlink-second" class="nav-item">
						<a class="nav-link" href="<?= base_url("Homepage/events"); ?>">Events</a>
					</li>
					<!-- <li id="navlink-second" class="nav-item">
						<a class="nav-link" href="<?= base_url("Homepage/news"); ?>">News</a>
					</li> -->
					<li id="navlink-second" class="nav-item">
						<a class="nav-link" href="<?= base_url("Homepage/contact"); ?>">Contact Us</a>
					</li>
					<li id="navlink-second" class="nav-item mt-1  d-block d-lg-none">
						<a style="background-color: #9C1718;border-color:#9C1718;font-size:15px;border-radius:13px;padding:10px 20px;color:white" href="<?= base_url("Homepage/register"); ?>" class=" ">Register</a>
					</li>
				</ul>
				<ul class="d-none d-lg-block">
					<li id="navlink-second" class="nav-item mt-1">
						<a style="background-color: #9C1718;border-color:#9C1718;font-size:15px;border-radius:13px;padding:10px 20px;color:white" href="<?= base_url("Homepage/register"); ?>" class=" ">Register</a>
					</li>
				</ul>

			</div>

		</nav>
	</div>
</header>