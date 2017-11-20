<?php 


function maxim_theme_supports(){
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'main_menu' => 'Maxim Menu',
    ));
}


add_action('after_setup_theme', 'maxim_theme_supports');

require_once('inc/maxim_scripts.php');
require_once('inc/maxim_custom_post.php');
require_once('inc/maxim_cmb2.php');
require_once('inc/maxim-theme-option/redux-framework.php');
require_once('inc/maxim_option.php');

