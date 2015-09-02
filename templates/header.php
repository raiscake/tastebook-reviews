<header class="banner navbar navbar-default navbar-static-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h4 class="navbar-brand"><a href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/tastebookoriginal.png" alt="<?php bloginfo('name'); ?>" width="180" height="auto"></a></h4>
        </div>

        <nav class="collapse navbar-collapse" role="navigation">
            <?php
            if (has_nav_menu('left_primary_navigation')) :
                wp_nav_menu(['theme_location' => 'left_primary_navigation', 'menu_class' => 'nav navbar-nav navbar-left left-nav']);
            endif;

            if (has_nav_menu('right_primary_navigation')) :
                wp_nav_menu(['theme_location' => 'right_primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right right-nav']);
            endif;
            ?>
        </nav>
    </div>
</header>


<?php if (is_front_page()) :
    $first = true;
    $featured = new WP_Query('category_name=featured&posts_per_page=5');
    if ($featured->have_posts ()) :?>

    <div id="featuredCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <?php        while ($featured->have_posts()):
                        $featured->the_post();
                        $cover = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'featured-img');
                        $active = ($first == true ? 'active' : '');

            ?>


                <section class="section featured item <?= $active ?>" style="background-image:url(<?= $cover[0] ?>">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="va-middle-wrap">
                            <div class="va-middle">
                                <div class="featured-cats small">
                                    <?php the_category(', '); ?>
                                </div>
                                <h2 class="featured-title">
                                    <a class="featured-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                            </div>
                        </div>
                    </div>

                </section>

            <?php $first = false; endwhile;  ?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#featuredCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#featuredCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<?php endif; wp_reset_query(); endif; ?>