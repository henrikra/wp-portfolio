<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Portfolio CV
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/henrik-raitasola-logo.png">
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-1.11.2.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Abel|Ubuntu:400,500' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/stylesheets/animate.css">

<?php wp_head(); ?>
</head>

<?php

$site_logo = get_field('logo');
$full_name = get_field('full_name');
$job_title = get_field('job_title');
$header_bg = get_field('header_background');

?>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfoliocv' ); ?></a>
	<header id="header" style="background-image: url(<?php echo $header_bg['url']; ?>)">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<img class="header--logo" src="<?php echo $site_logo['url'] ?>"
						alt="<?php echo $site_logo['alt'] ?>" title="<?php echo $site_logo['title'] ?>">
					</div>
				</div>
				<div class="row">
					<div id="header-hr" class="col-sm-6"><hr/></div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h1 class="header--full-name"><?php echo $full_name; ?></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h2 class="header--job-title"><small><i class="fa fa-terminal"></i> <?php echo $job_title; ?></small></h2>
					</div>
				</div>
			</div>
			<button class="header--continue-btn" type="button">
				<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
			</button>
		</header>
		<nav id="navigation" class="navbar navbar-inverse">
			<div class="wrapper">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a id="menu-home" class="navbar-brand" href="#">Henrik Raitasola</a>
					</div>

					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' => 'nav',
							'container_class' => 'navbar-collapse collapse',
							'menu_class' => 'nav navbar-nav navbar-right'
						));
					?>

				</div><!-- /.container-fluid -->
			</div>
		</nav>

	