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
            <ul class="comments-count list-inline pull-right">
                <li>
                    <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a class="twitter popup" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?> <?php the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <?php comments_popup_link(  '<i class="fa fa-comments"></i> 0' , '<i class="fa fa-comments"></i> 1', '<i class="fa fa-comments"></i> %' ); ?>
                </li>
            </ul>
        </div>
    </article>
</div>

