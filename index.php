<?php
/*
Plugin Name: Slider Dinamico compatible con Elementor 
Description: Slider Dinamico tipo Acordeon 
Version: 1.1
Author: dannieldev
*/

// Código del plugin aquí

add_action( 'wp_head', 'agregar_ga' );
function agregar_ga() {
    echo "
    <script src='https://code.jquery.com/jquery-3.6.4.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>";
}


// Verifica si Elementor está activo
if (defined('ELEMENTOR_PATH')) {
    // Incluye el widget personalizado
    add_action('elementor/widgets/widgets_registered', function () {
        include_once('widget.php');
        include_once('alert.php');
    });
}


// Asegúrate de que esto solo se ejecute dentro de WordPress y Elementor
//if (!defined('ABSPATH')) exit; // Sal de WordPress si es accesado directamente

//function registrar_mi_widget() {
//    if (class_exists('Elementor\Widget_Base')) {
//        // Incluir el archivo del widget
//        include_once(plugin_dir_path(__FILE__) . 'widget.php');
//        include_once(plugin_dir_path(__FILE__) . 'alert.php');
//        // Registrar el widget
//        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\Mi_Widget());
//    }
//}

//add_action('elementor/widgets/widgets_registered', 'registrar_mi_widget');


