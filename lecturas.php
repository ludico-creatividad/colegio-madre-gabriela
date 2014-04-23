<?php
/*
 * Template Name: Lecturas
 * */

get_header(); ?>
    <section class="col-sm-9">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts( array(
            'post_type' => 'lectura',
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
    </section>
    <aside class="col-sm-3">
        <div class="sidebar-module"><h4>Categorias</h4>
            <ul>
                <li><a href="#" class="sideCat">Lecturas Recomendadas</a>

                    <p class="sideCatDesc">Liquorice candy canes ice cream applicake marzipan cupcake candy canes sugar
                        plum.</p></li>
                <li><a href="#" class="sideCat">Lecturas de grupo</a>

                    <p class="sideCatDesc">Liquorice candy canes ice cream applicake marzipan cupcake candy canes sugar
                        plum.</p></li>
                <li><a href="#" class="sideCat">Lecturas Barrilete</a>

                    <p class="sideCatDesc">Liquorice candy canes ice cream applicake marzipan cupcake candy canes sugar
                        plum.</p></li>
            </ul>
        </div>
    </aside>
<?php get_footer(); ?>