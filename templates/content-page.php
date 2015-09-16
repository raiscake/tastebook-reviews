<div class="page-content">
    <?php the_content(); ?>
</div>

<!-- Archive Page Template -->
<?php if(is_page('archives')) : ?>
    <section class="archive-list">
        <div class="row">
            <div class="col-sm-6">
                <h3>Last 10 Posts</h3>
                <ul class="by-post">
                    <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 10, 'format' => 'html' ) ); ?>
                </ul>

                <h3>Posts by Category</h3>
                <ul class="by-cats">
                    <?php wp_list_categories( array('title_li' => __( '' )) ); ?>
                </ul>

                <h3>Posts by Tag</h3>
                    <?php wp_tag_cloud( array(
                        'format' => 'list',
                        'smallest'                  => 1,
                        'largest'                   => 1,
                        'unit'                      => 'em',
                    ) ); ?>

            </div>
            <div class="col-sm-6">
                <h3>Archives by Year</h3>
                <ul class="by-year">
                    <?php wp_get_archives(array('type' => 'yearly')); ?>
                </ul>
                <h3>Archives by Month</h3>
                <ul class="by-month">
                    <?php wp_get_archives(array('type' => 'monthly')); ?>
                </ul>
                <h3>Archives by Date</h3>
                <ul class="by-date">
                    <?php wp_get_archives(array('type' => 'daily')); ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>