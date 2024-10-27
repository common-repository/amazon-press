<?php
/*
Plugin Name: amazonpress
Plugin URI: http://www.wordpressconnect.net/
Description: Make money from your blog by advertising Amazon.com products specifically related to the topic of your posts.
Version: 8.5
Author: WPConnect Productions
Author URI: http://www.wordpressconnect.net/
Requires: WordPress Version 2.3 and PHP 5.x
*/

	// Include the class once if it doesn't exist.
	include_once("php/amazonpress.class.php");

	// Create an instance of the class once, if it doesn't exist.
	if(class_exists("amazonpress") AND !isset($amazonpressObj))
	{
		// Instantiate new instance of the class.
		$amazonpressObj = new amazonpress();
		
		/*
		 * Debugging Controls:
		 * Only change these if the plugin is not working properly for you and you want
		 * to try and find out why.
		 * 
		 * debug_mode: choose what level of debugging to use
		 *   options are:
		 *   off 	- nothing is sent to the log
		 *   basic	- basic messages are logged
		 *   all		- all possible debug messages are logged.
		 * 
		 * debug_visible: set this to true if you wish debugging messages to be
		 * visible on the live website as they occur.
		 *   options are:
		 *   true
		 *   false
		 *  
		 */
		$amazonpressObj->debug_mode = 'basic';
		$amazonpressObj->debug_visible = false;
		
		/**
		 * You shouldn't need to edit anything beyond this point.
		 */
		 
		// Define variables for amazonpress
		$amazonpressObj->basePath = dirname(__FILE__);
		$amazonpressObj->baseFileName = basename(__FILE__);
		$amazonpressObj->urlPath = get_option('siteurl') . str_replace(ABSPATH, "/", $amazonpressObj->basePath);

		// Add hooks as necessary to connect to WordPress
		add_action('admin_menu', array(&$amazonpressObj, 'wp_admin_init'));
		add_action('admin_menu', array(&$amazonpressObj, 'add_custom_box'));
		add_action('admin_notices', array(&$amazonpressObj, 'wp_admin_notices'));

		add_action('save_post',  array(&$amazonpressObj, 'save_postdata'));
		add_action('edit_post',  array(&$amazonpressObj, 'save_postdata'));
		add_action('publish_post',  array(&$amazonpressObj, 'save_postdata'));

		add_action('wp_head', array(&$amazonpressObj, 'wp_head'));
		add_action('admin_head', array(&$amazonpressObj, 'admin_head'));

		add_action('widgets_init', array(&$amazonpressObj, 'widget_init'));
		
		register_deactivation_hook( __FILE__, array(&$amazonpressObj, 'unInstall') );
		

		// Only add actions to the posts and live blog if the object is live (meaning ready to go)
		if($amazonpressObj->live)
		{
			add_action('the_content', array(&$amazonpressObj, 'wp_content'));
			
			
		}
	}

?>
