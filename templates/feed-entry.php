<article class="entry">
    <div class="col-lg-3">
        <figure class="pull-right entryFigure">
            <img src="<?= getThumbUrl('newsFeed'); ?>"/>
        </figure>
    </div>
    <div class="col-lg-9">
        <h2 class="entryTitle"><?= get_the_title(); ?></h2>
        <p>
            <?= get_the_excerpt(); ?>
        </p>
        <a href="<?= get_permalink(); ?>" class="readMore">Leer más</a>
    </div>
</article>
<div class="spaceBar"></div>