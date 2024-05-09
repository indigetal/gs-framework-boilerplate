<?php
/**
 * Plugin Name: Greenshift Framework Boilerplate
 * Plugin URI: https://greenshiftwp.com/
 * Description: This plugin registers variables, classes, and framework groups in the GreenShift block library following the CUBE CSS methodology and utilizes PostCSS to lay the groundwork for implementing a Design System in GreenShift
 * Version: 1.0
 * Author: Wpsoul, Brandon Meyer, Andy Bell
 * Author URI: https://indigetal.com
 * License: GPL2
 */
 
 /**
 * Enqueue all CSS files in the assets/css/dist/ directory and its subdirectories.
 */
function enqueue_css_files() {
    // Define the directory containing CSS files
    $css_dir = get_template_directory_uri() . '/assets/css/dist/';

    // Recursive function to get all CSS files in the directory and its subdirectories
    function get_css_files($directory) {
        $css_files = glob($directory . '/*.css');
        foreach (glob($directory . '/*', GLOB_ONLYDIR) as $subdirectory) {
            $css_files = array_merge($css_files, get_css_files($subdirectory));
        }
        return $css_files;
    }

    // Get an array of all CSS files in the directory and its subdirectories
    $all_css_files = get_css_files(get_template_directory() . '/assets/css/dist/');

    // Loop through each CSS file and enqueue it
    foreach ($all_css_files as $css_file) {
        // Get the file name relative to the CSS directory
        $file_name = str_replace(get_template_directory() . '/assets/css/dist/', '', $css_file);

        // Enqueue the CSS file using its file name as the handle
        wp_enqueue_style($file_name, $css_dir . $file_name);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_css_files');

// Include files that register GreenShift variables, class presets, and framework groups
require_once __DIR__ . '/register/variables.php';
require_once __DIR__ . '/register/data-attributes.php';
require_once __DIR__ . '/register/framework-groups/blocks.php';
require_once __DIR__ . '/register/framework-groups/compositions.php';
require_once __DIR__ . '/register/framework-groups/global.php';
require_once __DIR__ . '/register/framework-groups/utilities.php';