<?php  get_header(); ?>
<div class="container">
  <main class="micontainer">
    <section class="col-lg-12 cpestana1"><h4>Noticias</h4>
        <div class="triangleDown noticiasTriangle"></div>
        <?php
        if(have_posts()):
            while(have_posts()): the_post();  ?>
                <section>
                    <article class="fullEntry">
                        <div class="title">
                            <h2 class="entryTitle"><?= get_the_title(); ?></h2>
                            <span class="entryDate"><?= get_the_date(); ?></span>
                        </div>
                        <figure class="fullEntryFigure pull-left">
                            <?= get_the_post_thumbnail(get_the_ID(), 'fullSingle'); ?>
                        </figure>
                            <?php the_content(); ?>
                       </article>
                    <a href="<?= get_bloginfo('home'); ?>" class="sideCat back">VOLVER</a></section>
        <?php
                #echo get_the_post_thumbnail(get_the_ID(), 'fullSingle');
            endwhile;
        endif;
        ?>
    </section>
    </main>
</div>
<?php get_footer(); ?>