<?php
/*
 * Template Name: Lecturas
 * */
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
get_header();
$catDescription = "Se plantea una formación integral a través de los procesos
educativos, de
manera tal, que sean capaces de responder de manera critica a los desafíos
históricos, sociales y culturales de la sociedad en que se encuentran inmersos,
con el fin de modificar determinadas actitudes negativas que nos hagan ser mas
solidarios y mas humanos.";
?>
    <div class="container">
        <main class="micontainer">
            <?php include('templates/lecturas-categories.php'); ?>
            <section id="lecturas-section" class="col-sm-12">
                <!--h4 Lecturas-->
                <?php
                query_posts( array(
                    'post_type' => 'lectures',
                    'posts_per_page' => '10',
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
                wp_reset_query();
                ?>
            </section>
        </main>
    </div>


<?php get_footer(); ?>