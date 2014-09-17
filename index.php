<?php
/*
 * Template Name: Home
 * */

get_header(); ?>
<div class="container">
<?php include_once('slider.php'); ?>
    <main class="micontainer">
    <section class="col-lg-12 cpestana1"><h4>Noticias</h4>
        <div class="triangleDown noticiasTriangle"></div>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts( array(
            'post_type' => 'post',
            'posts_per_page' => '3',
            'paged' => $paged
        ));
        if(have_posts()):
            while(have_posts()): the_post();
                include('templates/feed-entry.php');
            endwhile;
        endif;
        echo '<div>';
            wp_pagenavi();
        echo '</div>';
        ?>
    </section>
    </main>
</div>
<?php get_footer(); ?>