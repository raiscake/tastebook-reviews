<?php $categories = get_categories( array(
    'child_of'                 => 0,
) );?>

<section class="section magazine">
    <!-- Start Category Loop -->
    <?php foreach ($categories as $category) : ?>
        <div class="category-row">
            <h2><?= $category->name ?></h2>
            <!-- Start Posts Loop -->
            <?php $posts = new WP_Query(array(
                'cat' => $category->cat_ID,
                'posts_per_page' => 4
            ));
            if ($posts->have_posts()) :
                while ($posts->have_posts()) :
                    $posts-> the_post();
                        get_template_part('templates/content');
                 endwhile;
            endif; wp_reset_query(); ?>
        </div>
    <?php endforeach; ?>
</section>


