<?php
echo '<article class="entry">';
echo '<figure class="entryFigure pull-left">';
echo get_the_post_thumbnail(get_the_ID(), 'newsFeed');
echo '</figure>';
echo '<a href="' . get_permalink() . '">';
echo '<h2 class="entryTitle">' . get_the_title() . '</h2><span class="entryDate">'.get_the_date().'</span>';
echo '</a>';
the_excerpt();
echo '<a href="' . get_permalink() . '" class="readMore">Leer más</a>';
echo '</article>';