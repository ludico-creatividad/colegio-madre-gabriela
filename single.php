<?php get_header(); ?>
    <section>
        <?php

        if(have_posts()):

            while(have_posts()): the_post();
                echo '<article class="fullEntry">';
                echo '<h2 class="entryTitle">' . get_the_title() . '</h2><span class="entryDate">Abril 5 2014</span>';
                echo '<figure class="fullEntryFigure">';
                    echo get_the_post_thumbnail(get_the_ID(), 'fullSingle');
                echo '</figure>';
                the_content();
                echo '</article>';
            endwhile;
        endif;
        ?>
    </section>
<?php get_footer(); ?>