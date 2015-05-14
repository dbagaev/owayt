<?php
/**
 * The template used to load the Main Menu in header*.php
 *
 * @package Alien Ship
 * @since Alien Ship 0.70
 */
?>
<!-- Main menu -->
	<div class="top-navigation-background">&nbsp;</div>
	<nav class="<?php echo apply_filters( 'alienship_top_navbar_class' , 'navbar-fixed-top navbar top-navigation' ); ?>" role="navigation">
	<div class="container">		
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex2-collapse" style="margin-top: 0px;">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<p class="navbar-text navbar-site-title" style="margin-left: 24px;"><a href="<?php echo home_url(); ?>">Билет туда и потом обратно</a></p>
		</div>		

		<div class="collapse navbar-collapse navbar-ex2-collapse">
			<?php wp_nav_menu( array(
				'theme_location' => 'full-width',
				'depth'          => 2,
				'container'      => false,
				'menu_class'     => 'nav navbar-nav navbar-right',
				'walker'         => new wp_bootstrap_navwalker(),
				'fallback_cb'    => 'wp_bootstrap_navwalker::fallback'
				)
			);
			?>
		</div>
	</nav>
<!-- End Main menu -->
