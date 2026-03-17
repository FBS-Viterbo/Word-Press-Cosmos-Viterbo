<?php get_header(); ?>

<!-- top title -->
<section>
    <div class="contaner">
        <div class="flex flex-col gap-4 text-center mb-15 mt-15">
            <h2 class="text-white"><?php echo the_field('title') ?></h2>
            <p class="text-secondary">
                <?php echo the_field('info') ?>
            </p>
        </div>
    </div>
</section>

<!-- images__container -->
<div class="img__container">
    <div class="container">
        <div class="images__wrapper">
            <?php
            $cards = new WP_Query(array(
                'post_type' => 'gallery',
                'post_per_page' => -1,
            ));
            ?>
            <?php if ($cards->have_posts()): ?>
                <?php while ($cards->have_posts()):
                    $cards->the_post() ?>
                    <img class="<?php echo get_the_excerpt() ?>"
                        src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="image">
                <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>