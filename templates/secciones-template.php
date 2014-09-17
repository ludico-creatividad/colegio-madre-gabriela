<?php
get_header();
?>
    <div class="container">
        <main class="micontainer">
            <?php
            include('lecturas-categories.php');
            $terms = $currentTerm;
            $queryVar = $_GET['categoria'];
            if(!empty($queryVar)){
                $terms .= ",{$queryVar}";
            }
            $terms = explode(',', $terms);
            ?>
            <section id="lecturas-section" class="col-sm-12">
                <!--h4 Lecturas-->
                <?php
                query_posts(array(
                    'post_type' => 'lectures',
                    'posts_per_page' => '10',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'seccion',
                            'field' => 'slug',
                            'terms' => $terms,
                            'operator' => 'AND'
                        )
                    ),
                ));
                if(have_posts()):
                    while(have_posts()): the_post();
                        include('feed-entry.php');
                    endwhile;
                else:
                    echo '<h3>No se encontraron resultados en la categoria seleccionada</h3>';
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