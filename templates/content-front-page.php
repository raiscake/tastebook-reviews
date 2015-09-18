<div class="col-md-6">
    <article <?php post_class('magazine-entry'); ?>>
        <header class="magazine-title">
            <div class="magazine-title-wrap">
                <div class="aspect-ratio">
                    <div class="entry-overlay"></div>
                    <?php if (has_post_thumbnail()) :
                        the_post_thumbnail('frontpage-img');
                    endif; ?>
                    <a class="entry-link" href="<?php the_permalink(); ?>">
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                    </a>
                </div>
            </div>
        </header>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
        <?php get_template_part('templates/entry', 'meta'); ?>
    </article>
</div>

