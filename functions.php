<?php
// linkng cs and js file

function setup(){
    //wp_enqueue_style('font-awesome',);
    wp_enqueue_style('all', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css');
    //wp_enqueue_style('fontawesome', get_template_directory_uri()."/fontawesome.css");
    wp_enqueue_style('fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/fontawesome.css');
    wp_enqueue_style('style',get_stylesheet_uri(),NULL,microtime());
    wp_enqueue_script("main",get_theme_file_uri('/js/main.js'),NULL,microtime(),true);
}

add_action('wp_enqueue_scripts','setup');
add_action('wp_enqueue_style','setup');

// adding theme support
function init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
    array('comment-list','comment-form','search-form')
    );
}

add_action('after_setup_theme', 'init');

// projects post type

function custom_post(){
    register_post_type('project',
        array(
            'rewrite'=>array('slug'=>'projects'),
            'labels'=>array(
                'name'=>'Projects',
                'singular-name'=>'Project',
                'add_new_item'=>'Add new Project',
                'edit_item'=>'Edit Project'
            ),
            'menu-icon'=>'dashicons-clipboard',
            'public'=>true,
            'has_archives'=>true,
            'supports'=>array(
                'title','thumbnail','editor','excerpt','comments'
            )
        )
    );
}

add_action('init','custom_post'); 
?>

