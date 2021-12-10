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
    <?php $this->load->view('templates/navbar') ?>

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
                                <h4 style="font-weight: 600;">Social Innovation Guest Book</h4>
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
    <?php $this->load->view('templates/footer') ?>

</body>

</html>