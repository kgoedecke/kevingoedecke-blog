<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <?php wp_head(); ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-120x120.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class(); ?>>
	<?php hybrid_do_atomic( 'body_top' ); ?>
	<!--skip to content link-->
	<a class="skip-content" href="#main"><?php _e('Skip to content', 'author'); ?></a>
	<div id="overflow-container" class="overflow-container">
		<div class="max-width">
			<div id="main-sidebar" class="main-sidebar">
				<?php hybrid_do_atomic( 'before_main_sidebar' ); ?>
				<header class="site-header" id="site-header" role="banner">
					<div id="title-container" class="title-container">
						<?php
						$avatar_method = get_theme_mod('avatar_method');
						if( $avatar_method == 'gravatar' || $avatar_method == 'upload' ) { ?>
							<div id="site-avatar" class="site-avatar" style="background-image: url('<?php echo ct_author_output_avatar(); ?>')"></div>
						<?php } ?>
						<div class="container">
							<?php get_template_part('logo')  ?>
							<?php
							if( get_bloginfo('description') ) {
								echo '<p class="tagline">' . get_bloginfo("description") . '</p>';
							} ?>
						</div>
					</div>

					<button id="toggle-navigation" class="toggle-navigation" aria-expanded="false">
						<span class="screen-reader-text"><?php _e('open primary menu', 'author'); ?></span>
						<i class="fa fa-bars"></i>
					</button>
					<?php ct_author_social_icons_output('header'); ?>
					<?php get_template_part( 'menu', 'primary' ); ?>
					<div style="float: ;" class="details-container">
						<p>
							<i class="fa fa-home"></i> Stuttgart, Germany<br>
							<i class="fa fa-university"></i> University of Stuttgart<br>
							<i class="fa fa-suitcase"></i> Software Developer<br>
							<img style="width: 16px;" src="http://kevingoedecke.me/wp-content/uploads/2015/08/german-flag.png"> <a class="tel" href="tel:004917663875842">+49 176 638 758 42</a><br>
							<img style="width: 16px;" src="http://kevingoedecke.me/wp-content/uploads/2015/08/us-flag.png"> <a class="tel" href="tel:0015129009934">+1 (512) 900 9934</a>
						</p>
					</div>
				</header>
				<?php hybrid_do_atomic( 'after_header' ); ?>
				<?php get_sidebar( 'primary' ); ?>
				<?php hybrid_do_atomic( 'after_sidebar' ); ?>
			</div>
			<?php hybrid_do_atomic( 'before_main' ); ?>
			<section id="main" class="main" role="main">
				<?php hybrid_do_atomic( 'main_top' ); ?>