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
    <header id="site-header" class="top">
        <div class="container container-nav">
            <nav class="navbar navbar-expand-lg stroke ">
                <!-- <img class="navbar-brand" style="margin-top:-15px" src="<?= base_url('assets'); ?>/images/Mask Group.png"> -->
                <h1><a id="main_navlink" class="nav-link " style="color:#9C1718" href="<?= base_url("Homepage"); ?>"><img src="<?= base_url('assets'); ?>/images/rumahamallogo.png" alt=""></a></h1>
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
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
                            <a class="nav-link" href="<?= base_url("Homepage/journal"); ?>">Insight & Journal</a>
                        </li>
                        <li id="navlink-second" class="nav-item">
                            <a class="nav-link" href="<?= base_url("Homepage/about"); ?>">About Us</a>
                        </li>
                        <li id="navlink-second" class="nav-item">
                            <a class="nav-link" href="<?= base_url("Homepage/events"); ?>">Events</a>
                        </li>
                        <li id="navlink-second" class="nav-item">
                            <a class="nav-link" href="<?= base_url("Homepage/news"); ?>">News</a>
                        </li>
                        <li id="navlink-second" class="nav-item">
                            <a class="nav-link" href="<?= base_url("Homepage/contact"); ?>">Contact Us</a>
                        </li>
                        <li id="navlink-second" class="nav-item">
                            <a style="background-color: #07B0C8;border-color:#07B0C8;font-size:14px;" href="<?= base_url("Homepage/register"); ?>" class="btn btn-danger ">Register</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </header>

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
                                        <p class="text-white text-muted text-left">Program</p>
                                    </div>

                                    <div class="col-12">
                                        <h2 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2 text-left" style="line-height:40px">Kelas Mini MBA Eksklusif</h2>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- //inner banner -->
                </div>
                <div class="content-sec-11" style="position: relative">
                    <div style="background-color: #F5F7FB; margin-top:30px; padding:80px 30px">
                        <h3 class="title-style mb-2" style="color:#07B0C8">Program Content</h3>
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
    <!-- footer -->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <div class="row footer-top-29">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-6 col-6 footer-list-29">
                                <ul>
                                    <!-- <h6 class="footer-title-29">IBM</h6> -->
                                    <img class="footer-title-29" style="margin-left:-35px;margin-top:-35px;margin-bottom:20px" src="<?= base_url('assets'); ?>/images/rumahamallogo.png">
                                    <li>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi porttitor sed sit donec mollis. Platea massa felis at scelerisque porttitor arcu at. </p>
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
                        </div>
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
        </div>
    </section>
    <!-- //footer -->
    <!-- copyright -->
    <section class="w3l-copyright " style="background-color: #07B0C8;">
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
        <span class="fa fa-level-up" aria-hidden="true"></span>
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
                $("#main_navlink").addClass("text-dark");
                $("#navlink-second").addClass("color-nav");



            } else {
                $("#site-header").removeClass("nav-fixed");
                $("#site-header").removeClass("fixed-top");
                $("#main_navlink").removeClass("text-white");
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

</body>

</html>