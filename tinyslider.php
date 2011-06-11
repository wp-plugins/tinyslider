<?php
/*
Plugin Name: Tiny Slider
Plugin URI: http://iran98.org/category/wordpress/tinyslider/
Description: jQuery slide show for wordpress.
Version: 1.0
Author: Mostafa Soufi
Author URI: http://iran98.org/
License: GPL2
*/
load_plugin_textdomain('tinyslider','wp-content/plugins/tinyslider/lang');

function tinyslider_adminmenu() {
	add_posts_page(__('Tiny Slider', 'tinyslider'), __('Tiny Slider', 'tinyslider'), 'manage_options', 'tinyslider', 'tinyslider_menupage');
	}
	add_action('admin_menu', 'tinyslider_adminmenu');

function tinyslider_option() {
	register_setting('slider_option', 'slide_image_1');
	register_setting('slider_option', 'slide_link_1');
	register_setting('slider_option', 'slide_alt_1');
	register_setting('slider_option', 'slide_blank_1');
	register_setting('slider_option', 'slide_image_2');
	register_setting('slider_option', 'slide_link_2');
	register_setting('slider_option', 'slide_alt_2');
	register_setting('slider_option', 'slide_image_3');
	register_setting('slider_option', 'slide_link_3');
	register_setting('slider_option', 'slide_alt_3');
	register_setting('slider_option', 'slide_image_4');
	register_setting('slider_option', 'slide_link_4');
	register_setting('slider_option', 'slide_alt_4');	
	}
	add_action('admin_init', 'tinyslider_option');

function tinyslider_meta() {
	echo "<link rel='stylesheet' type='text/css' href='".home_url()."/wp-content/plugins/tinyslider/style.css' />";
	echo "<script type='text/javascript' src='".home_url()."/wp-content/plugins/tinyslider/script.js'></script>";
	}
	add_action('wp_head', 'tinyslider_meta');

	function tinyslider() { ?>
		<div id='slide_wrapper'>
			<div id='slide_container'>
				<div class='sliderbutton' id='slideleft' onclick='slideshow.move(-1)'></div>
				<div id='slider'>
					<ul>
						<li>
							<?php
								$get_slide_image_1 = get_option('slide_image_1');
							if (!$get_slide_image_1) {
								$get_slide_image_1 = get_bloginfo('url')."/wp-content/plugins/tinyslider/img/tomb_of_xerxes.jpg"; }

								$get_slide_link_1 = get_option('slide_link_1');
							if (!$get_slide_link_1) {
								$get_slide_link_1 = "http://en.wikipedia.org/wiki/Naqsh-e_Rustam"; }

								$get_slide_alt_1 = get_option('slide_alt_1');
							if (!$get_slide_alt_1) {
								$get_slide_alt_1 = "Naqsh-e Rustam"; }
							?>
							<a href="<?php echo $get_slide_link_1 ?>">
							<img src="<?php echo $get_slide_image_1; ?>" width="558" height="235" alt="<?php echo $get_slide_alt_1 ?>" /></a>
						</li>
						<li>
							<?php
								$get_slide_image_2 = get_option('slide_image_2');
							if (!$get_slide_image_2) {
								$get_slide_image_2 = get_bloginfo('url')."/wp-content/plugins/tinyslider/img/i_am_cyrus,_achaemenid_king_-_pasargadae.jpg"; }

								$get_slide_link_2 = get_option('slide_link_2');
							if (!$get_slide_link_2) {
								$get_slide_link_2 = "http://en.wikipedia.org/wiki/Pasargadae"; }

								$get_slide_alt_2 = get_option('slide_alt_2');
							if (!$get_slide_alt_2) {
								$get_slide_alt_2 = "Pasargadae"; }
							?>
							<a href="<?php echo $get_slide_link_2; ?>">
							<img src="<?php echo $get_slide_image_2; ?>" width="558" height="235" alt="<?php echo $get_slide_alt_2; ?>" /></a>
						</li>
						<li>
							<?php
								$get_slide_image_3 = get_option('slide_image_3');
							if (!$get_slide_image_3) {
								$get_slide_image_3 = get_bloginfo('url')."/wp-content/plugins/tinyslider/img/rostam.jpg"; }

								$get_slide_link_3 = get_option('slide_link_3');
							if (!$get_slide_link_3) {
								$get_slide_link_3 = "http://en.wikipedia.org/wiki/Rostam"; }

								$get_slide_alt_3 = get_option('slide_alt_3');
							if (!$get_slide_alt_3) {
								$get_slide_alt_3 = "Rostam"; }
						?>
							<a href="<?php echo $get_slide_link_3; ?>">
							<img src="<?php echo $get_slide_image_3; ?>" width="558" height="235" alt="<?php echo $get_slide_alt_3; ?>" /></a>
						</li>
						<li>
							<?php
								$get_slide_image_4 = get_option('slide_image_4');
							if (!$get_slide_image_4) {
								$get_slide_image_4 = get_bloginfo('url')."/wp-content/plugins/tinyslider/img/persia_cyrus2_world3.jpg"; }

								$get_slide_link_4 = get_option('slide_link_4');
							if (!$get_slide_link_4) {
								$get_slide_link_4 = "http://bs.wikipedia.org/wiki/Cyrus_Veliki"; }

								$get_slide_alt_4 = get_option('slide_alt_4');
							if (!$get_slide_alt_4) {
								$get_slide_alt_4 = "Cyrus Veliki"; }
							?>
							<a href="<?php echo $get_slide_link_4; ?>">
							<img src="<?php echo $get_slide_image_4; ?>" width="558" height="235" alt="<?php echo $get_slide_alt_4; ?>" /></a>
						</li>						
					</ul>
				</div>
				<div class='sliderbutton' id='slideright' onclick='slideshow.move(1)'></div>
				<ul id='pagination' class='pagination'>
					<li onclick='slideshow.pos(0)'></li>
					<li onclick='slideshow.pos(1)'></li>
					<li onclick='slideshow.pos(2)'></li>
					<li onclick='slideshow.pos(3)'></li>
				</ul>
			</div>
		</div>
		<script type='text/javascript'>
		var slideshow=new TINY.slider.slide('slideshow',{
			id:'slider',
			auto:4,
			resume:false,
			vertical:false,
			navid:'pagination',
			activeclass:'current',
			position:0,
			rewind:false,
			elastic:true,
			left:'slideleft',
			right:'slideright'
		});
		</script>
	<?php }

function tinyslider_menupage() {
	if(!current_user_can('manage_options')) {
		wp_die( __('You do not have sufficient permissions to access this page.', 'tinyslider') ); } ?>

<div class="wrap">
	<h2><?php _e('Tiny Slider Settings', 'tinyslider'); ?></h2>
	<form method="post" action="options.php">
	<?php settings_fields('slider_option'); ?>
		<table>
			<tr><th><h3><?php _e('Slide Content', 'tinyslider'); ?></h3></th></tr>
			<tr>
				<td></td>
				<td><?php _e('src', 'tinyslider'); ?>:</td>
				<td><?php _e('link', 'tinyslider'); ?>:</td>
				<td><?php _e('alt', 'tinyslider'); ?>:</td>
			</tr>

			<tr>
				<td><?php _e('image', 'tinyslider'); ?> 1:</td>
				<td><input type="text" name="slide_image_1" value="<?php echo get_option('slide_image_1'); ?>" size="60" style="direction: ltr;"/></td>
				<td><input type="text" name="slide_link_1" value="<?php echo get_option('slide_link_1'); ?>" size="60" style="direction: ltr;"/></td>
				<td><input type="text" name="slide_alt_1" value="<?php echo get_option('slide_alt_1'); ?>" size="50"/></td>
			</tr>

			<tr>
				<td><?php _e('image', 'tinyslider'); ?> 2:</td>				
				<td><input type="text" name="slide_image_2" value="<?php echo get_option('slide_image_2'); ?>" size="60" style="direction: ltr;"/></td>
				<td><input type="text" name="slide_link_2" value="<?php echo get_option('slide_link_2'); ?>" size="60" style="direction: ltr;"/></td>
				<td><input type="text" name="slide_alt_2" value="<?php echo get_option('slide_alt_2'); ?>" size="50"/></td>
			</tr>

			<tr>
				<td><?php _e('image', 'tinyslider'); ?> 3:</td>					
				<td><input type="text" name="slide_image_3" value="<?php echo get_option('slide_image_3'); ?>" size="60" style="direction: ltr;"/></td>
				<td><input type="text" name="slide_link_3" value="<?php echo get_option('slide_link_3'); ?>" size="60" style="direction: ltr;"/></td>
				<td><input type="text" name="slide_alt_3" value="<?php echo get_option('slide_alt_3'); ?>" size="50"/></td>
			</tr>

			<tr>
				<td><?php _e('image', 'tinyslider'); ?> 4:</td>				
				<td><input type="text" name="slide_image_4" value="<?php echo get_option('slide_image_4'); ?>" size="60" style="direction: ltr;"/></td>
				<td><input type="text" name="slide_link_4" value="<?php echo get_option('slide_link_4'); ?>" size="60" style="direction: ltr;"/></td>
				<td><input type="text" name="slide_alt_4" value="<?php echo get_option('slide_alt_4'); ?>" size="50"/></td>
			</tr>
		</table>

		<p class="submit">
			<input type="hidden" name="action" value="update" />
			<input type="hidden" name="page_options" value="slide_image_1,slide_link_1,slide_alt_1" />
			<input type="submit" class="button-primary" value="<?php _e('Save Changes', 'tinyslider') ?>" />
		</p>
	</form>
</div>
	<?php } ?>