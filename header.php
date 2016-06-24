<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package helloworld
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'helloworld' ); ?></a>

	<!-- Top bar -->
    <div id="topbar">
        <div class="container-fluid">
            <div class="container-inner">
                <div class="top-bar-section">
                    <ul class="social">
                        <li>
                            <a href="https://www.facebook.com/svhelloworld/" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div><!--
                --><div class="top-bar-section">
                    <?php wp_nav_menu( array( 'theme_location' => 'top-bar', 'container_class' => 'navigation', 'menu_id' => 'top-bar-menu' ) ); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header role="banner">
        <!-- Navigation -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
	                    <?php if ( is_front_page() && is_home() ) : ?>
							<h1><?php bloginfo( 'name' ); ?></h1>
						<?php else : ?>
							<span><?php bloginfo( 'name' ); ?></span>
						<?php endif; ?>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php
	                wp_nav_menu( array(
	                	'menu'              => 'primary',
	                	'theme_location'    => 'primary',
	                	'depth'             => 2,
	                	'container'         => 'div',
	                	'container_class'   => 'collapse navbar-collapse',
	                	'container_id'      => 'navbar-main',
	                	'menu_class'        => 'nav navbar-nav',
	                	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                	'walker'            => new wp_bootstrap_navwalker())
	                );
                ?>
            </div>
        </nav>

        <!-- Banners -->
        <div id="banners">
            <div class="banner">
                <div class="banner-inner">
                    <div class="banner-photo" data-115-start="transform: translate(0px, 0px);" data--715-top="transform: translate(0%, 120%);" style="background-image: url('<?php echo( get_header_image() ); ?>');"></div>
                </div>
            </div>

            <div id="banner-slider-pager" class="item-slider-pager">
                <div class="item-slider-pager-inner"></div>
            </div>
        </div>
    </header>

	<!-- Content -->
	<section id="content" class="site-content">
		<div class="container-fluid">
			<div class="container-inner">
                <div class="row">
