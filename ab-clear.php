<?php /* 
*******************************************************************************
Plugin URI:   http://trm96.com/oi_blog/wordpress-admin-bar-themes/clear-theme/
Plugin Name:  Clear theme for Admin bar 
Description:  Adds a clear theme to the WordPress <a href="http://www.viper007bond.com/wordpress-plugins/wordpress-admin-bar/">Admin Bar</a> plugin. Released using <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/us/">Creative Commons BY-NC-SA</a>.
Version:      1.0.8
Author:       trm96 
Author URI:   http://trm96.com/

*******************************************************************************
*/
add_filter( 'wpabar_themes', 'myname_wpabar_theme' );

function myname_wpabar_theme( $themes ) {
	$themes['myname'] = array(
		'name' => 'Clear Float',
		'css' => '/wp-content/plugins/clear-theme-for-viper007bonds-admin-bar/clear.css',
	);
	$themes['myname2'] = array(
		'name' => 'Clear No Float',
		'css' => '/wp-content/plugins/clear-theme-for-viper007bonds-admin-bar/clear2.css',
	);
	$themes['myname3'] = array(
		'name' => 'Clear Dark Float',
		'css' => '/wp-content/plugins/clear-theme-for-viper007bonds-admin-bar/clear3.css',
	);
	$themes['myname4'] = array(
		'name' => 'Clear Dark No Float',
		'css' => '/wp-content/plugins/clear-theme-for-viper007bonds-admin-bar/clear4.css',
	);
	return $themes;
}

?>