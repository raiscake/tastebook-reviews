<div class="col-md-6">
    <article <?php post_class('magazine-entry'); ?>>
        <header class="magazine-title">
            <?php if (has_post_thumbnail()) :
                the_post_thumbnail('frontpage-img');
            endif; ?>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
        <div class="entry-meta small">
            <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
            <span class="comments-count pull-right"><?php comments_popup_link(  '0 Comments' , '1 Comment', '% Comments' ); ?> </span>
        </div>
    </article>
</div>

