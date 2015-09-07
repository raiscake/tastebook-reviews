<article <?php post_class('main-article'); ?>>
    <header class="article-header">
        <div class="aspect-ratio">
            <div class="entry-overlay"></div>
            <?php if (has_post_thumbnail()) :
                the_post_thumbnail('single-img');
            endif; ?>
            <a class="entry-link" href="<?php the_permalink(); ?>">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </a>
        </div>
    </header>
    <?php get_template_part('templates/entry', 'meta'); ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
