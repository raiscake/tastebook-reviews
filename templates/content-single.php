<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('single-article'); ?>>
      <header>
          <div class="aspect-ratio">
              <div class="entry-overlay"></div>
              <?php if (has_post_thumbnail()) :
                  the_post_thumbnail('single-img');
              endif; ?>
              <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          </div>
      </header>
      <?php get_template_part('templates/entry', 'meta'); ?>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
