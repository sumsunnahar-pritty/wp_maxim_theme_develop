<?php 

function maxim_css_and_js(){
    
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap-responsive.css');
    wp_enqueue_style('custom-style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('default', get_template_directory_uri().'/color/default.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    
    
    
    wp_enqueue_script('jquery');
    
    wp_enqueue_script('scrollTo', get_template_directory_uri().'/js/jquery.scrollTo.js', array('jquery') , null, true);
    
    wp_enqueue_script('nav', get_template_directory_uri().'/js/jquery.nav.js', array('jquery') , null, true);
    
    wp_enqueue_script('localscroll', get_template_directory_uri().'/js/jquery.localscroll-1.2.7-min.js', array('jquery') , null, true);
    
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array('jquery') , null, true);
    
    wp_enqueue_script('prettyPhoto', get_template_directory_uri().'/js/jquery.prettyPhoto.js', array('jquery') , null, true);
    
    wp_enqueue_script('isotope', get_template_directory_uri().'/js/isotope.js', array('jquery') , null, true);
    
    wp_enqueue_script('flexslider', get_template_directory_uri().'/js/jquery.flexslider.js', array('jquery') , null, true);
    
    wp_enqueue_script('inview', get_template_directory_uri().'/js/inview.js', array('jquery') , null, true);
    
    wp_enqueue_script('animate', get_template_directory_uri().'/js/animate.js', array('jquery') , null, true);
    
    wp_enqueue_script('validate', get_template_directory_uri().'/js/validate.js', array('jquery') , null, true);
    
    wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array('jquery') , null, true);
    
    wp_enqueue_script('contactform', get_template_directory_uri().'/contactform/contactform.js', array('jquery') , null, true);
    
    
    
}

add_action('wp_enqueue_scripts', 'maxim_css_and_js');





function maxim_admin_css_and_js(){
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css');
}

add_action('admin_enqueue_scripts', 'maxim_admin_css_and_js');