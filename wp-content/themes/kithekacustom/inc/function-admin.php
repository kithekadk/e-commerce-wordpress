<?php
/*
@package kithekaCustom

======================
ADMIN PAGE
======================
*/

function kithekatheme_add_admin_page(){
    //Create admin page
    add_menu_page('Kitheka Theme options', 'KithekaTheme', 'manage_options', 'kithekadk_theme', 'kithekadk_theme_create_page');
    
    //Setting the Icon for menu
    // add_menu_page('Kitheka Theme options', 'KithekaTheme', 'manage_options', 'kithekadk_theme', 'kithekadk_theme_create_page',
    // gte_template_directory_uri() . '/img/sunset-icon.png', 110);

    //CReate admin sub pages
    add_submenu_page('kithekadk_theme', 'Kitheka Theme options', 'Settings', 'manage_options', 'kithekadk_theme', 'kithekadk_theme_create_page');
    add_submenu_page('kithekadk_theme', 'Kitheka Theme options2', 'Settings2', 'manage_options', 'kithekadk_theme2', 'kithekadk_theme_create_page');

    //Activate custom settings
    add_action('admin_init', 'kitheka_custom_settings');
}

add_action ('admin_menu', 'kithekatheme_add_admin_page');

function kitheka_custom_settings(){
    register_setting('kitheka-settings-group', 'first_name');
    add_settings_section('kitheka-sidebar-options', 'Sidebar Option', 'kitheka_sidebar_options', 'kithekadk_theme');
    add_settings_field('sidebar-name', 'First Name', 'kitheka_sidebar_name', 'kithekadk_theme', 'kitheka-sidebar-options');
}


function kitheka_sidebar_options(){
    echo 'Customize your Sidebar Information';
}

function kitheka_sidebar_name(){
    $firstname = esc_attr(get_option('first_name'));
    echo '<input type="text" name="first_name" value="" placeholder="First Name"/>';
}
function kithekadk_theme_create_page(){
    //generation of our admin page
    require_once( get_template_directory() . '/inc/templates/kithekadk-admin.php');
}

function kithekadk_theme_settings_page(){

}