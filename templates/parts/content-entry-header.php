<?php
/**
 * The template part for displaying the post entry header
 * containing the published date and author byline.
 */
?>
<header class="entry-header">

	<?php if ( has_post_thumbnail() ) { ?>
		<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'aligncenter', 'title' => "" ) ); ?>
		<?php
	} // has_post_thumbnail() 
	?>

	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<?php /* if( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php alienship_posted_on(); ?>
		</div>
	<?php endif; */ ?>
</header>