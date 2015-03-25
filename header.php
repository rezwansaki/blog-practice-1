<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>

        <!-- Bootstrap -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        
        <!-- Comments style sheet -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/comments.css">

        <!-- my own custome css file -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

        <?php wp_head(); ?>

    </head>

    <body>

        <!-- main container -->
        <div class="container maincontainer">

            <div class="row logo">
                <div class="col-md-4">
                    <!-- logo -->
                    <a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
                </div>
                <div class="col-md-8 social">
                    <span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                </div>
            </div>
            <div class="row menubar">
                
                    <?php

                    $args = array(
                    'theme_location' => 'top-bar',
                    'depth'          => 2,
                    'container'      => false,
                    'menu_class'     => 'breadcrumb',
                    'walker'         => new Bootstrap_Walker_Nav_Menu()
                    );

                    wp_nav_menu($args);

                    ?>

            </div>