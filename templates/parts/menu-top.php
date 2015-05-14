<?php
/**
 * The template used to load the Top Navbar Menu in header*.php
 *
 * @package Alien Ship
 * @since Alien Ship 0.70
 */
?>
<!-- Top Menu -->

	<nav class="<?php echo apply_filters( 'alienship_top_navbar_class' , 'navbar top-navigation' ); ?>" role="navigation">
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>						 
		</div>

		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<?php wp_nav_menu( array(
				'theme_location' => 'top',
				'depth'          => 2,
				'container'      => false,
				'menu_class'     => 'nav navbar-nav',
				'walker'         => new wp_bootstrap_navwalker(),
				'fallback_cb'    => 'wp_bootstrap_navwalker::fallback'
				)
			); ?>
			
			<?php /* <div class="col-sm-3 col-md-3 pull-right">
			<form class="navbar-form" role="search">
			<div class="input-group menu-search">
			
				<form method="get" id="searchform" id="searchbox_015226756204795002446:iyt9d3oxja0" action="#">
					<div>
						<input value="015226756204795002446:iyt9d3oxja0" name="cx" type="hidden"/>
						<input value="FORID:11" name="cof" type="hidden"/>
						<input type="text" name="s" id="s" placeholder="Найти на сайте..." />
						<input type="submit" id="searchsubmit" value=" " />
					</div>
				</form>
			
			</div>
			</form>
			</div>*/?>
			
		</div>
	</div>
	</nav>
<!-- End Top Menu -->
