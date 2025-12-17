<?php get_header(); ?>

<main class="blog-list container">
  <h1 class="blog-title">Blog</h1>

  <?php if (have_posts()) : ?>
    <div class="blog-cards">
      <?php while (have_posts()) : the_post(); ?>
        <article class="blog-card">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
              <div class="thumb"><?php the_post_thumbnail('medium'); ?></div>
            <?php endif; ?>
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
            <span class="readmore">続きを読む →</span>
          </a>
        </article>
      <?php endwhile; ?>
    </div>
    <div class="pagination">
      <?php the_posts_pagination(); ?>
    </div>
  <?php else : ?>
    <p>投稿がまだありません。</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
