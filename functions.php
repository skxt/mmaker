<?php

function mediamaker_theme_support() {
    add_theme_support('title-tag'); // aggiungo il titolo dinamico nelle pagine
    add_theme_support('custom-logo'); // aggiungo il logo dinamico
    add_theme_support('post-thumbnails'); // aggiungo le miniature
}

add_action('after_setup_theme', 'mediamaker_theme_support');

//aggiungo i menu di wordpress
function mediamaker_menus() {
    $locations = array(
        'primary' => "Primary Homepage",
        'secondary' => "Alternative Menu"
    );
    register_nav_menus($locations);
}

add_action('init', 'mediamaker_menus');

// registro gli stili
function mediamaker_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('mediamaker-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('aos-style', get_template_directory_uri() . "/assets/css/aos/aos.css", array(), '1.0', 'all');
}

// aggiungo gli stili
add_action('wp_enqueue_scripts', 'mediamaker_register_styles');

// registro gli scripts
function mediamaker_register_scripts() {
    wp_enqueue_script('jquery-script', get_template_directory_uri() . "/assets/js/jquery/jquery.min.js", array(), '3.4.1', true);
    wp_enqueue_script('popper-script', get_template_directory_uri() . "/assets/js/popper/popper.min.js", array(), '2.0', true);
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . "/assets/js/bootstrap/bootstrap.min.js", array(), '4.4.1', true);
    wp_enqueue_script('aos-script', get_template_directory_uri() . "/assets/js/aos/aos.js", array(), '1.0', true);
    wp_enqueue_script('gsap-script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js', array(), '3.6.1', true);
    wp_enqueue_script('scrolltrigger-script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js', array(), '3.6.1', true);
	wp_enqueue_script('imagesloaded-script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.1/imagesloaded.pkgd.min.js', array(), '4.1.1', true);
    wp_enqueue_script('main-script', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
    wp_enqueue_script('text-script', get_template_directory_uri() . "/assets/js/text.js", array(), '1.0', true);
}

// aggiungo gli scripts
add_action('wp_enqueue_scripts', 'mediamaker_register_scripts');

// registro widget e sidebar
function mediamaker_widget_areas() {
    register_sidebar(array(
        'name' => 'Footer area 1',
        'id' => 'footer-1',
        'description' => 'Footer area',
        'before_widget' => '<div class="footer-nav">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar(array(
        'name' => 'Footer area 2',
        'id' => 'footer-2',
        'description' => 'Footer area 2',
        'before_widget' => '<div class="footer-nav">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
    ));
}

// aggiungo i widget
add_action('widgets_init', 'mediamaker_widget_areas');
?>