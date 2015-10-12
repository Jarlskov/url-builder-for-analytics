<?php
/**
 * Plugin Name: URL Builder for Analytics
 * Plugin URI: https://github.com/Jarlskov/google-analytics-url-builder
 * Description: This plugin adds an easy way to create a Google Analytics URL for your posts.
 * Version: 0.0.1
 * Author: Jesper Jarlskov
 * Author URI: http://jesperjarlskov.dk
 * Text Domain: url-builder-for-analytics
 * License: GPL2
 */

add_action( 'add_meta_boxes', 'url_builder_post_meta_box' );

/**
 * Main function constructing the analytics URL builder meta boxes for all custom post types.
 */
function url_builder_post_meta_box() {
    load_plugin_textdomain( 'url-builder', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    $screens = get_post_types( array(), 'names' );
    foreach ( $screens as $screen ) {
        add_meta_box(
            'url_builder_meta_box',
            'Analytics URL builder',
            'url_builder_post_meta_box_render',
            $screen
        );
    }
}

/**
 * Render the URL builder meta box.
 * Outputs the HTML directly to the browser, WordPress style!
 */
function url_builder_post_meta_box_render() {
    include( __DIR__ . '/meta_box_post_form.php' );
    wp_enqueue_script( 'url-builder-for-analytics', plugins_url() . '/url-builder-for-analytics/url-builder-for-analytics.js', 'jquery', '0.0.1', true );
}
