<?php
/*
Plugin Name: Plugin Temlpate
Plugin URI:  https://wordpress.org/plugins/
Description: This is the description of your Plugin
Version:     0.1-alpha
Author:      Bryan Rojas
Author URI:  http://fb.com/bryanrojasq
Text Domain: plugin-tpl
Domain Path: /lang
 */

/*
* Global
*/

$wpdupecop_options = get_option('wpdupecopsettings');

//original article
$original = $wpdupecop_options['original'];
//spun article
$rewritten = $wpdupecop_options['rewrite'];

//compare article
$wp_dupecopfunction = similar_text($original, $rewritten, $result);

//admin page

function wp_dupe_cop_page(){
	global $wpdupecop_options;
	global $result;
	ob_start();
 ?>
 <div class="wrap">
 	<form action="options.php" method="POST">

 	<?php settings_fields('wpdupecopgroup'); ?>

 		<h1>Wordpress Dupecop Settings</h1>
 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus veniam quibusdam, ratione explicabo non.</p>
 		<h3 class="title">Common Setting #1</h3>
 		<textarea name="wpdupecopsettings[original]" class="large-text" cols="30" rows="10"><?php echo $wpdupecop_options['original']; ?></textarea>
 		<h3 class="title">Common Setting #2</h3>
 		<textarea name="wpdupecopsettings[rewrite]" class="large-text" cols="30" rows="10"><?php echo $wpdupecop_options['rewrite']; ?></textarea>
 		<input type="submit" value="Compare Spun Articles" class="button-primary">
 		<input type="button" class="button" value="<?php echo $result . '%'; ?>">
 	</form>
 </div>

<?php
echo ob_get_clean();
}

//admin tab
function wp_dupe_cop_tab(){
	add_options_page('wp dupecop','WP Dupecop','manage_options','wpdupecop','wp_dupe_cop_page');
}

add_action('admin_menu','wp_dupe_cop_tab');

//register settings

function wp_dupe_cop_setting(){
	register_setting('wpdupecopgroup', 'wpdupecopsettings');
}

add_action('admin_init','wp_dupe_cop_setting');