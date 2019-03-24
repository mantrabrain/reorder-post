<?php
/*
* Plugin Name: Reorder Post
* Plugin URI: https://wordpress.org/plugins/reorder-post/
* Description: Easily Reorder your posts
* Author: Mantrabrain
* Author URI: https://mantrabrain.com/
* Version: 1.0.0
* Text Domain: reorder-post
*/

// exit if accessed directly
if (!defined('ABSPATH'))
    exit;

define('MB_REORDER_POST_URL', plugins_url('', __FILE__));
define('MB_REORDER_POST_PATH', plugin_dir_path(__FILE__));


include_once MB_REORDER_POST_PATH . 'includes/class-reorder-post.php';
/**
 * Get instance of main class.
 *
 * @return object Instance
 */

new MB_Reorder_Post();