<?php

/*
@package kithekaCustom

    ======================
    ADMIN ENQUEUE FUNCTIONS
    ======================
*/

function kitheka_load_admin_scripts($hook){
    //Detecting which page we are on
    // echo $hook;
    if ('toplevel_page_kithekadk_theme' != $hook){
        return;
    }
    wp_register_style('kitheka_admin', get_template_directory_uri() . '/css/kitheka.admin.css', array(), '1.0.0', 'all');
    wp_enqueue_style('kitheka_admin');
}

add_action('admin_enqueue_scripts', 'kitheka_load_admin_scripts');

