<?php $categories = get_categories( array(
    'child_of'                 => 0,
) );?>

<section class="section magazine">
    <!-- Start Category Loop -->
    <?php foreach ($categories as $category) : ?>
        <div class="category-row">
            <div class="cat-name-wrap">
                <div class="line-bar"></div>
                <h2 class="cat-name">
                    <a href="<?= get_category_link( $category->term_id ) ?>"><?= $category->name ?></a>
                </h2>
            </div>
            <!-- Start Posts Loop -->
            <div class="row">
                <?php $j = 1;
                $posts = new WP_Query(array(
                    'cat' => $category->cat_ID,
                    'posts_per_page' => 4
                ));
                if ($posts->have_posts()) :
                    while ($posts->have_posts()) :
                        $posts-> the_post();
                        get_template_part('templates/content', 'front-page');
                        if ($j % 2 == 0) :
                            echo '</div><div class="row">';
                        endif;
                        $j++;
                    endwhile;
                endif; wp_reset_query(); ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>


