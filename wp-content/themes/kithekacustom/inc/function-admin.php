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

    //CReate admin sub pages
    add_submenu_page('kithekadk_theme', 'Kitheka Theme options', 'Settings', 'manage_options', 'kithekadk_theme', 'kithekadk_theme_create_page');
    add_submenu_page('kithekadk_theme', 'Kitheka Theme options2', 'Settings2', 'manage_options', 'kithekadk_theme2', 'kithekadk_theme_create_page');
}

add_Action ('admin_menu', 'kithekatheme_add_admin_page');
function kithekadk_theme_create_page(){
    //generation of our admin page
    require_once( get_template_directory() . '/inc/templates/kithekadk-admin.php');
}

function kithekadk_theme_settings_page(){

}