<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 04:55:11 GMT -->
<head>
    <title>Travel Journey Admin</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="<?php echo $this->config->item('admin_assets_url') ?>images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="<?php echo $this->config->item('admin_assets_url') ?>css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="<?php echo $this->config->item('admin_assets_url') ?>css/style.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('admin_assets_url') ?>css/mob.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('admin_assets_url') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('admin_assets_url') ?>css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="blog-login">
        <div class="blog-login-in">
            <form action=" <?php echo base_url() ?>admin/Login/validate" method="post">
                <img src="<?php echo $this->config->item('admin_assets_url') ?>images/logo.png" alt="" />
                
                  <?php if ($this->session->flashdata('error')) {
                    ?>
                    <div class="row">
                        <div class="input-field col s12">
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('error') ?>
                            </div>
                        </div>
                    </div>    
                    <?php
                }
                ?>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name1" type="text" class="validate" name="email_id">
                        <label for="first_name1">Email Id</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" type="password" class="validate" name="password">
                        <label for="last_name">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
                </div><a href="forgot.html" class="for-pass">Forgot Password?</a>
            </form>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="<?php echo $this->config->item('admin_assets_url') ?>js/jquery.min.js"></script>
    <script src="<?php echo $this->config->item('admin_assets_url') ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $this->config->item('admin_assets_url') ?>js/materialize.min.js"></script>
    <script src="<?php echo $this->config->item('admin_assets_url') ?>js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 04:55:12 GMT -->
</html>