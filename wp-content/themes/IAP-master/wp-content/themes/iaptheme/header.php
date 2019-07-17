<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i">
	</head>
<body>

<div class="container">
	<div class="row">
		<!-- Logo -->
		<div class="col-sm-3">
			<div class="site-logo">
				<a href="<?php get_bloginfo('url')?>"><?php echo get_bloginfo( 'name' ); ?></a>
			</div>
		</div>
		<!-- Meniuri -->
		<div class="col-sm-9">
			<!-- <div class="butonul">buton</div> -->
			<div class="primary-menu">
				<?php 
					/**
					 * Here we need to add the primary menu.
					 */
					if ( has_nav_menu( 'primary' ) ) : 
						wp_nav_menu( array(
						 	'theme_location'  => 'primary',
						 	'container' => 'nav'
						) );
					endif;
				?>
			</div>
		</div>
	</div>
</div>