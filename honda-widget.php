<?php
/**
 * Plugin Name: Honda Widget for Elementor
 * Description: Un widget personalizado para Elementor que muestra información de Honda.
 * Version: 1.0
 * Author: Jesus Jimenez
 */

if (!defined('ABSPATH')) exit; 

function register_honda_widget($widgets_manager) {
    require_once(__DIR__ . '/widgets/honda-widget.php');
    $widgets_manager->register(new \Honda_Widget());
}
add_action('elementor/widgets/register', 'register_honda_widget');

function honda_widget_styles() {
    wp_enqueue_style('honda-widget-style', plugins_url('css/style.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'honda_widget_styles');

function honda_widget_scripts() {
    wp_enqueue_script('honda-animations', plugins_url('js/honda-animations.js', __FILE__), array(), '1.0', true);
    wp_enqueue_script('honda-car-selector', plugins_url('js/honda-car-selector.js', __FILE__), array(), '1.0', true);
    wp_enqueue_script('honda-hybrid-buttons', plugins_url('js/honda-hybrid-buttons.js', __FILE__), array(), '1.0', true);
    wp_enqueue_script('honda-test-drive-form', plugins_url('js/honda-test-drive-form.js', __FILE__), array(), '1.0', true);
    wp_enqueue_script('honda-cotizador', plugins_url('js/honda-cotizador.js', __FILE__), array(), '1.0', true);
    wp_enqueue_script('honda-contacto', plugins_url('js/honda-contacto.js', __FILE__), array(), '1.0', true);
    wp_enqueue_script('honda-nom', plugins_url('js/honda-nom.js', __FILE__), array(), '1.0', true);
    wp_enqueue_script('honda-car-versions', plugins_url('js/honda-car-versions.js', __FILE__), array(), '1.0', true);
    wp_enqueue_script('honda-dynamic-car-selector', plugins_url('js/honda-dynamic-car-selector.js', __FILE__), array(), '1.0', true);
    wp_enqueue_script('img-completa', plugins_url('js/img-completa.js', __FILE__), array(), '1.0', true);
 }
 add_action('wp_enqueue_scripts', 'honda_widget_scripts');