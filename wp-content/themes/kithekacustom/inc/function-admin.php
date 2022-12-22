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
    register_setting('kitheka-settings-group', 'last_name');
    register_setting('kitheka-settings-group', 'twitter', 'kitheka_sanitize_twitter_handle');
    register_setting('kitheka-settings-group', 'facebook');
    register_setting('kitheka-settings-group', 'instagram');

    add_settings_section('kitheka-sidebar-options', 'Sidebar Option', 'kitheka_sidebar_options', 'kithekadk_theme');
    //creating the label name for input
    add_settings_field('sidebar-name', 'Full Name', 'kitheka_sidebar_fullname', 'kithekadk_theme', 'kitheka-sidebar-options');
    add_settings_field('sidebar-facebook', 'Facebook handle', 'kitheka_sidebar_facebook', 'kithekadk_theme','kitheka-sidebar-options');
    add_settings_field('sidebar-twitter', 'Twitter handle', 'kitheka_sidebar_twitter', 'kithekadk_theme','kitheka-sidebar-options');
    add_settings_field('sidebar-instagram', 'Instagram handle', 'kitheka_sidebar_instagram','kithekadk_theme','kitheka-sidebar-options');
}


function kitheka_sidebar_options(){
    echo 'Customize your Sidebar Information';
}

function kitheka_sidebar_fullname(){
    $firstname = esc_attr(get_option('first_name'));
    $lastname =esc_attr(get_option('last_name'));
    echo '<input type="text" name="first_name" value="'.$firstname.'" placeholder="First Name"/> 
          <input type="text" name="last_name" value="'.$lastname.'" placeholder="Last Name"/>';
}

function kitheka_sidebar_twitter(){
    $twitter = esc_attr(get_option('twitter'));
    echo '<input type="text" value="'.$twitter.'" name="twitter" placeholder="Twitter handle"/>';
}
function kitheka_sidebar_facebook(){
    $facebook = esc_attr(get_option('facebook'));
    echo '<input type="text" value="'.$facebook.'" name="facebook" placeholder="Facebook handle"/>';
}
function kitheka_sidebar_instagram(){
    $instagram = esc_attr(get_option('instagram'));
    echo '<input type="text" value="'.$instagram.'" name="instagram" placeholder="Instagram handle"/>';
}
//Sanitization of data from twitter input eg eliminating symbols
function kitheka_sanitize_twitter_handle($input){
    //checking for invalid utf and symbols
    $output = sanitize_text_field($input);
    return $output;
}
function kithekadk_theme_create_page(){
    //generation of our admin page
    require_once( get_template_directory() . '/inc/templates/kithekadk-admin.php');
}

function kithekadk_theme_settings_page(){

}