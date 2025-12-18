<?php
$args = array(
  'post_type'      => 'partner_logo',
  'posts_per_page' => -1,
  'post_status'    => 'publish',
);
$query = new WP_Query($args);

if ($query->have_posts()) : ?>
  <section class="logo-slider-section">
    <div class="container">
      <h2 class="section-title">Partners</h2>
      <div class="swiper logo-slider">
        <div class="swiper-wrapper">
          <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php if (has_post_thumbnail()) : ?>
              <div class="swiper-slide">
                <div class="logo-item">
                  <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                </div>
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>
