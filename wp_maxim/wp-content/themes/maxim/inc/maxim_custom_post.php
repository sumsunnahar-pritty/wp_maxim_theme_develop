<?php 


function maxim_custom_post(){
    register_post_type('slider', array(
        'label'=> 'Slider',
        'public'=> true,
        'supports' => array('title', 'custom-fields')
    ));
    
    register_post_type('about', array(
        'label'=> 'About',
        'public'=> true,
        'supports' => array('title', 'custom-fields', 'thumbnail')
    ));
    
    
    register_post_type('work', array(
        'label'=> 'Work',
        'public'=> true,
        'supports' => array('title', 'custom-fields', 'thumbnail')
    ));
    
    
    register_taxonomy(
		'work_taxonomy',
		'work',
		array(
            'hierarchical' => true,
			'labels' => 'work-cc',
            'show_ui'=> true,
            'show_admin_column'=> true,
            'query_var'=> true,
			'rewrite' => array( 'slug' => 'genre' ),
			
		)
	);
    
}

add_action('init', 'maxim_custom_post');