<?php
/*
	Plugin Name: Knowledge Bot
	Plugin URI: 
	Description: Ads knowlege bot to wordpress site
	Author: Steve Glick
	Version: 1.0.0
	Author URI: 
	
 */

 //exit if accessed directly
 if( ! defined('ABSPATH')){
     exit;
 }
 require_once(plugin_dir_path(__FILE__).'/includes/kbot-scripts.php');

 require_once(plugin_dir_path(__FILE__).'/includes/kbot-class.php');

//register widget
function register_kbot(){
	register_widget('kbot_Widget');
}

//hook in function
add_action('widgets_init', 'register_kbot');