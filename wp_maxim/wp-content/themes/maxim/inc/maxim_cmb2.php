<?php 

/**
 * Get the bootstrap!
 */
if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
  require_once __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/CMB2/init.php';
}

function maxim_cmb2_fields(){
    $prefix = '_maxim_';
    
    $slider = new_cmb2_box(array(
     'id' => 'maxim_slider',
     'title' => 'Maxim Slider Post',
     'object_types' => array('slider'),
    ));
    
   $slider_group_id = $slider->add_field(array(
       'name' => 'Slider Group Field',
        'id'  => $prefix.'slider_group_fields',
        'type' =>  'group',
     
    ));
    
        $slider->add_group_field($slider_group_id, array(
        'name' => 'Slider Normal Field',
        'id'  => $prefix.'slider_group_normal',
        'type' =>  'text',
   ));
    
   $slider->add_group_field($slider_group_id, array(
        'name' => 'Slider Strong Field',
        'id'  => $prefix.'slider_group_strong',
        'type' =>  'text',
   ));

   
    
    $about = new_cmb2_box(array(
     'id' => 'maxim_about',
     'title' => 'Maxim About Field',
     'object_types' => array('about'),
    ));
    $about->add_field(array(
        'name' => 'About Content Title',
        'id'  => $prefix.'about_con_title',
        'type' =>  'text',
   ));
    $about->add_field(array(
        'name' => 'About Content',
        'id'  => $prefix.'about_con',
        'type' =>  'textarea',
   ));
    
    
   
    $team = $about->add_field(array(
        'name' => 'About Team',
        'id'  => $prefix.'about_team',
        'type' =>  'group',
   ));
    
    $about->add_group_field($team, array(
        'name' => 'About Team Image',
        'id'  => $prefix.'about_con_team_img',
        'type' =>  'file',
   ));
    
    $about->add_group_field($team, array(
        'name' => 'About Team Name',
        'id'  => $prefix.'about_con_team_name',
        'type' =>  'text',
   ));
    
    $about->add_group_field($team, array(
        'name' => 'About Team Desg',
        'id'  => $prefix.'about_con_team_desg',
        'type' =>  'text',
   ));
    
    
}
add_action('cmb2_admin_init','maxim_cmb2_fields');