<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo bloginfo(); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head();?>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html"><?php echo bloginfo()?></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<?php
				wp_nav_menu(
					array(
						'container'=>false,
						'menu_class'=>'links',
						'theme_location'=>'top_menu'
					)
				);
				?>
			</nav>
	
	
		