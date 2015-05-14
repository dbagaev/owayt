<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up to <div id="content">
 *
 * @package owayt
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part( '/templates/parts/meta' ); ?>
<title><?php wp_title( '&#8226;', true, 'right' ); ?></title>
<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.min.js" type="text/javascript"></script><![endif]-->

<?php
wp_head();
do_action( 'alienship_head' ); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 9]><p class="browsehappy alert alert-danger">You are using an outdated browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

	<?php if(is_single() && get_post_layout(get_the_id()) == '1c') 
		get_template_part( '/templates/parts/menu', 'full-width' );
	else
		get_template_part( '/templates/parts/menu', 'top' );
	?>	
	
	<?php if(is_single() && get_post_layout(get_the_id()) == '1c') : ?>
	<div id="page" class="container-fluid hfeed site">
	<?php else : ?>
	<div id="page" class="container hfeed site">
	
		<div class="row">
			<header id="masthead" class="site-header col-md-12" role="banner">
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
	   		</header><!-- #masthead -->
		</div>
	
	<?php endif; ?>
			
		<div id="content" class="site-content row">

		<?php if ( function_exists( 'breadcrumb_trail' ) && !( is_front_page() || is_search() ) ) {
			breadcrumb_trail( array(
				'container'   => 'div',
				'separator'   => '/',
				'show_browse' => false
				)
			);
		}		
		
		