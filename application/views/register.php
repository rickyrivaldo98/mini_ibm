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

</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <!-- <img class="navbar-brand" style="margin-top:-15px" src="<?= base_url('assets'); ?>/images/Mask Group.png"> -->
                <h1><a class="nav-link" style="color:white" href="<?= base_url("Homepage"); ?>">Mini MBA</a></h1>
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("Homepage/program"); ?>">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("Homepage/journal"); ?>">Insight & Journal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("Homepage/about"); ?>">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("Homepage/events"); ?>">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("Homepage/news"); ?>">News</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url("Homepage/contact"); ?>">Contact Page</a>
                        </li>
                        <li class="nav-item active">
                            <a style="background-color: #9C1718;border-color:#9C1718;font-size:14px;" href="<?= base_url("Homepage/register"); ?>" class="btn btn-danger ">Register</a>
                        </li>

                    </ul>
                </div>

            </nav>
        </div>
    </header>
    <!--//header-->

    <!-- inner banner -->
    <div class="inner-banner-about">
        <div class="w3l-breadcrumb">
            <div class="container">

            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <div class="form-register">
        <div class="container">
            <div class="row p-2">
                <div class="col-12 col-md-4 register-info">
                    <div class="image-left">
                    </div>
                </div>
                <div class=" col-12 col-lg-8 form-contact-info">
                    <div class="wrapper-form-info">
                        <div class="row">
                            <div class="col-12 mb-5">
                                <h4 style="font-weight: 600;">Mini MBA - Social Innovation</h4>
                            </div>
                            <div class="col-12  mb-3">
                                <label style="color: #C0C0C0;">Full Name <span style="color: #9C1718;"> *</span> </label>
                                <input type="text" placeholder="" name="fullname">
                            </div>

                            <div class="col-12 mb-3 ">
                                <label style="color: #C0C0C0;">Mobile Number <span style="color: #9C1718;"> *</span> </label>
                                <input type="text" placeholder="" name="mobile_number">
                            </div>
                            <div class="col-12 mb-3 ">
                                <label style="color: #C0C0C0;">Email<span style="color: #9C1718;"> *</span> </label>
                                <input type="email" placeholder="" name="email">
                            </div>
                            <div class="col-12 mb-3 ">
                                <label style="color: #C0C0C0;">Current Position or Job Title<span style="color: #9C1718;"> *</span> </label>
                                <br>
                                <div class="select-box">
                                    <div class="select-box__current" tabindex="1">
                                        <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="0" value="1" name="Ben" checked="checked" />
                                            <p class="select-box__input-text">Cream</p>
                                        </div>
                                        <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="1" value="2" name="Ben" />
                                            <p class="select-box__input-text">Cheese</p>
                                        </div>
                                        <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="2" value="3" name="Ben" />
                                            <p class="select-box__input-text">Milk</p>
                                        </div>
                                        <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="3" value="4" name="Ben" />
                                            <p class="select-box__input-text">Honey</p>
                                        </div>
                                        <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="4" value="5" name="Ben" />
                                            <p class="select-box__input-text">Toast</p>
                                        </div><img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true" />
                                    </div>
                                    <ul class="select-box__list">
                                        <li>
                                            <label class="select-box__option" for="0" aria-hidden="aria-hidden">Cream</label>
                                        </li>
                                        <li>
                                            <label class="select-box__option" for="1" aria-hidden="aria-hidden">Cheese</label>
                                        </li>
                                        <li>
                                            <label class="select-box__option" for="2" aria-hidden="aria-hidden">Milk</label>
                                        </li>
                                        <li>
                                            <label class="select-box__option" for="3" aria-hidden="aria-hidden">Honey</label>
                                        </li>
                                        <li>
                                            <label class="select-box__option" for="4" aria-hidden="aria-hidden">Toast</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 mb-3 ">
                                <label style="color: #C0C0C0;">Current Position or Job Title<span style="color: #9C1718;"> *</span> </label>
                                <input type="text" placeholder="">
                            </div>
                            <div class="col-12 mb-3 ">
                                <label style="color: #C0C0C0;">Experience in the industry (Years)<span style="color: #9C1718;"> *</span> </label>
                                <input type="text" placeholder="">
                            </div>
                            <div class="col-12 mb-3 ">
                                <label style="color: #C0C0C0;">Motivation Statment<span style="color: #9C1718;"> *</span> </label>
                                <input type="text" placeholder="">
                            </div>
                            <div class="col-12 mb-3 ">
                                <label class="mb-3" style="color: #C0C0C0;">Curiculum Vitae (CV) <span style="color: #9C1718;">*</span> </label>
                                <div class="file-input">
                                    <input type="file" id="file" class="file">
                                    <label for="file">
                                        Add file *
                                        <p class="file-name"></p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mb-3 ">
                                <label class="mb-3" style="color: #C0C0C0; overflow-wrap:anywhere;">Change Project (Template: https://bit.ly/ChangeProjectTemplate) <span style="color: #9C1718;">*</span> </label>
                                <div class="file-input">
                                    <input type="file" id="file" class="file">
                                    <label for="file">
                                        Add file *
                                        <p class="file-name"></p>
                                    </label>
                                </div>
                            </div>
                            <div class=" col-12 text-center text-md-left  mt-5">
                                <div class="d-flex justify-content-between">
                                    <a id="clear-button" href="" class="btn btn-outline-dark btn-clear">Clear From</a>

                                    <a id="send-button" href="" class="btn btn-danger btn-submit">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <!-- footer -->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <div class="row footer-top-29">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6 col-6 footer-list-29">
                                <ul>
                                    <!-- <h6 class="footer-title-29">IBM</h6> -->
                                    <img class="footer-title-29" style="margin-left:-35px;margin-top:-35px" src="<?= base_url('assets'); ?>/images/Mask Group merah.png">
                                    <li>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi porttitor sed sit donec mollis. Platea massa felis at scelerisque porttitor arcu at. </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-6 footer-list-29">
                                <ul>
                                    <h6 class="footer-title-29">Archieve</h6>
                                    <li><a href="#">Idea/Innovation</a></li>
                                    <li><a href="#">Material</a></li>
                                    <li><a href="#">Case Study</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-6 footer-list-29">
                                <ul>
                                    <h6 class="footer-title-29">Program</h6>
                                    <li><a href="#">Mini MBA Social Innovation</a></li>
                                    <li><a href="#">Mini MBA by Rumah Amal Salman</a></li>
                                    <li><a href="#">More Initiative Programs</a></li>
                                    <li><a href="#">Admission</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-6 footer-list-29">
                                <h6 class="footer-title-29">Follow Us</h6>
                                <ul>
                                    <li>
                                        <div class="main-social-footer-29">
                                            <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                                            <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                            <a href="#linkedin" class="linkedin"><span class="fa fa-youtube"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-2 col- footer-list-29">
                        <h6 class="footer-title-29">Follow Us</h6>
                        <ul>
							<li>
								<div class="main-social-footer-29">
									<a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
									<a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
									<a href="#linkedin" class="linkedin"><span class="fa fa-youtube"></span></a>
								</div>
							</li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- //footer -->
    <!-- copyright -->
    <section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-12 copy-footer-29" style="text-align:center;color:white">© 2021 Mini MBA Social Innovation</p>
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
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        const file = document.querySelector('#file');
        file.addEventListener('change', (e) => {
            // Get the selected file
            const [file] = e.target.files;
            // Get the file name and size
            const {
                name: fileName,
                size
            } = file;
            // Convert size in bytes to kilo bytes
            const fileSize = (size / 1000).toFixed(2);
            // Set the text content
            const fileNameAndSize = `${fileName} - ${fileSize}KB`;
            document.querySelector('.file-name').textContent = fileNameAndSize;
        });
    </script>
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

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
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
</body>

</html>