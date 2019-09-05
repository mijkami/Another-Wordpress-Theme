<?php

function shittyTheme_register_assets()
{

    // Déclarer jQuery
    wp_deregister_script('jquery'); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( // On déclare une version plus moderne
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
        false,
        '3.3.1',
        true
    );

    // Déclarer le JS
    wp_enqueue_script(
        'shittyTheme',
        get_template_directory_uri() . '/js/script.js',
        array('jquery'),
        '1.0',
        true
    );

    // Déclarer style.css à la racine du thème
    /*wp_enqueue_style(
        'shittyTheme',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );*/

    // enregistrer un fichier css
    wp_register_style('shittyTheme', get_template_directory_uri() . '/css/main.css', array(), true);
    // 
    wp_enqueue_style(
        'shittyTheme'
    );
}
add_action('wp_enqueue_scripts', 'shittyTheme_register_assets');


// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Définir la taille des images mises en avant
set_post_thumbnail_size(2000, 400, true);

// Définir d'autres tailles d'images
add_image_size('products', 800, 600, false);
add_image_size('square', 256, 256, false);
add_image_size('mini', 80, 80, false);

register_nav_menus(array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
));

register_sidebar(array(
    'id' => 'new_sidebar',
    'name' => __('New Sidebar'),
    'description' => __('An other sidebar.'),
    'before_widget'  => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title' => '<h3 class="site__sidebar__widget__title">',
    'after_title' => '</h3>',
));

if (function_exists('register_sidebar'))
    register_sidebar(
        array(
            'name' => 'Sidebar Widget Area',
            'before_widget' => '<div class = "sideWidgetArea">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );