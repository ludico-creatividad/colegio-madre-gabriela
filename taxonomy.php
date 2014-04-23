<?php
get_header(); ?>
    <section class="col-sm-9">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        if(have_posts()):
            while(have_posts()): the_post();
                include('templates/feed-entry.php');
            endwhile;
        endif;
        wp_pagenavi();
        ?>
    </section>
    <aside class="col-sm-3">
        <?php include('lecturas-sidebar.php'); ?>
    </aside>
<?php get_footer(); ?>