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
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
            endif;
            ?>
        </nav>
    </div>
</header>
