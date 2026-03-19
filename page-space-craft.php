<?php get_header(); ?>

<!-- content -->
<section class="space__craft mt-15">
    <div class="container">
        <div class="main__content__wrapper">
            <div class="flex flex-col gap-5 items-center justify-center text-center">
                <p class="text-3xl font-bold md:text-5xl"><?php echo the_field('title') ?></p>
                <p class="max-w-[630px]"><?php echo the_field('info') ?></p>
            </div>
            <div class="space__craft__content flex flex-col items-center justify-center mb-20">

                <?php
                $cards = new WP_Query(array(
                    'post_type' => 'space_craft_cards',
                    'post_per_page' => -1,
                ));
                ?>
                <?php if ($cards->have_posts()): ?>
                    <?php while ($cards->have_posts()):
                        $cards->the_post() ?>

                        <!-- 1 -->
                        <div class="space__craft__item">
                            <div class="box__container">
                                <div class="<?php echo the_field('box_name') ?>">
                                    <div class="inner__item"></div>
                                </div>
                            </div>

                            <div>
                                <div class="text">
                                    <h3><?php the_title() ?></h3>
                                    <p class="my-5">
                                        <?php echo the_field('info') ?>
                                    </p>
                                </div>
                                <div class="spc__cards">
                                    <div class="spc_card">
                                        <small>CREW CAPACITY</small>
                                        <h4><?php echo the_field('crew_capacity') ?></h4>
                                    </div>
                                    <div class="spc_card">
                                        <small>MISSION DURATION</small>
                                        <h4><?php echo the_field('mission_duration') ?></h4>
                                    </div>
                                    <div class="spc_card">
                                        <small>HEIGHT</small>
                                        <h4><?php echo the_field('height') ?></h4>
                                    </div>
                                    <div class="spc_card">
                                        <small>DIAMETER</small>
                                        <h4><?php echo the_field('diameter') ?></h4>
                                    </div>
                                </div>
                                <button class="btn btn--primary">View Specifications</button>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif;
                wp_reset_postdata(); ?>


            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>