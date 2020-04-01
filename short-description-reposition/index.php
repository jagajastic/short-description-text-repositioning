<?php


/**
 * Plugin Name: Short Description Text Repositioning 
 * Description: A plugin that reposition short description text to be below the thumbnail
 * Author: Joseph Ibrahim (Vertex)
 * Version: 0.0.1
 * Author URI: https://github.com/jagajastic/short-description-text-repositioning
 */

if (!function_exists('add_action')) {

    echo "Hey there! I'm just a Plugin, not much I can do for you here";
    exit;
}

function wc_order_tabs() {
    /** excerpt position change **/
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
}

add_action('init', 'wc_order_tabs');