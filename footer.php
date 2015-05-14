<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package owayt
 */
?>

</div><!-- #content -->

</div><!-- #page -->

<footer class="site-footer" id="colophon" role="contentinfo">
	<div class="container">
		<div class="row">
		
		    <?php 
		    // Analyse panels
		    $panel_ids = array();
		    
		    foreach(array('footer-left', 'footer-central', 'footer-right') as $id)
		    {
		    	
		    	
		    	if(sizeof(wp_get_sidebars_widgets()[$id.'-bar']) > 0 )
		    		$panel_ids[] = $id.'-bar';		    	 
		    	else if(has_nav_menu($id.'-menu') )
		    		$panel_ids[] = $id.'-menu';		    	 
		    }
		    
		    if(sizeof($panel_ids) == 0)
		    	$panel_ids[] = 'fake';
		    
		    $bootstrap_width_class = 'col-sm-' . (12 / sizeof($panel_ids));
		    $bootstrap_width_class_0 = 'col-md-' . (12 / sizeof($panel_ids) - 1) . ' col-sm-' . (12 / sizeof($panel_ids));
		    
		    $idx = 0;
		    foreach($panel_ids as $id)
		    {
		    	if($idx == 0)
		    	{
		    		echo('<div class="footer-logo footer-text col-md-1">');
		    		echo('<img src="'.get_template_directory_uri().'/img/footer-logo.png">');
		    		echo('</div>');
		    		echo('<div class="footer-text ' . $bootstrap_width_class_0 .'">');
		    	}
		    	else
		    		echo('<div class="footer-text ' . $bootstrap_width_class .'">');
		    		    	
		    	if(sizeof(wp_get_sidebars_widgets()[$id]) > 0)
		    	{
		    		dynamic_sidebar($id);	
		    	}
		    	else if(has_nav_menu($id))
		    	{
		    		wp_nav_menu( array(
		    				'theme_location' => $id,
		    				'container'      => false,
		    				'menu_class'     => 'footer-nav mobile')
		    		);
		    		
		    	}
		    	
		    	echo('</div>');

		    	$idx++;
		    	
		    }
		    ?>
		
		</div><!-- .row -->
		<div class="row footer-copyright">
		<a href="https://github.com/dbagaev/wp-theme-owayt">owayt theme</a> design &copy; 2015 <a href="http://linkedin.com/in/dmytrobagaiev/">Dmytro Bagaiev</a>
		</div>
	</div><!-- .container -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>