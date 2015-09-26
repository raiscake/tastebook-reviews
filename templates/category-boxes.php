<?php
/* Exclude Featured Category */
$featured = get_category_by_slug('featured');
$categories = get_categories( array(
    'child_of'                 => 0,
    'exclude'                  => $featured->cat_ID,
    'hide_empty'               => false
) );

$k = 1;
?>

<section class="section category-boxes">
    <div class="row no-gutters">
        <div class="col-lg-6">
            <div class="row no-gutters">
            <!-- Start Category Loop -->
            <?php foreach ($categories as $category) : ?>
                <div class="col-sm-3">
                    <div class="category-box" style="background-image:url(<?= category_featured_image(array( 'term_id' => $category->cat_ID, 'size' => 'cat-box')); ?>)">
                        <div class="aspect-ratio">
                            <a href="<?= get_category_link( $category->term_id ) ?>" class="category-link">
                                <h4 class="small va-middle">
                                    <?= $category->name ?>
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
                if ($k % 4 == 0) :
                    echo '</div></div><div class="col-lg-6"><div class="row no-gutters">';
                endif;
                $k++;
            endforeach; ?>
                </div><!-- row -->
            </div><!-- col-sm-6 -->
        </div>
    </div>
</section>