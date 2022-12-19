<?php
/**
*Plugin Name:   Sample Header Comment
*Description:   This is a sample header comment
*Plugin URI:     https://github.com/kitheka/
*Version:        1.0.0
*Author:        Daniel Kitheka
*Author URI:     https://github.com/kitheka/
*Licence:        GPLv2 or later
*Text Domain:    ex1-plugin-header
*/

// if (! defined ('ABSPATH')){
//     die;
// }

// defined('ABSPATH') or die( 'Keep away old guy, you are not allowed to access this file');
// Prints this message on the homepage using the shortcode 'sentence'
function return_a_text_function(){
    $information = "This is returned by a simple plugin";
    return $information;
}
add_shortcode('sentence','return_a_text_function');

// using a class
class ShortCodeExample{
    function __construct(){
        add_action('init', array($this, 'custom_post_type'));
    }

    function activate(){
        echo 'The plugin is activated';
    }

    function deactivate(){

    }
    
    function uninstall(){

    }

    function custom_post_type(){
        register_post_type('book', ['public'=>true, 'label'=> 'Books']);
    }
}

if (class_exists('ShortCodeExample')){
    $shortCodeExample = new ShortCodeExample();
}


//activation
register_activation_hook( __FILE__, array($shortCodeExample, 'activate'));


//deactivation
register_deactivation_hook( __FILE__, array($shortCodeExample, 'deactivate'));


//uninstall
?>
