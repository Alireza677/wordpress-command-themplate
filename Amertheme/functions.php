<?php

function load_css(){
    wp_register_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css' ,'' , 'false','all' );
    wp_enqueue_style('bootstrap' );

    wp_register_style('main-style' , get_template_directory_uri() . '/style.css' ,'' , 'false','all' );
    wp_enqueue_style('main-style' );
}
add_action('wp_enqueue_scripts' ,'load_css' );

//
function load_js(){
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap-js' , get_template_directory_uri() . "/js/bootstrap.min.js" ,'jquery'
        , 'false' , '');
    wp_enqueue_script('bootstrap-js');

}
add_action('wp_enqueue_scripts' , 'load_js');

//Theme option
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//register menus
register_nav_menus(
    array(
        'top-menu' => "top menu location" ,
        'footer-menu' => 'footer menu location'
    )
);

/* post thumbnail */
add_image_size('blog-large' , '800' ,'400','true');
add_image_size('blog-small' , '300' ,'200','true');

/*
 * sidebar
 */
function my_sidebars(){
    register_sidebar(
        array(
            'name'=> 'page sidebar' ,
            'id'=> 'page-sidebar' ,
            'before-title'=> "<h4 class='widget-title'>",
            "after_title" => "</h4>"
        )
    );

    register_sidebar(
        array(
            'name'=> 'blog sidebar' ,
            'id'=> 'blog-sidebar' ,
            'before-title'=> "<h4 class='widget-title'>",
            "after_title" => "</h4>"
        )
    );
}
add_action('widgets_init' , 'my_sidebars');
