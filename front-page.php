<?php get_header(); ?>

<!-- banner -->
<?php $img = get_field('bg_front'); ?>
<section class="banner flex items-center justify-center text-center py-20 h-[800px]" style="
    background: linear-gradient(rgba(5, 11, 24, 0.8), rgba(5, 11, 24, 0.8)), url('<?php echo esc_url($img['url']); ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  ">
  <div class="container">
    <div class="banner__wrapper flex flex-col items-center gap-5">
      <button class="btn btn--third">
        <span> 🏞️ Exploring the Unknown </span>
      </button>
      <h1
        class="title bg-gradient-to-r from-white via-pink-300 to-pink-500 bg-clip-text text-transparent max-w-[650px]">
        <?php echo the_field("title") ?>
      </h1>
      <p class="max-w-[600px] text-secondary">
        <?php echo the_field("short_info") ?>
      </p>
      <div class="controls flex items-center gap-4 mt-6">
        <button class="btn btn--primary">
          <p>View Missions</p>
          <i class="fa-solid fa-arrow-right"></i>
        </button>
        <button class="btn btn--secondary">Our Fleet</button>
      </div>
    </div>
  </div>
</section>

<!-- tab -->
<section class="tab bg-primary py-10">
  <div class="container">
    <div class="tab__wrapper">
      <div class="flex flex-col md:flex-row py-6 gap-6 text-center items-center justify-center mt-10">

        <?php
        $cards = new WP_Query(array(
          'post_type' => 'front_page_cards',
          'post_per_page' => -1,
        ));
        ?>
        <?php if ($cards->have_posts()): ?>
          <?php while ($cards->have_posts()):
            $cards->the_post() ?>
            <div class="tabCard">
              <h3 class="cardCounter"> <?php echo get_the_excerpt(); ?>
              </h3>
              <p>
                <?php the_title() ?>
              </p>
            </div>
          <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata(); ?>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>