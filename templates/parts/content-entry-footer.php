<?php
/**
 * The template part for displaying the post entry footer
 * containing the categories, tags, and comment link/information.
 */
?>
<footer class="entry-footer">
	<?php if( 'post' == get_post_type() ) :
		/**
		 * Get the categories for this post.
		 *
		 * Translators: The comma is used between each category. There is a space after the comma.
		 */
		$category_list = get_the_category_list( __( ', ', 'alienship' ) );
	
		/**
		 * Get the tags for this post.
		 *
		 * Translators: The comma is used between each tag. There is a space after the comma.
		 */
	$tag_list = get_the_tag_list( '', __( ', ', 'alienship' ) ); ?>

		
		
		<div class="text-width row">
		
		<div class="entry-categories col-sm-6">
		<span class="cat-links">
			В: <?php echo $category_list; ?>
		</span>
		</div>
		
		
		<?php if ( '' != $tag_list ) : ?>
		<div class="entry-tags col-sm-6">
			<span class="tags-links">
				Теги: <?php echo $tag_list; ?>
			</span></div>
		<?php endif; ?>
		
		<?php if ( current_user_can('edit_posts') ) :?>
		</div>
		<br>
		<div class="centered">
		<div class="adaptive-width">
		<?php edit_post_link( __( 'Edit', 'alienship' ), '', '' );?>
		</div>
		</div>
		<?php endif; ?>

		<?php /*if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
			<span class="comments-link">
				<i class="glyphicon glyphicon-comment"></i>
				<?php comments_popup_link( __( ' Leave a comment', 'alienship' ), __( ' 1 Comment', 'alienship' ), __( ' % Comments', 'alienship' ) ); ?>
			</span>
		<?php endif;*/ ?>

	<?php endif; ?>
</footer><!-- .entry-footer -->