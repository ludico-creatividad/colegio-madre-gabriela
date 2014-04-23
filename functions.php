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

function getGalleryThumbsArr($galleryIdString, $thumbSize = 'small') {

    if ($galleryIdString == '') return false;

    $idsArr = explode(',', $galleryIdString);
    $galleryArr = array();

    foreach ($idsArr as $id) {
        $galleryArr[] = array_shift(wp_get_attachment_image_src($id, $thumbSize));
    }
    return $galleryArr;
}


function sanitize($imput, $mode  = "txt"){
    $imput = trim($imput);
    $imput = strip_tags($imput);
    switch ($mode)
    {
        case "varchar":
            $healthy = preg_replace('/[^a-z A-Z-_]/', '', $imput);
            return $healthy;

        case "alpha":
            $healthy = preg_replace('/[^a-z A-Z]/', '', $imput);
            return $healthy;

            break;

        case "alnum":
            $healthy = preg_replace('/[^0-9 a-zA-Z]/', '', $imput);
            return $healthy;

            break;

        case "num":
            $healthy = preg_replace('/[^0-9]/', '', $imput);
            return $healthy;

            break;

        case "email":
            $healthy = trim(preg_replace('/[^0-9a-zA-Z_@.]/', '', $imput)," ");
            return $healthy;

            break;

        case "txt":
            $healthy = preg_replace('/[^a-z A-Z0-9@\'\"\.\,\#\%\(\)\$\/\:áéíóú&ñ\;\¿\?\!\¡\+\-\*\=]/', '', $imput);
            return $healthy;

            break;


    }
}

add_image_size('mainSlider', 940, 270, true);
add_image_size('newsFeed', 122, 128, true);
add_image_size('fullSingle', 800, 360, true);
