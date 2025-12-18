<?php get_header(); ?>

<main class="single-post container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="blog-content">
      <h1 class="post-title"><?php the_title(); ?></h1>
      <div class="post-meta"><?php echo get_the_date(); ?></div>
      <?php if (has_post_thumbnail()) : ?>
<!--         <div class="featured-image"><?php the_post_thumbnail('large'); ?></div> -->
      <?php endif; ?>
      <div class="post-body"><?php the_content(); ?></div>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
