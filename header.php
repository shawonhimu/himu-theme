<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">

<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css" />

<?php wp_head();?>

</head>
<body <?php body_class(); ?>>
	<div id="header" style="background : #e88d33 url(<?php header_image();?>) no-repeat;">
	  <h1><?php bloginfo('description')?></h1>
	</div>
	<div id="topnav">
	  <?php
		
			wp_nav_menu(array(
				'theme_location' => 'mainmenu'
			));
		
		?>
	</div>