<?php
/**
*Plugin Name :   Sample Header Comment
*Description :   This is a sample header comment
*Plugin URI:     https://github.com/kitheka
*Version:        1.0.0
*Author :        Daniel Kitheka
*Author URI:     https://github.com/kitheka
*Licence:        GPLv2 or later
*Text Domain:    ex1-plugin-header
**/

function return_a_text_function(){
    $information = "This is returned by a simple plugin";
    return $information;
}
add_shortcode('example','return_a_text_function');
?>