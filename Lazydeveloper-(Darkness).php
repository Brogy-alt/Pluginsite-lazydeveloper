<?php 
/*
 * Plugin Name:       Lazydeveloper-(Darkness)
 * Description:       Changes all your pages background color to black so you don't have to :)
 * Version:           1.0.2
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Brogan Gys
 */

function change_background_color() {
    echo '<style> body { background-color: black; }</style>';
}

add_action('wp_head', 'change_background_color');


// note add_action is needed did not know that //
// only works with themes who use the wp_head //
// used simple html to change color because Im not sure how one does it with just php //