<?php

require_once('options/apparence.php');

// Ajouter des options à notre thème
function montheme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
    add_theme_support('custom-logo');
}


//  Fonction pour mettre notre feuille CSS dans la queue des scripts
 function theme_style(){
    wp_enqueue_style('theme_style', get_stylesheet_uri());
 }

 add_action('wp_enqueue_scripts', 'theme_style');

// Module vidéo youtube

function video_module($atts){
    $atts=shortcode_atts(array(
        'id' => 'PkkV1vLHUvQ'
    ), $atts);

    return "<iframe width='560' height='315' src='https://www.youtube.com/embed/".esc_html($atts['id']) ."' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>";
}

add_shortcode('yt', 'video_module');


?>