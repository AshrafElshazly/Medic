<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title><?= SITE_TITLE ;?></title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Medical HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Medical HTML Template v1.0">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php assets('web/plugins/bootstrap/bootstrap.min.css');?>">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="<?php assets('web/plugins/slick/slick.css');?>">
    <link rel="stylesheet" href="<?php assets('web/plugins/slick/slick-theme.css');?>">
    <!-- FancyBox -->
    <link rel="stylesheet" href="<?php assets('web/plugins/fancybox/jquery.fancybox.min.css');?>">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?php assets('web/plugins/fontawesome/css/all.min.css');?>">
    <!-- animate.css -->
    <link rel="stylesheet" href="<?php assets('web/plugins/animation/animate.min.css');?>">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="<?php assets('web/plugins/jquery-ui/jquery-ui.css');?>">
    <!-- timePicker -->
    <link rel="stylesheet" href="<?php assets('web/plugins/timePicker/timePicker.css');?>">

    <!-- Stylesheets -->
    <link href="<?php assets('web/css/style.css" rel="stylesheet');?>">

    <!--Favicon-->
    <link rel="icon" href="<?php assets('web/images/favicon.png');?>" type="image/x-icon">

</head>


<body>
    <div class="page-wrapper">



        <!--header top-->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="top-left text-center text-md-left">
                            <h6>We're delighted to offer the most hospitable welcome we can.</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-right text-center text-md-right">
                            <ul class="social-links">
                                <li>
                                    <a href="<?= $settings['facebook'];?>" aria-label="facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $settings['twitter'];?>" aria-label="twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $settings['instagram'];?>" aria-label="instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $settings['pinterest'];?>" aria-label="pinterest">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top-->

        <!--Header Upper-->
        <section class="header-uper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="logo">
                            <a href="<?php url();?>">
                                <img loading="lazy" class="img-fluid" src="<?php assets('web/images/logo.png');?>" alt="logo">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-xl-8 col-lg-9">
                        <div class="right-side">
                            <ul class="contact-info pl-0 mb-4 mb-md-0">
                                <li class="item text-left">
                                    <div class="icon-box">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <strong>Email</strong>
                                    <br>
                                    <a href="">
                                        <span><?= $settings['email'];?></span>
                                    </a>
                                </li>
                                <li class="item text-left">
                                    <div class="icon-box">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <strong>Call Now</strong>
                                    <br>
                                    <span><?= $settings['phone'];?></span>
                                </li>
                            </ul>
                            <div class="link-btn text-center text-lg-right">
                                <a href="<?php url('appointment');?>" class="btn-style-one">Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Header Upper-->


        <!--Main Header-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

                <div class="collapse navbar-collapse" id="navbarLinks">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php url('');?>">Home</a>
                        </li>
                        <li class="nav-item @@about">
                            <a class="nav-link" href="<?php url('about-us');?>">About</a>
                        </li>
                        <li class="nav-item @@service">
                            <a class="nav-link" href="<?php url('services');?>">Service</a>
                        </li>
                        <li class="nav-item @@gallery">
                            <a class="nav-link" href="<?php url('gallery');?>">Gallery</a>
                        </li>
                        <li class="nav-item @@appointment">
                            <a class="nav-link" href="<?php url('appointment');?>">Appointment</a>
                        </li>
                        <li class="nav-item @@contact">
                            <a class="nav-link" href="<?php url('contact-us');?>">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>