<?php get_header(); ?>
    <div class="slider"></div>
    <section>
        <?php

        if(have_posts()):

            while(have_posts()): the_post();
                echo '<article class="entry">';
                    echo '<figure class="entryFigure pull-left">';
                       echo get_the_post_thumbnail(get_the_ID(), 'newsFeed');
                    echo '</figure>';
                    echo '<h2 class="entryTitle">' . get_the_title() . '</h2><span class="entryDate">Abril 5 2014</span>';
                    the_excerpt();
                    echo '<a href="' . get_permalink() . '" class="readMore">Leer más</a>';
                echo '</article>';
            endwhile;
        endif;
        ?>
    <ul class="pageNavi nav">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
    </ul>
<?php get_footer(); ?>