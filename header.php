<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="description" content="Norrsidans installation & Teknik AB">
  	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
  	<meta name="author" content="Anders Gustavsson">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  	<script src="<?php echo get_template_directory_uri(); ?>'/js/app.js'"></script>
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<nav class="nav-bar">
			<a href="<?php echo home_url(); ?>">
				<!-- <img src="<?php //echo get_template_directory_uri(); ?>/src/images/logo.png" class="nitab-logo" alt="Image of the company Nitab Logo"/> -->
				<h1 class="header-title">Norrsidans installation & Teknik AB</h1>
			</a>
			<div class="nav-menu"><?php wp_nav_menu(array('theme_location'=>'primary')); ?></div>
		</nav>
	</header>