<?php
/*
 * Template Name: Home
 * */

get_header(); ?>
    <div class="slider"></div>
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
                echo '<article class="entry">';
                    echo '<figure class="entryFigure pull-left">';
                       echo get_the_post_thumbnail(get_the_ID(), 'newsFeed');
                    echo '</figure>';
                    echo '<a href="' . get_permalink() . '">';
                        echo '<h2 class="entryTitle">' . get_the_title() . '</h2><span class="entryDate">Abril 5 2014</span>';
                    echo '</a>';
                    the_excerpt();
                    echo '<a href="' . get_permalink() . '" class="readMore">Leer más</a>';
                echo '</article>';
            endwhile;
        endif;
        wp_pagenavi();
        ?>

<?php get_footer(); ?>