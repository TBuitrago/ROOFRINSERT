<?php
/**
 * Plugin Name: Roofr Shortcode
 * Description: This plugin is for inserting Roofr iframe.
 * Version: 1.0
 * Author: Surch Digital
 */

// Function to generate the shortcode
function roofr_shortcode() {
    return '<iframe id="roofr-iframe" src="https://app.roofr.com/instant-estimator/9021db29-46b6-41d7-89a4-bf107914b368/LoyaltyExteriorSolutions" frameborder="0" scrolling="no"></iframe>';
}

// Register the shortcode
add_shortcode('roofr', 'roofr_shortcode');

// Enqueue custom CSS and JavaScript
function roofr_enqueue_assets() {
    wp_enqueue_style('roofr-shortcode-css', plugin_dir_url(__FILE__) . 'roofr-shortcode.css');
    wp_enqueue_script('roofr-shortcode-js', plugin_dir_url(__FILE__) . 'roofr-shortcode.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'roofr_enqueue_assets');
?>
