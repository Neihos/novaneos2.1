<?php

// Inclure le fichier des fonctions API REST
include get_stylesheet_directory() . '/include/ajax.php';

// Enregistrement des styles CSS du thème enfant
function theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
}

// Déclarer les fichiers JS et CSS
function novaneos_enqueue_scripts() {
    // Liste des fichiers JS à charger
    $scripts = [
        'novaneos-script-main' => 'scripts.js',
        'novaneos-script-menu' => 'menu.js',
        'novaneos-script-home' => 'home.js',
    ];

    foreach ($scripts as $handle => $file) {
        $file_path = get_stylesheet_directory() . '/js/' . $file;
        
        // Vérifie si le fichier existe avant d'utiliser filemtime()
        if (file_exists($file_path)) {
            wp_enqueue_script(
                $handle,
                get_stylesheet_directory_uri() . '/js/' . $file,
                array('jquery'), // Dépendances
                filemtime($file_path), // Gestion du cache
                true // Chargement en pied de page
            );
        } else {
            error_log("Fichier JS manquant : " . $file_path);
        }
    }
// Localisation de l'URL AJAX et de l'URL REST après l'enregistrement des scripts
    wp_localize_script('novaneos-script-main', 'novaneos_js', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'rest_url' => esc_url(rest_url('wp/v2/')), // Ajout de l'URL de l'API REST
        'nonce'    => wp_create_nonce('novaneos-script-main'),        
    ));

}

// Enregistrement des emplacements de menus du thème
function novaneos_register_menus() {
    register_nav_menu('main', "Menu principal");
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// Actions pour charger les styles, scripts et menus
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_action('wp_enqueue_scripts', 'novaneos_enqueue_scripts');
add_action('after_setup_theme', 'novaneos_register_menus');
?>