<?php
/**
 * Created by PhpStorm.
 * User: Jamie
 * Date: 02/08/2015
 * Time: 21:03
 */

/**
 * Enqueue scripts and styles.
 */
function themetest_scripts() {
    wp_enqueue_style( 'themetest-style', get_stylesheet_uri() );

    //wp_enqueue_script( 'themetest-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'themetest_scripts' );
