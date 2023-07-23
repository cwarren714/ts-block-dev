<?php
/**
 * Plugin Name: Sample TS Plugin
 * Description: Working start for TS Wordpress plugin
 * Version: 1.0.0
 * Author: Chandler Warren
 *
 * PHP Entry point for TypeScript starter template * 
 * If you want to enqueue your assets for the block editor, use the 'enqueue_block_editor_assets' action instead
 */
add_action('wp_enqueue_scripts', function(): void {
  
  // When used in a WordPress theme (place this file in functions.php of your theme)
  // $script_args = include( get_template_directory() . '/assets/public/scripts.asset.php');
  // wp_enqueue_script('wp-typescript', get_template_directory_uri() . '/assets/public/scripts.js', $script_args['dependencies'], $script_args['version'] ); 
  
  // When used in a WordPress plugin
  $script_args = include( plugin_dir_path( __FILE__ ) . 'assets/public/scripts.asset.php');
  wp_enqueue_script('wp-typescript', plugins_url('assets/public/scripts.js', __FILE__), $script_args['dependencies'], $script_args['version']);
});