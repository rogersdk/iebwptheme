<?php 
$_pagename = get_pagename(); 
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo get_bloginfo( 'charset' ); ?>" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title><?php wp_title( '|'.bloginfo('name'), true, 'right' ); ?></title>
    <!-- Styles -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/compiled/bootstrap-overrides.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/compiled/theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/compiled/<?php echo $_pagename; ?>.css" type="text/css" media="screen" />    
    
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lib/animate.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php echo $_pagename == 'home'?'class="pull_top"':'class=""'; ?>    >
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <!-- <div class="pull-left img-responsive">
            <img src="<?php echo get_template_directory_uri(); ?>/images/somente-logo-130x104.png" />
        </div> -->


        <div class="container-fluid">
            <div class="navbar-header text-left pull-left col-md-4">
                <a href="<?php bloginfo('home'); ?>" class="navbar-brand"><strong><?php bloginfo('title'); ?></strong></a>
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
                    <?php
                    $defaults = array(
                        'menu_class'      => 'nav navbar-nav navbar-left',
                        'echo'            => true,
                        'depth'           => 0,
                        'walker'          => new Custom_Walker
                    );
                    wp_nav_menu( $defaults );
                    ?>
                    
                <!-- <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">HOME</a></li>
                    <li><a href="about-us.html">ABOUT US</a></li>
                    <li class="dropdown">
                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="features.html">Features</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio-item.html">Portfolio Item</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="sign-in.html">Sign in</a></li>
                            <li><a href="sign-up.html">Sign up</a></li>
                            <li><a href="backgrounds.html">Backgrounds</a></li>
                        </ul>
                    </li>
                    <li><a href="pricing.html">PRICING</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                    <li><a href="sign-up.html">Sign up</a></li>
                    <li><a href="sign-in.html">Sign in</a></li>
                </ul> -->
                <form class="navbar-form navbar-right" >                
                    <div class="form-group">
                        <input type="search" class="search-field" placeholder="Pesquisar…" value="" name="s" title="Pesquisar por:" />
                    </div>
                    <input class="btn-primary-tema" type="submit" value="Buscar" />
                </form>
            </div>

        </div> <!-- /container -->
    </div><!-- /navigation-bar -->