<section class="w3l-footer-29-main">
	<div class="footer-29 py-5">
		<div class="container-fluid py-lg-4">
			<div class="row justify-content-center  footer-top-29">
				<div class="col-lg-9">
					<div class="row justify-content-around ">
						<div class="col-md-4 col-6 footer-list-29">
							<ul>
								<li>

									<img class="footer-title-29" src="<?= base_url('assets'); ?>/images/socialinnovation.png">
									<p>Jl Monas No 3 RT.10/RW.05,</p>
									<p><b>Jakarta Pusat</b></p>
								</li>

							</ul>
						</div>
						<div class="col-md-2 col-6 footer-list-29">
							<ul>
								<h6 class="footer-title-29">Program</h6>
								<li><a href="#">Tittle Program</a></li>
								<li><a href="#">Tittle Program</a></li>
								<li><a href="#">Tittle Program</a></li>
								<li><a href="#">Tittle Program</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-6 footer-list-29">
							<ul>
								<h6 class="footer-title-29">Innovations</h6>
								<li><a href="#">Tittle Program</a></li>
								<li><a href="#">Tittle Program</a></li>
								<li><a href="#">Tittle Program</a></li>
								<li><a href="#">Tittle Program</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-6 footer-list-29">
							<h6 class="footer-title-29">Support</h6>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-6 footer-list-29">
							<h6 class="footer-title-29">Follow Us</h6>
							<ul>
								<li>
									<div class="main-social-footer-29">
										<a href="#facebook" class="facebook"><span id="icon" class="fa fa-facebook "></span></a>
										<a href="#instagram" class="instagram"><span id="icon" class="fa fa-instagram"></span></a>
										<a href="#linkedin" class="linkedin"><span id="icon" class="fa fa-youtube"></span></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- //footer -->
<!-- copyright -->
<section class="w3l-copyright">
	<div class="container">
		<div class="row bottom-copies">
			<p class="col-lg-12 copy-footer-29" style="text-align:center;color:white">© 2021 Mini MBA</p>
			<!-- <a href="https://IBM.com/" target="_blank"> IBM</a></p> -->
			<!-- <div class="col-lg-4 text-right">
                    <div class="main-social-footer-29">
                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                        <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                        <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>

                    </div>
                </div> -->
		</div>
	</div>
</section>
<!-- //copyright -->

<!-- Js scripts -->
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-arrow-up" aria-hidden="true"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- //move top -->

<!-- common jquery plugin -->
<script src="<?= base_url('assets'); ?>/js/jquery-3.3.1.min.js"></script>
<!-- //common jquery plugin -->

<!-- theme switch js (light and dark)-->
<script src="<?= base_url('assets'); ?>/js/theme-change.js"></script>
<script>
	function autoType(elementClass, typingSpeed) {
		var thhis = $(elementClass);
		thhis.css({
			"position": "relative",
			"display": "inline-block"
		});
		thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
		thhis = thhis.find(".text-js");
		var text = thhis.text().trim().split('');
		var amntOfChars = text.length;
		var newString = "";
		thhis.text("|");
		setTimeout(function() {
			thhis.css("opacity", 1);
			thhis.prev().removeAttr("style");
			thhis.text("");
			for (var i = 0; i < amntOfChars; i++) {
				(function(i, char) {
					setTimeout(function() {
						newString += char;
						thhis.text(newString);
					}, i * typingSpeed);
				})(i + 1, text[i]);
			}
		}, 1500);
	}

	$(document).ready(function() {
		// Now to start autoTyping just call the autoType function with the 
		// class of outer div
		// The second paramter is the speed between each letter is typed.   
		autoType(".type-js", 200);
	});
</script>
<!-- //theme switch js (light and dark)-->

<!-- magnific popup -->
<script src="<?= base_url('assets'); ?>/js/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!-- //magnific popup -->

<!-- MENU-JS -->
<script>
	$(window).on("scroll", function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 100) {
			$("#site-header").addClass("nav-fixed");
			$("#site-header").addClass("fixed-top");
			// $("#main_navlink").addClass("text-white");
			$("#navlink-second").addClass("color-nav");



		} else {
			$("#site-header").removeClass("nav-fixed");
			$("#site-header").removeClass("fixed-top");
			// $("#main_navlink").removeClass("text-white");
			$("#navlink-second").removeClass("color-nav");



		}
	});

	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function() {
		$("header").toggleClass("active");
	});
	$(document).on("ready", function() {
		if ($(window).width() > 991) {
			$("header").removeClass("active");
		}
		$(window).on("resize", function() {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
		});
	});
</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
	$(function() {
		$('.navbar-toggler').click(function() {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!-- //disable body scroll which navbar is in active -->

<!--bootstrap-->
<script src="<?= base_url('assets'); ?>/js/bootstrap.min.js"></script>
<!-- //bootstrap-->
<!-- //Js scripts -->