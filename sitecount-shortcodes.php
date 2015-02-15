<?php
/**
 * Plugin Name: WPMUShortcodes Blogs and Users count
 * Plugin URI: http://mickekring.se
 * Description: Some shortcodes for displaying number of blogs and users in a multisite environment.
 * Version: 1.0.0
 * Author: Micke Kring
 * Author http://mickekring.se
 * License: 
 */

$blog_count = get_blog_count();
$user_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->users" );

//register the shortcode
add_shortcode('sitecount', 'get_blog_count');
add_shortcode('usercount', 'get_user_count');
