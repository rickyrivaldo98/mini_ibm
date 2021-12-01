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
        .profile-card-2 {
            max-width: 100%;
            background-position: center;
            overflow: hidden;
            position: relative;
            margin: 2px auto;
            /* cursor: pointer; */
            border-radius: 30px;
            height: 500px;
            background-position: center;
            background-size: cover;
            transition: all linear 0.25s;
        }

        .profile-card-2 img {
            transition: all linear 0.25s;
        }



        .profile-card-2 .wrap-profile {
            position: absolute;
            left: 20px;
            bottom: 100px;
            /* font-size: 20px; */
            color: #FFF;
            text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            /* font-weight: bold; */
        }

        @media screen and (max-width: 768px) {
            .profile-card-2 .wrap-profile {
                bottom: 50px;

            }
        }

        .profile-card-2 .profile-name {
            left: 20px;
            font-size: 20px;
            color: #FFF;
            text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            font-weight: bold;
        }

        .profile-card-2 .profile-username {
            left: 20px;
            color: #FFF;
            font-size: 13px;
        }

        .profile-card-2 .profile-icons .fa {
            margin: 5px;
        }

        .profile-card-2:hover {
            filter: grayscale(100%);
        }
    </style>
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
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("Homepage/contact"); ?>">Contact Page</a>
                        </li>
                        <li class="nav-item">
                            <a style="background-color: #9C1718;border-color:#9C1718;font-size:14px;" href="<?= base_url("Homepage/register"); ?>" class="btn btn-danger ">Register</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </header>
    <!--//header-->

    <!-- inner banner -->
    <div class="inner-banner">
        <div class="w3l-breadcrumb">
            <div class="container h-50">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2" style="text-align:left">Shaping the best generation in the digital era</h4>
                <p style="color:white;text-align:left !important">Shaping the best generation in the digital era</p>
            </div>
        </div>
    </div>
    <!-- //inner banner -->


    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-sec-style py-5">
            <div class="container-ibm py-md-4 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <h3 class="title-style mb-2" style="color:#9B191B">Partnership</h3>
                        </div>
                    </div>
                </div>
                <div class="content-sec-11">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-2 mb-5">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/everida.png">
                        </div>
                        <div class="col-3 col-md-2 mb-5">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/pemimpin.png">
                        </div>
                        <div class="col-3 col-md-2 mb-5">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/sbmitb.png">
                        </div>
                        <div class="col-3 col-md-2 mt-3 mt-md-0 mb-5">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/paragon.png">
                        </div>
                        <div class="col-3 col-md-2 mt-3 mt-md-0 mb-5">
                            <img class="center img-responsive" src="<?= base_url('assets'); ?>/images/maxima.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->

    <!-- call section -->
    <section class="w3l-call-to-action-6" style="margin-bottom:-50px">
        <div class="call-sec-style py-5">
            <div class="container-ibm py-md-4 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <h3 class="title-style  text-md-center text-left mb-4 mb-md-2" style="color:#9B191B">About Us</h3>
                            <p class="text-md-center text-left">The current Covid-19 pandemic does not only affect the health sector but also affects the social sector of the Indonesian people. The limitations of these social activities have changed many things, one example is education activities that must be done online. Communication that occurs in Indonesian society at this time is also considered not good or ineffective so that it is enough to cause unrest in the community. The contributors will create social movements that will certainly help the community in dealing with unrest in this social field.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->

    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-sec-style py-5">
            <div class="container py-md-4 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <!-- <h3 class="title-style mb-2" style="color:#9B191B">Program Content</h3>
							<p>We prepare the best program to produce great leaders for the future and welcome the acceleration of technology in Indonesia.</p> -->
                        </div>
                    </div>
                </div>
                <div class="content-sec-11">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading text-left mb-sm-5 mb-2">
                                <h3 class="title-style mb-2" style="color:#9B191B;">Programs</h3>
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-6">
                            <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 764.png')" class="profile-card-2">
                                <div class="wrap-profile mx-5">
                                    <div class="profile-name ">Mini MBA Social Innovation</div>
                                    <div class="profile-username ">The Mini MBA Social Innovation is a fast-track mini MBA format that aims to strengthen strategic insights and key knowledge that drive social innovation, as well as to build a network of leaders and ecosystem networks that drive social transformation.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">

                                <div class="wrap-profile mx-5">
                                    <div class="profile-name ">Mini MBA by Rumah Amal Salman</div>
                                    <div class="profile-username  mb-4">Rumah Amal Salman is an institution that manages zakat, infaq, alms, and other virtues that focus on the fields of education and technology.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 764.png')" class="profile-card-2">
                                <div class="wrap-profile mx-5">
                                    <div class="profile-name ">More Initiative Programs</div>
                                    <div class="profile-username ">The Mini MBA Social Innovation is a fast-track mini MBA format that aims to strengthen strategic insights and key knowledge that drive social innovation, as well as to build a network of leaders and ecosystem networks that drive social transformation.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">
                                <div class="wrap-profile mx-5">
                                    <div class="profile-name ">Admission</div>
                                    <div class="profile-username ">The Mini MBA Social Innovation is a fast-track mini MBA format that aims to strengthen strategic insights and key knowledge that drive social innovation, as well as to build a network of leaders and ecosystem networks that drive social transformation.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- //call section -->



    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-sec-style ">
            <div class="container py-md-4 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <!-- <h3 class="title-style mb-2" style="color:#9B191B">Program Content</h3>
							<p>We prepare the best program to produce great leaders for the future and welcome the acceleration of technology in Indonesia.</p> -->
                        </div>
                    </div>
                </div>
                <div class="content-sec-11" style="position: relative">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="section-heading text-center mb-sm-5 mb-2">
                                <h3 class="title-style mb-2 text-left text-md-center" style="color:#9B191B; ">Innovation</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="text-left text-md-center img-responsive my-4" src="<?= base_url('assets'); ?>/images/premium-quality 1.png">
                            <h5 style="color:#000;"><b>More Initiative Projects</b></h5>
                            <h6 style="color:#000;">In this program, the innovative results that can be seen from the learning activity process are participants who are fostered to be able to gain new insights and knowledge, skills in technology, and skills needed in the 21st Century.</h6>
                        </div>
                        <div class="col-lg-6">
                            <img class="text-left text-md-center img-responsive my-4" src="<?= base_url('assets'); ?>/images/knowledge 1.png">
                            <h5 style="color:#000;"><b>Impact</b></h5>
                            <h6 style="color:#000;">From the initiative projects that have been described previously, the positive impact that can be shared with the general public is that the students who are fostered can become people who have broad knowledge.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->

    <!-- call section -->
    <section class="w3l-call-to-action-6" style="margin-bottom:25px">
        <div class="call-sec-style py-5">
            <div class="container py-md-4 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <!-- <h3 class="title-style mb-2" style="color:#9B191B">Program Content</h3>
							<p>We prepare the best program to produce great leaders for the future and welcome the acceleration of technology in Indonesia.</p> -->
                        </div>
                    </div>
                </div>
                <div class="content-sec-11" style="position: relative">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="section-heading text-center mb-sm-5 mb-2">
                                <h3 class="title-style mb-2" style="color:#9B191B;">Event</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 792.png">
                            <h6 style="margin-left:5%;color:#9C1718"><i class="fa fa-calendar" aria-hidden="true"></i><b> 11 May 2021</b></h6>
                            <h6 style="margin-left:5%;color:black"><b>Webinar Technology</b></h6>
                        </div>
                        <div class="col-lg-3">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 734.png">
                            <h6 style="margin-left:5%;color:#9C1718"><i class="fa fa-calendar" aria-hidden="true"></i><b> 20 May 2021</b></h6>
                            <h6 style="margin-left:5%;color:black"><b>Carry On Indonesian Education</b></h6>
                        </div>
                        <div class="col-lg-3">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 775.png">
                            <h6 style="margin-left:5%;color:#9C1718"><i class="fa fa-calendar" aria-hidden="true"></i><b> 31 May 2021</b></h6>
                            <h6 style="margin-left:5%;color:black"><b>Cooperation with Australian companies</b></h6>
                        </div>
                        <div class="col-lg-3">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 791.png">
                            <h6 style="margin-left:5%;color:#9C1718"><i class="fa fa-calendar" aria-hidden="true"></i><b> 06 June 2021</b></h6>
                            <h6 style="margin-left:5%;color:black"><b>SMARTIES Awards Indonesia</b></h6>
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px">
                        <div class="col-lg-3">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 792.png">
                            <h6 style="margin-left:5%;color:#9C1718"><i class="fa fa-calendar" aria-hidden="true"></i><b> 11 May 2021</b></h6>
                            <h6 style="margin-left:5%;color:black"><b>Webinar Technology</b></h6>
                        </div>
                        <div class="col-lg-3">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 734.png">
                            <h6 style="margin-left:5%;color:#9C1718"><i class="fa fa-calendar" aria-hidden="true"></i><b> 20 May 2021</b></h6>
                            <h6 style="margin-left:5%;color:black"><b>Carry On Indonesian Education</b></h6>
                        </div>
                        <div class="col-lg-3">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 775.png">
                            <h6 style="margin-left:5%;color:#9C1718"><i class="fa fa-calendar" aria-hidden="true"></i><b> 31 May 2021</b></h6>
                            <h6 style="margin-left:5%;color:black"><b>Cooperation with Australian companies</b></h6>
                        </div>
                        <div class="col-lg-3">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 791.png">
                            <h6 style="margin-left:5%;color:#9C1718"><i class="fa fa-calendar" aria-hidden="true"></i><b> 06 June 2021</b></h6>
                            <h6 style="margin-left:5%;color:black"><b>SMARTIES Awards Indonesia</b></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->


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
                                    <img class="footer-title-29" style="margin-left:-35px;margin-top:-35px" src="<?= base_url('assets'); ?>/images/Mask Group merah.png">
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