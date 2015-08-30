<div class="col-md-6">
    <article <?php post_class('magazine-entry'); ?>>
        <header class="magazine-title">
            <div class="aspect-ratio">
                <div class="entry-overlay"></div>
                <?php if (has_post_thumbnail()) :
                    the_post_thumbnail('frontpage-img');
                endif; ?>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
                   </header>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
        <div class="entry-meta small">
            <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
            <span class="comments-count pull-right">
                <a class="twitter popup" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?> <?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a>
                <?php comments_popup_link(  '<i class="fa fa-comments"></i> 0' , '<i class="fa fa-comments"></i> 1', '<i class="fa fa-comments"></i> %' ); ?>
            </span>
        </div>
    </article>
</div>

