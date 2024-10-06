<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Smart Class: coaching classes" />
    <meta property="og:title" content="Smart Class: coaching classes" />
    <meta property="og:description" content="Smart Class: coaching classes" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?php echo base_url('assets/') ?>images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/') ?>images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Home</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- STYLESHEETS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="
https://cdn.jsdelivr.net/npm/line-awesome@1.3.0/dist/line-awesome/css/line-awesome.min.css
" rel="stylesheet">
    <link href="
https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.min.css
" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/plugins.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>plugins/fontawesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>plugins/line-awesome/css/line-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>plugins/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>plugins/themify/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/style.min.css">
    <link class="skin" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/skin/skin-1.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/templete.min.css">
    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');


        .DZ-theme-btn {
            display: none;
        }

        #main-img {
            height: 57px;
        }
    </style>

</head>

<header class="site-header header mo-left">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion logoimage">
                    <a href="<?php echo base_url('home/'); ?>" class="dez-page"><img src="<?php echo base_url() ?>uploads/link/mainLogo.jpeg" alt="" id="main-img"></a>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header mostion">
                        <a href="<?php echo base_url('home/'); ?>" class="dez-page"><img src="<?php echo base_url('assets/') ?>images/logo-black.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url('home/'); ?>">Home </a>

                        </li>
                        <li><a href="#">About <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('about/'); ?>">About Us</a></li>
                                <li><a href="<?php echo base_url('about2/'); ?>">About Us2</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Courses <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('courses/'); ?>">Courses</a></li>
                                <li><a href="<?php echo base_url('admission/'); ?>">Admission</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Teachers <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('teachers') ?>">Teachers</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('faqs') ?>">Faqs</a></li>
                                <li><a href="<?php echo base_url('event') ?>">News/Event</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Our Gallery <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('gallery_grid') ?>">Gallery Grid</a></li>
                                <li><a href="<?php echo base_url('gallery_masonary') ?>">Gallery Masonary</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('contact') ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>