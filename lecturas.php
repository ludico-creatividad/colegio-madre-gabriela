<?php
/*
 * Template Name: Lecturas
 * */

get_header(); ?>
    <section class="col-sm-9">
        <article class="entry">
            <figure class="entryFigure pull-left"><img src="<?php stylesheetUri(); ?>imgs/dummy.jpg"/></figure>
            <h2 class="entryTitle">Noticia de prueba</h2><span class="entryDate">Abril 5 2014</span>

            <p></p>
            <a href="#" class="readMore">Leer
                más</a></article>
        <article class="entry">
            <figure class="entryFigure pull-left"><img src="<?php stylesheetUri(); ?>imgs/dummy.jpg"/></figure>
            <h2 class="entryTitle">Noticia de prueba</h2><span class="entryDate">Abril 5 2014</span>

            <p></p><a href="#" class="readMore">Leer más</a></article>
        <ul class="pageNavi nav">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
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