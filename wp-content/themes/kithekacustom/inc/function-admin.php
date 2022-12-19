<?php
/*
@package kithekaCustom

======================
ADMIN PAGE
======================
*/

function kithekatheme_add_admin_page(){
    add_menu_page('Kitheka theme options', 'KithekaTheme', 'manage_options', 'kithekadk-theme', 'kithekadk_theme_create_page');
}

add_Action ('admin_menu', 'kithekatheme_add_admin_page');
function kithekadk_theme_create_page(){
    //generation of our admin page

}