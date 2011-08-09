<?php
/*
Plugin Name: Tiny Slider
Plugin URI: http://iran98.org/category/wordpress/tinyslider/
Description: jQuery slide show for wordpress.
Version: 2.0
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
	register_setting('slider_option', 'slide_width');
	register_setting('slider_option', 'slide_height');
	register_setting('slider_option', 'slider_button');
	register_setting('slider_option', 'slide_secound');
	}
	add_action('admin_init', 'tinyslider_option');

function tinyslider_meta() {
	echo "<link rel='stylesheet' type='text/css' href='".home_url()."/wp-content/plugins/tinyslider/style.css' />";
	echo "<script type='text/javascript' src='".home_url()."/wp-content/plugins/tinyslider/script.js'></script>";
	}
	add_action('wp_head', 'tinyslider_meta');

	function tinyslider() { ?>
		<style>
		#slider, #slider li{
			width: <?php echo get_option('slide_width'); ?>px;
			height: <?php echo get_option('slide_height'); ?>px;
		}
		.sliderbutton{
			height: <?php echo get_option('slide_height'); ?>px;
		}
		div.descript_slide{
			width: <?php echo get_option('slide_width'); ?>px;
		}
		</style>
		<div id='slide_wrapper'>
			<div id='slide_container'>
				<?php if(get_option('slider_button') == 'yes') {?>
				<div class='sliderbutton' id='slideleft' onclick='slideshow.move(-1)'></div>
				<?php } ?>
				<?php /* Condition for empty slide */
				// Slide Content #1
					$get_slide_image_1 = get_option('slide_image_1');
				if (!$get_slide_image_1) {
					$get_slide_image_1 = get_bloginfo('url')."/wp-content/plugins/tinyslider/img/tomb_of_xerxes.jpg"; }

					$get_slide_link_1 = get_option('slide_link_1');
				if (!$get_slide_link_1) {
					$get_slide_link_1 = "http://en.wikipedia.org/wiki/Naqsh-e_Rustam"; }

					$get_slide_alt_1 = get_option('slide_alt_1');
				if (!$get_slide_alt_1) {
					$get_slide_alt_1 = "Naqsh-e Rustam"; }

				// Slide Content #2
					$get_slide_image_2 = get_option('slide_image_2');
				if (!$get_slide_image_2) {
					$get_slide_image_2 = get_bloginfo('url')."/wp-content/plugins/tinyslider/img/i_am_cyrus,_achaemenid_king_-_pasargadae.jpg"; }

					$get_slide_link_2 = get_option('slide_link_2');
				if (!$get_slide_link_2) {
					$get_slide_link_2 = "http://en.wikipedia.org/wiki/Pasargadae"; }

					$get_slide_alt_2 = get_option('slide_alt_2');
				if (!$get_slide_alt_2) {
					$get_slide_alt_2 = "Pasargadae"; }

				// Slide Content #3
					$get_slide_image_3 = get_option('slide_image_3');
				if (!$get_slide_image_3) {
					$get_slide_image_3 = get_bloginfo('url')."/wp-content/plugins/tinyslider/img/rostam.jpg"; }

					$get_slide_link_3 = get_option('slide_link_3');
				if (!$get_slide_link_3) {
					$get_slide_link_3 = "http://en.wikipedia.org/wiki/Rostam"; }

					$get_slide_alt_3 = get_option('slide_alt_3');
				if (!$get_slide_alt_3) {
					$get_slide_alt_3 = "Rostam"; }

				// Slide Content #4
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
				<div id='slider'>
					<ul>
						<li>
							<div class="descript_slide"><?php echo $get_slide_alt_1; ?></div>
							<a href="<?php echo $get_slide_link_1 ?>">
							<img src="<?php echo $get_slide_image_1; ?>" width="<?php echo get_option('slide_width'); ?>" height="<?php echo get_option('slide_height'); ?>" alt="<?php echo $get_slide_alt_1 ?>" /></a>
						</li>
						<li>
							<div class="descript_slide"><?php echo $get_slide_alt_2; ?></div>
							<a href="<?php echo $get_slide_link_2; ?>">
							<img src="<?php echo $get_slide_image_2; ?>" width="<?php echo get_option('slide_width'); ?>" height="<?php echo get_option('slide_height'); ?>" alt="<?php echo $get_slide_alt_2; ?>" /></a>
						</li>
						<li>
							<div class="descript_slide"><?php echo $get_slide_alt_3; ?></div>

							<a href="<?php echo $get_slide_link_3; ?>">
							<img src="<?php echo $get_slide_image_3; ?>" width="<?php echo get_option('slide_width'); ?>" height="<?php echo get_option('slide_height'); ?>" alt="<?php echo $get_slide_alt_3; ?>" /></a>
						</li>
						<li>
							<div class="descript_slide"><?php echo $get_slide_alt_4; ?></div>
							<a href="<?php echo $get_slide_link_4; ?>">
							<img src="<?php echo $get_slide_image_4; ?>" width="<?php echo get_option('slide_width'); ?>" height="<?php echo get_option('slide_height'); ?>" alt="<?php echo $get_slide_alt_4; ?>" /></a>
						</li>						
					</ul>
				</div>
				<?php if(get_option('slider_button') == 'yes') {?>
				<div class='sliderbutton' id='slideright' onclick='slideshow.move(1)'></div>
				<?php } ?>
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
			auto:<?php if(get_option('slide_secound')) { echo get_option('slide_secound'); } else { echo "4"; }?>,
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
			
			<tr><th><h3><?php _e('Slide Setting', 'tinyslider'); ?></h3></th></tr>
			<tr>
				<td><?php _e('Width Slider', 'tinyslider'); ?>:</td>
				<td>
					<input type="text" name="slide_width" value="<?php echo get_option('slide_width'); ?>" size="10" style="direction: ltr;"/>
					<?php _e('Pixel', 'tinyslider'); ?>
				</td>
			</tr>

			<tr>
				<td><?php _e('Height Slider', 'tinyslider'); ?>:</td>
				<td>
					<input type="text" name="slide_height" value="<?php echo get_option('slide_height'); ?>" size="10" style="direction: ltr;"/>
					<?php _e('Pixel', 'tinyslider'); ?>
				</td>
			</tr>

			<tr>
				<td><?php _e('Show Slider Button', 'tinyslider'); ?>:</td>
				<td>
					<input name="slider_button" id="yes" type="radio" value="yes" <?php checked( 'yes', get_option('slider_button') ); ?> />
					<label for="yes"><?php _e('Yes', 'tinyslider'); ?></label>
					&nbsp;
					<input name="slider_button" id="no" type="radio" value="no" <?php checked( 'no', get_option('slider_button') ); ?> />
					<label for="no"><?php _e('No', 'tinyslider'); ?></label>
				</td>
			</tr>

			<tr>
				<td><?php _e('Departure time', 'tinyslider'); ?>:</td>
				<td>
					<input type="text" name="slide_secound" value="<?php echo get_option('slide_secound'); ?>" size="10" style="direction: ltr;"/>
					<?php _e('Secound', 'tinyslider'); ?>
				</td>
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