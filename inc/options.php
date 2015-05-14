<?php
/**
 * Theme Options Page
 *
 * Adds menu item to "appearance" and displays theme options page
 *
 * @package owayt
 */

add_action('admin_menu', 'owayt_appearance_menu');

function owayt_appearance_menu() {
	add_theme_page('Theme options', 'Theme options', 'edit_theme_options', 'owayt_theme_options', 'owayt_show_options');
}

function owayt_show_options() {
	
	if($_POST['submit'] == 11)
	{
		$owayt_gallery_category = intval($_POST['gallery_category']);
		add_option('owayt_gallery_category', $owayt_gallery_category);
		update_option('owayt_gallery_category', $owayt_gallery_category);
	}
	
	?>

<form method="POST" accept-charset="utf-8" target="_self" action="<?php echo site_url('wp-admin/themes.php?page=owayt_theme_options'); ?>">	
	
<table class="form-table">
	<tr><td width="30%">
		<label>Gallery category:</label>
	</td><td>
		<?php wp_dropdown_categories(array(
				'hide_empty' => 0, 
				'name' => 'gallery_category', 
				'orderby' => 'name', 
				'selected' => get_option('owayt_gallery_category', 0), 
				'hierarchical' => true, 
				'show_option_none' => __('None'))); 
		?>
	</td></tr>
	
	<tr><td>
	</td><td>
		<button name="submit" value="11" type="submit" class="button button-primary">Apply changes</button>
	</td></tr>
</table>	
	
	
	
</form>


	
	
	
	<?php 
	
	
}