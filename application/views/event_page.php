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
            filter: grayscale(50%);
        }
    </style>
</head>


<body>
    <!--header-->
    <?php $this->load->view('templates/navbar') ?>

    <!--//header-->

    <!-- inner banner -->
    <div class="inner-banner-news">
        <div class="w3l-breadcrumb" style="padding-top: 90px;">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2" style="text-align:left">Shaping the best generation in the digital era</h4>
                <p style="color:white;text-align:left !important">Shaping the best generation in the digital era</p>
            </div>
        </div>
    </div>
    <!-- //inner banner -->


    <!-- call section -->
    <!-- <section class="w3l-call-to-action-6">
        <div class="call-sec-style py-5">
            <div class="container py-md-4 py-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-sm-5 mb-4">
                            <h3 class="title-style mb-2" style="color:#9B191B">Program Content</h3>
							<p>We prepare the best program to produce great leaders for the future and welcome the acceleration of technology in Indonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="content-sec-11" style="position: relative">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="section-heading text-center mb-sm-5 mb-2">
                                <h3 class="title-style mb-2" style="color:#9B191B; margin-left:-100%">Top Selling</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6" style="margin-left:-7%">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 764.png">
                            <h6 style="margin-left:5%;color:#fff;margin-top:-40%;margin-left:10%"><i class="fa fa-calendar" aria-hidden="true"></i><b> 11 May 2021</b></h6>
                            <h5 style="margin-left:5%;color:#fff;margin-left:10%"><b>Webinar Technologi</b></h5>
                            <h6 style="margin-left:5%;color:#fff;margin-left:10%">Festival edukasi tentang teknologi yang berlangsung 4 hari ini, akan memberi kamu pengetahuan dan ilmu yang banyak sekali!</h6>
                        </div>
                        <div class="col-lg-6">
                            <img class="center" src="<?= base_url('assets'); ?>/images/Rectangle 769.png">
                            <h6 style="margin-left:5%;color:#fff;margin-top:-40%;margin-left:10%"><i class="fa fa-calendar" aria-hidden="true"></i><b> 11 May 2021</b></h6>
                            <h5 style="margin-left:5%;color:#fff;margin-left:10%"><b>Webinar Technologi</b></h5>
                            <h6 style="margin-left:5%;color:#fff;margin-left:10%">Festival edukasi tentang teknologi yang berlangsung 4 hari ini, akan memberi kamu pengetahuan dan ilmu yang banyak sekali!</h6>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12">
                        <div class="section-heading text-center mb-sm-5 mb-2">
                            <h3 class="title-style mb-2" style="color:#9B191B; ">Top Selling</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 764.png')" class="profile-card-2">
                            <div class="wrap-profile mx-5">
                                <div class="profile-username "><i class="fa fa-calendar" aria-hidden="true"></i><b> 11 May 2021</b></div>
                                <div class="profile-name ">Webinar Technologi</div>
                                <div class="profile-username ">Festival edukasi tentang teknologi yang berlangsung 4 hari ini, akan memberi kamu pengetahuan dan ilmu yang banyak sekali!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="background-image: url('<?= base_url("assets"); ?>/images/Rectangle 769.png')" class="profile-card-2">
                            <div class="wrap-profile mx-5">
                                <div class="profile-username "><i class="fa fa-calendar" aria-hidden="true"></i><b> 11 May 2021</b></div>
                                <div class="profile-name ">Webinar Technologi</div>
                                <div class="profile-username ">Festival edukasi tentang teknologi yang berlangsung 4 hari ini, akan memberi kamu pengetahuan dan ilmu yang banyak sekali!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //call section -->

    <!-- call section -->
    <section class="w3l-call-to-action-6" style="margin-bottom:25px">
        <div class="call-sec-style pb-5">
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
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="section-heading mb-4 mb-2">
                                <h3 class="title-style mb-2" style="color:#9B191B;">Event</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>

                    <div id="test" class="row">

                        <!-- <div class="col-lg-3">
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
                    </div> -->

                    </div>
                    <div class="pt-5 d-flex justify-content-center align-items-center mx-auto">
                        <a onclick="prevPage()" id="btn_prev" class="pr-2">Prev</a>
                        <div id="page" class="pr-2 d-flex"></div>
                        <a onclick="nextPage()" id="btn_next" class="pr-2">Next</a>
                        <!-- page: <span id="page"></span> -->
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
                $("#site-header").addClass("fixed-top");
            } else {
                $("#site-header").removeClass("nav-fixed");
                $("#site-header").removeClass("fixed-top");
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
    <script id="data" type="application/json">
        [{
                "gambar": "/images/Rectangle 792.png",
                "tanggal": "17 Desember 2021",
                "text": "TB x SIRCLO",
                "url": "<?= base_url("Homepage/events_detail"); ?>"
            },
            {
                "gambar": "/images/Rectangle 792.png",
                "tanggal": "25 Oktober 2021",
                "text": "Evertalks",
                "url": "<?= base_url("Homepage/program_initiative_details"); ?>"
            },
            {
                "gambar": "/images/Rectangle 792.png",
                "tanggal": "25 September 2021",
                "text": "Evertalks",
                "url": "<?= base_url("Homepage/program_initiative_details"); ?>"
            }
        ]
    </script>
    <!-- {
            "gambar": "/images/Rectangle 734.png",
            "tanggal": "20 May 2021",
            "text": "Carry On Indonesian Education"
        }, {
            "gambar": "/images/Rectangle 775.png",
            "tanggal": "31 May 2021",
            "text": "Cooperation with Australian companies"
        }, {
            "gambar": "/images/Rectangle 791.png",
            "tanggal": "06 June 2021",
            "text": "SMARTIES Awards Indonesia"
        }, {
            "gambar": "/images/Rectangle 792.png",
            "tanggal": "11 May 2021",
            "text": "Webinar Technology"
        }, {
            "gambar": "/images/Rectangle 734.png",
            "tanggal": "20 May 2021",
            "text": "Carry On Indonesian Education"
        }, {
            "gambar": "/images/Rectangle 775.png",
            "tanggal": "31 May 2021",
            "text": "Cooperation with Australian companies"
        }, {
            "gambar": "/images/Rectangle 791.png",
            "tanggal": "06 June 2021",
            "text": "SMARTIES Awards Indonesia"
        }, {
            "gambar": "/images/Rectangle 792.png",
            "tanggal": "11 May 2021",
            "text": "Webinar Technology"
        }, {
            "gambar": "/images/Rectangle 734.png",
            "tanggal": "20 May 2021",
            "text": "Carry On Indonesian Education"
        }, {
            "gambar": "/images/Rectangle 775.png",
            "tanggal": "31 May 2021",
            "text": "Cooperation with Australian companies"
        }, {
            "gambar": "/images/Rectangle 791.png",
            "tanggal": "06 June 2021",
            "text": "SMARTIES Awards Indonesia"
        } -->
    <script>
        var current_page = 1;
        var records_per_page = 8;
        var data = JSON.parse(document.getElementById('data').textContent);

        function prevPage() {
            if (current_page > 1) {
                current_page--;
                changePage(current_page);
            }
        }

        function nextPage() {
            if (current_page < numPages()) {
                current_page++;
                changePage(current_page);
            }
        }

        function changePageNum(x) {
            current_page = x
            changePage(current_page);
        }

        function changePage(page) {
            var btn_next = document.getElementById("btn_next");
            var btn_prev = document.getElementById("btn_prev");



            // Validate page
            if (page < 1) page = 1;
            if (page > numPages()) page = numPages();
            var page_span = document.getElementById("page");

            document.getElementById("page").innerHTML = ""
            for (var i = 0; i < numPages(); i++) {
                // page_span.innerHTML = page + "/" + numPages();
                document.getElementById("page").innerHTML += `
                <a onclick="changePageNum(${[i+1]})" class="mr-2 px-3 py-2 ${current_page == [i+1]? "bg-secondary text-white" : "text-black"}">${[i+1]}</a>
                `;
            }
            document.getElementById("test").innerHTML = ""

            for (var i = (page - 1) * records_per_page; i < (page * records_per_page) && i < data.length; i++) {
                document.getElementById("test").innerHTML += `
                <div class="col-lg-3 pt-5">
                <a style="display:block;" href="${data[i].url}">
                <img class="center" src="<?= base_url('assets'); ?>${data[i].gambar}">
                <h6 style="margin-left:5%;color:#9C1718"><i class="fa fa-calendar mr-2" aria-hidden="true"></i><b>${data[i].tanggal}</b></h6>
                <h6 style="margin-left:5%;color:black"><b>${data[i].text}</b></h6>
                </a>
                </div>
                
                `
            }


            if (page == 1) {
                btn_prev.style.visibility = "hidden";
            } else {
                btn_prev.style.visibility = "visible";
            }

            if (page == numPages()) {
                btn_next.style.visibility = "hidden";
            } else {
                btn_next.style.visibility = "visible";
            }
        }

        function numPages() {
            return Math.ceil(data.length / records_per_page);
        }

        window.onload = function() {
            changePage(1);
        };
    </script>

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