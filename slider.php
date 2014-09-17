<div id="mainSlider" class="sliderViewport slider">
    <!-- Left-Right buttons to navigate back and forward in the slider-->
    <div class="sliderBtn prevBtn"><i class="fa fa-angle-left"></i></div>
    <div class="sliderBtn nextBtn"><i class="fa fa-angle-right"></i></div>
    <!-- Main slider-->
    <ul class="slider">
        <?php
        query_posts(array('post_type' => 'fotos'));
        while(have_posts()):
            if(have_posts()): the_post();
                $galleryIds = getGalIdsFromContent();
                $gallery = getGalleryThumbsArr($galleryIds, 'mainSlider');
                if(!empty($gallery)){
                    foreach($gallery as $img){
                        echo '<li>';
                        echo '<img src="' . $img .'" class="sliderImg"/>';
                        echo '</li>';
                    }
                }
            endif;
        endwhile;
        wp_reset_query();
        ?>
    </ul>
</div>