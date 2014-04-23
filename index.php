<?php
/*
 * Template Name: Home
 * */

get_header(); ?>
    <div id="mainSlider" class="sliderViewport">
        <!-- Left-Right buttons to navigate back and forward in the slider-->
        <div class="sliderBtn prevBtn"><i class="fa fa-angle-left"></i></div>
        <div class="sliderBtn nextBtn"><i class="fa fa-angle-right"></i></div>
        <!-- Main slider-->
        <ul class="slider">
            <?php
            query_posts(array('post_type' => 'galeria', 'name' => 'slider-inicio'));
            while(have_posts()):
                if(have_posts()): the_post();
                    $content = get_the_content();
                    preg_match('/\[gallery ids="(.*)"\]/', $content, $match);
                    $galleryIds = $match[1]; // String
                    $gallery = getGalleryThumbsArr($galleryIds, 'mainSlider');
                    if(!empty($gallery)){
                        foreach($gallery as $img){
                            echo '<li>';
                            echo '<img src="' . $img .'" class="sliderImg"/>';
                            echo '</li>';
                        }
                    }
                endif;
            endwhile;
            wp_reset_query();
            ?>
        </ul>
    </div>

    <section>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts( array(
            'post_type' => 'post',
            'posts_per_page' => '2',
            'paged' => $paged
        ));
        if(have_posts()):
            while(have_posts()): the_post();
                include('templates/feed-entry.php');
            endwhile;
        endif;
        wp_pagenavi();
        ?>

<?php get_footer(); ?>