<?php get_header(); ?>

<!-- background -->
<?php
$background_img = get_field("background");
?>

<img class="absolute -z-1 top-0 w-screen max-h-[1000px] object-cover"
    src="<?php echo esc_url(wp_get_attachment_image_url($background_img['ID'], 'full')) ?>" alt="Banner image" />


<!-- banner title -->
<div class="banner__title mt-10">
    <div class="container">
        <div class="banner__title__wrapper flex flex-col items-center justify-center">
            <h2 class="text-white"><?php echo the_field('title') ?></h2>
            <p class="text-secondary mt-5">
                <?php echo the_field('info') ?>
            </p>
        </div>
    </div>
</div>

<!-- mission__content -->
<div class="mission__content mt-10 mb-20">
    <div class="container">
        <div class="flex flex-col gap-5 max-w-[1300px] m-auto md:grid md:grid-cols-3 md:grid-rows-2">

            <?php
            $cards = new WP_Query(array(
                'post_type' => 'mission_cards',
                'post_per_page' => -1,
            ));
            ?>
            <?php if ($cards->have_posts()): ?>
                <?php while ($cards->have_posts()):
                    $cards->the_post() ?>

                    <a href="./card.html">
                        <div class="mission__card">

                            <?php $is_active = get_field('is_active'); ?>


                            <div class="card__status <?php echo ($is_active == 1) ? 'card__active' : 'card__not__active'; ?>">
                                <p>
                                    <?php echo ($is_active == 1) ? 'Active' : 'Upcoming'; ?>
                                </p>
                            </div>

                            <!-- image -->
                            <div class="mc__image">
                                <?php
                                $card_img = get_field("card_img");
                                ?>
                                <img src="<?php echo esc_url(wp_get_attachment_image_url($card_img['ID'], 'full')) ?>"
                                    alt="Banner image">
                            </div>
                            <!-- info -->
                            <div class="info">
                                <div class="date">
                                    <i class="fa-solid fa-calendar"></i>
                                    <p class="date__text">Launched: July 2020</p>
                                </div>
                                <h4><?php the_title() ?></h4>
                                <p>
                                    <?php echo the_field('info') ?>
                                </p>
                                <span class="line"></span>
                                <div class="bot__icon">
                                    <div class="content__icon">
                                        <p><?php the_field('l_icon') ?></p>
                                        <p><?php the_field('l_info') ?></p>
                                    </div>
                                    <div class="content__icon">
                                        <p><?php the_field('r_icon') ?></p>
                                        <p><?php the_field('r_info') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>