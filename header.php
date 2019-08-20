<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Fonts
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&amp;display=swap" rel="stylesheet">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Favicons
	================================================== -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#fdb235">
	<meta name="theme-color" content="#ffffff">

	<!-- Bugherd -->
	<script type='text/javascript'>
	// (function (d, t) {
	//   var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
	//   bh.type = 'text/javascript';
	//   bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=laiwjydrp97wm6hiltzcxa';
	//   s.parentNode.insertBefore(bh, s);
	//   })(document, 'script');
	// </script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div class="header-top" aria-hidden="true"></div>
	<header>
		<div class="container">
			<div class="row">
				<div class="columns-4">
					<nav class="main-navigation">
						<div class="close">
							<i class="fa-fw fas fa-times fa-3x"></i>
						</div>
						<?php if(has_nav_menu('main_nav')){
									$defaults = array(
										'theme_location'  => 'main_nav',
										'menu'            => 'main_nav',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									); wp_nav_menu( $defaults );
								}else{
									echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
								} ?>
					</nav>
				</div>
				<div class="menu-trigger mobile-show">
					<i class="fa-fw fas fa-bars"></i>
				</div>
				<div class="close">
					<i class="fa-fw fas fa-close fa-3x"></i>
				</div>
				<div class="logo columns-4">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/TheHomecomers_Text.png" alt="Homecomers Logo" /></a></h1>
				</div>
				<div class="columns-4 social-list">
					<ul class="social">
						<li><a href="https://www.facebook.com/TheHomecomers/?modal=admin_todo_tour" target="_blank"><span class="sr-only">Facebook</span><i class="fa-fw fab fa-2x fa-facebook-f"></i></a></li>
						<li><a href="https://twitter.com/TheHomecomers" target="_blank"><span class="sr-only">Twitter</span><i class="fa-fw fab fa-2x fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/thehomecomers/ " target="_blank"><span class="sr-only">Instagram</span><i class="fa-fw fa-2x fab fa-instagram"></i></a></li>
					</ul>
			</div>
		</div>
	</header>
	
