<?php


class Accordion {

    const CURRENT_PATH = WP_PLUGIN_URL;

    function __construct(){
        add_action( 'init', array($this, 'connect_scripts') );

    }

    function connect_scripts(){
        wp_enqueue_style( 'custom', self::CURRENT_PATH  . '/custom-accordion/css/custom_accordion.style.css');
        wp_enqueue_style( 'jqueryuistyle', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css');
        wp_enqueue_script( 'jquery');
        wp_enqueue_script( 'visibility', self::CURRENT_PATH . '/custom-accordion/js/visibility.js', array('jquery') );
        wp_enqueue_script( 'jqueryui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', array('jquery') );
    }
}
new Accordion;

// Include the widget
include_once('custom.accordion.widget.php');

// Register the widget
add_action("widgets_init", function () {
    register_widget("accordion_widget");
});
