<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('single-article'); ?>>
      <header class="article-header">
          <div class="article-header-wrap">
              <div class="aspect-ratio">
                  <div class="entry-overlay"></div>
                  <?php if (has_post_thumbnail()) :
                      the_post_thumbnail('single-img');
                  endif; ?>
                  <a class="entry-link" href="<?php the_permalink(); ?>">
                      <h1 class="entry-title"><?php the_title(); ?></h1>
                  </a>
              </div>
          </div>
      </header>
      <?php get_template_part('templates/entry', 'meta'); ?>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
      <div class="entry-cats">
          <i class="fa fa-folder-open"></i> <?php the_category(', '); ?>
          <div class="entry-tags">
              <?php
              if(get_the_tag_list()) {
                  echo get_the_tag_list('<ul class="list-inline entry-tags-list"><li><i class="fa fa-tags"></i></li><li>','</li><li>','</li></ul>');
              }
              ?>
          </div>
      </div>

    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
