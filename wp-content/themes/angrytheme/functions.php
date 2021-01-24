<?php

//----------- Deactivate Gutenberg editor ---------

// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// -------------------------------------------------


//----------reservations.php---------
//--------------- Navbar by Bootstrap --------------
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'angryTheme' ),
) );
// -------------------------------------------------


// NEW PICTURE SIZE

function wpm_new_image(){

    //activer la section image en avant
    add_theme_support( 'post-thumbnails' );
    //activer la section format
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'chat', 'image', 'link', 'quote', 'status', 'video', 'audio' ));
    //activer les formats pour les pages
    add_post_type_support( 'page', 'post-formats');

    // L'image sera tronquée exactement à la dimension indiquée
    add_image_size( 'wpm_taille_1', 600, 600, true ); 
    add_image_size('wpm_taille_2', 800, 350, true);
    
    }

    add_action( 'after_setup_theme', 'wpm_new_image' );

// -------------------------------------------------

