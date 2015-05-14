<?php
/**
 * This file contains code for displaying of general types of content
 */
?>


<article role="article" id="post-<?php the_ID(); ?>" <?php post_class( (is_single() ? 'post-single' : 'post-exceprt') . ' layout-'.get_post_layout(get_the_id()) ); ?>>
<?php if (is_singular()) : ?>
	
	<?php get_template_part( '/templates/parts/content-entry-header' ); ?>
	<div class="entry-content">
		<?php
		// Display excerpt on archives, full content in singular views.
		the_content();  
				
		wp_link_pages();
		?>
		
	</div><!-- div.entry-content -->

	<?php get_template_part( '/templates/parts/content-entry-footer' ); ?>
	
<?php else : ?>
		<div class="post-image">
			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(210, 210), array('title' => "") ); ?></a>
			<?php endif; ?>	
		</div>
	
		<?php if ( is_sticky() ) : ?>
			<div class="sticky"><?php _e( 'Important', 'owayt' ); ?></div>
		<?php endif; ?>
					
		<h1> <a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'owayt'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					
		<div class="post-meta">
			<span class="date"><?php the_time('F j, Y'); ?></span> 
		</div>
								
		<div class="exceprt"> 
		    <?php the_excerpt(); ?>
			<div class="more"><a href="<?php the_permalink(); ?>"><?php _e('Read more &rarr;', 'owayt'); ?></a></div> 
		</div>
<?php endif; ?>
</article>