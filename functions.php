<?php

if(function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
}

register_nav_menus(
    array(
        'mainMenu' => 'Menu Principal',
        'footerMenu' =>  'Footer Menu '
    )
);

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function getStylesheetUri(){
    return get_stylesheet_directory_uri() . '/';
}

function stylesheetUri(){
    echo getStylesheetUri();
}
