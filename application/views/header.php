<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/main.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 05:12:30 GMT -->
<head>
    <title>The Travel - Tour Travel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="<?php echo $this->config->item('user_assets_url') ?>images/fav.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="<?php echo $this->config->item('user_assets_url') ?>css/font-awesome.min.css">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="<?php echo $this->config->item('user_assets_url') ?>css/style.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('user_assets_url') ?>css/materialize.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('user_assets_url') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('user_assets_url') ?>css/mob.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('user_assets_url') ?>css/animate.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="<?php echo $this->config->item('user_assets_url') ?>js/html5shiv.js"></script>
	<script src="<?php echo $this->config->item('user_assets_url') ?>js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                             </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="<?php echo base_url() ?>Customer/login">Sign In</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>Customer">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="main.html"><img src="<?php echo $this->config->item('user_assets_url') ?>images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="<?php echo $this->config->item('base_url')?>">Home</a>
                                </li>
                                <li class="about-menu">
                                    <a href="<?php echo $this->config->item('base_url')?>tour_package/list_" class="mm-arr">Packages</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s4">
                                                    <ul>
                                                        <li><a href="<?php echo $this->config->item('base_url')?>tour_package/list_">All Packages</a></li><li><a href="family-package.html">Family Package</a></li>
                                                        <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                                                        <li><a href="group-package.html">Group Package</a></li>
                                                        <li><a href="weekend-package.html">WeekEnd Package</a></li>
                                                        <li><a href="regular-package.html">Regular Package</a></li>
                                                        <li><a href="custom-package.html">Custom Package</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="<?php echo base_url() ?>room/list_">Hotels</a></li>
                                <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                                <li><a href="<?php echo base_url() ?>Distance">Distance Calculate</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>Dashboard">Profile</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>admin/login">Administrator</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>Guide_line">Guide Lines</a>
                                </li>
                              
                                <li><a href="<?php echo base_url() ?>Contact_us">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="Search course and discount courses">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="course-details.html">Accounting/Finance</a></li>
                                            <li><a href="course-details.html">civil engineering</a></li>
                                            <li><a href="course-details.html">Art/Design</a></li>
                                            <li><a href="course-details.html">Marine Engineering</a></li>
                                            <li><a href="course-details.html">Business Management</a></li>
                                            <li><a href="course-details.html">Journalism/Writing</a></li>
                                            <li><a href="course-details.html">Physical Education</a></li>
                                            <li><a href="course-details.html">Political Science</a></li>
                                            <li><a href="course-details.html">Sciences</a></li>
                                            <li><a href="course-details.html">Statistics</a></li>
                                            <li><a href="course-details.html">Web Design/Development</a></li>
                                            <li><a href="course-details.html">SEO</a></li>
                                            <li><a href="course-details.html">Google Business</a></li>
                                            <li><a href="course-details.html">Graphics Design</a></li>
                                            <li><a href="course-details.html">Networking Courses</a></li>
                                            <li><a href="course-details.html">Information technology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Search Course">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </section>
    <!--END HEADER SECTION-->
