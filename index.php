<?php
/*
Plugin Name: Slider Dinamico compatible con Elementor 
Description: Slider Dinamico tipo Acordeon 
Version: 1.0
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
