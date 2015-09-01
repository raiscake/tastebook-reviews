<div class="entry-meta">
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