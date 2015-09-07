<article <?php post_class('main-article'); ?>>
    <header class="article-header">
        <div class="aspect-ratio">
            <div class="entry-overlay"></div>
            <?php if (has_post_thumbnail()) :
                the_post_thumbnail('single-img');
            endif; ?>
            <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </div>
    </header>
    <?php get_template_part('templates/entry', 'meta'); ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
