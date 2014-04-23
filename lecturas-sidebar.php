<div class="sidebar-module"><h4>Categorias</h4>
    <ul>
        <?php
        $taxonomy = 'lecturas';
        $categories = get_terms($taxonomy);
         /*
           * echo '<pre>';
            print_r($categories);
            echo '</pre>';
          */
        foreach($categories as $category){
            $url = get_home_url(null, $taxonomy . '/' . $category->slug);
            echo '<li>';
                echo '<a href="' . $url . '" class="sideCat">' . $category->name . '</a>';
                echo '<p class="sideCatDesc">' . $category->description . '</p>';
            echo '</li>';
        }

        ?>
    </ul>
</div>