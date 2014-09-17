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

function getThumbUrlArr($thumbnailSize = 'small') {
    $thumbId = get_post_thumbnail_id();
    $thumbUrl = wp_get_attachment_image_src($thumbId, $thumbnailSize, true);
    return $thumbUrl;
}

function getThumbUrl($thumbnailSize = 'small') {
    $thumbUrl = getThumbUrlArr($thumbnailSize);
    return $thumbUrl[0];
}

function getGalIdsFromContent() {
    $content = get_the_content();
    preg_match('/\[gallery ids="(.*)"\]/', $content, $match);
    return $match[1];
}

/**
 * Searches for a gallery shortCode in the wordpress content, it stores its ids in a key of the array returned
 * and also returns the original content string with the shortcode from the gallery removed
 * @return array
 */
function splitGalFromContent() {
    $content = get_the_content();
    preg_match('/\[gallery ids="(.*)"\]/', $content, $match);
    $content = str_replace($match[0], '', $content);
    $content = apply_filters('the_content', $content);
    $galleryIds = $match[1]; // String

    return array(
        'galleryIds' => $galleryIds,
        'content' => $content
    );
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

add_image_size('mainSlider', 1140, 475, true);
add_image_size('newsFeed', 217, 217, true);
add_image_size('fullSingle', 800, 360, true);

add_action('init', 'cptui_register_my_cpt_lecturas');
function cptui_register_my_cpt_lecturas() {
    register_post_type('lectures', array(
        'label' => 'Lecturas',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'lecturas', 'with_front' => true, 'hierarchical' => true),
        'query_var' => true,
        'menu_position' => '6',
        'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','thumbnail','author','page-attributes','post-formats'),
        'taxonomies' => array('seccion'),
        'labels' => array (
            'name' => 'Lecturas',
            'singular_name' => 'Lectura',
            'menu_name' => 'Lecturas',
            'add_new' => 'Add Lectura',
            'add_new_item' => 'Add New Lectura',
            'edit' => 'Edit',
            'edit_item' => 'Edit Lectura',
            'new_item' => 'New Lectura',
            'view' => 'View Lectura',
            'view_item' => 'View Lectura',
            'search_items' => 'Search Lecturas',
            'not_found' => 'No Lecturas Found',
            'not_found_in_trash' => 'No Lecturas Found in Trash',
            'parent' => 'Parent Lectura',
        )
    ) ); }

