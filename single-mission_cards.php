<?php get_header(); ?>

<!-- banner -->
<?php $img = get_field('card_img'); ?>
<section style="
    background: linear-gradient(rgba(5, 11, 24, 0.8), rgba(5, 11, 24, 0.8)), url('<?php echo esc_url($img['url']); ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  " class="card__banner pt-5 pb-10">
    <div class="container">
        <div class="card__banner__wrapper">
            <div class="flex items-center gap-5 justify-center text-secondary md:justify-start mt-30">
                <small>Home</small>
                <i class="fa-solid fa-arrow-right"></i>
                <small>Missions</small>
                <i class="fa-solid fa-arrow-right"></i>
                <small><?php echo the_title() ?></small>
            </div>
            <div class="card__main__status card__active mt-5">
                <p>Active Mission</p>
            </div>
            <div class="mt-5">
                <small class="text-secondary">📅 Launched: July 30, 2020</small>
            </div>
            <h1 class="text-white my-8"><?php echo the_title() ?></h1>
            <p class="text-secondary max-w-[700px]">
                <?php echo the_field('single_info') ?>
            </p>
        </div>
    </div>
</section>

<!-- main content -->
<section class="relative">
    <?php
    $banner_img = get_field("bg_img");
    ?>

    <img class="absolute w-screen left-0 top-0 -z-1"
        src="<?php echo esc_url(wp_get_attachment_image_url($banner_img['ID'], 'full')) ?>" alt="Banner image" />


    <div class="container">
        <div class="main__content__wrapper md:grid grid-cols-[3fr_1fr] gap-10">
            <!-- left -->
            <div class="flex flex-col gap-10 mt-10">
                <!-- info -->
                <div class="text-secondary">
                    <p>
                        <?php echo the_field('single_main_info') ?>
                    </p>
                    <p>
                        <?php echo the_field('single_main_info_2') ?>
                    </p>
                </div>
                <!-- mission -->
                <div class="mt-20 flex flex-col gap-5">
                    <div class="flex flex-col w-fit gap-5">
                        <h3 class="text-white">Mission Objectives</h3>
                        <span class="h-[2px] w-full bg-[#4d1c27]"></span>
                    </div>
                    <ul class="flex flex-col gap-5 list-disc text-secondary ps-5">
                        <li>
                            <p>Explore geologically diverse landing site</p>
                        </li>
                        <li>
                            <p>Assess ancient habitability</p>
                        </li>
                        <li>
                            <p>
                                Seek signs of ancient life, particularly in special rocks
                                known to preserve signs of life over time
                            </p>
                        </li>
                        <li>
                            <p>
                                Gather rock and soil samples that could be returned to Earth
                                by a future NASA mission
                            </p>
                        </li>
                        <li>
                            <p>
                                Demonstrate technology for future robotic and human
                                exploration
                            </p>
                        </li>
                    </ul>
                </div>
                <!-- key achievements -->
                <div class="mt-10">
                    <div class="flex flex-col w-fit gap-5">
                        <h3 class="text-white">Key Achievements</h3>
                        <span class="h-[2px] w-full bg-[#4d1c27]"></span>
                    </div>
                    <p class="text-secondary mt-5">
                        <?php echo the_field('keyt_achievements') ?>
                    </p>
                    <!-- images -->
                    <div class="flex flex-col mt-5 gap-5 md:grid grid-cols-2 md:grid-rows-2">

                        <?php
                        $k1_img = get_field("k1_img");
                        $k2_img = get_field("k2_img");
                        $k3_img = get_field("k3_img");
                        $k4_img = get_field("k4_img");
                        ?>

                        <img class="key__achievements__img"
                            src="<?php echo esc_url(wp_get_attachment_image_url($k1_img['ID'], 'full')) ?>"
                            alt="Banner image" />
                        <img class="key__achievements__img"
                            src="<?php echo esc_url(wp_get_attachment_image_url($k2_img['ID'], 'full')) ?>"
                            alt="Banner image" />
                        <img class="key__achievements__img"
                            src="<?php echo esc_url(wp_get_attachment_image_url($k3_img['ID'], 'full')) ?>"
                            alt="Banner image" />
                        <img class="key__achievements__img"
                            src="<?php echo esc_url(wp_get_attachment_image_url($k4_img['ID'], 'full')) ?>"
                            alt="Banner image" />

                    </div>

                    <!-- technical specification -->
                    <div class="mt-10">
                        <div class="flex flex-col w-fit gap-5">
                            <h3 class="text-white">Technical Specifications</h3>
                            <span class="h-0.5 w-full bg-[#4d1c27]"></span>
                        </div>
                        <div class="tech_spec_contents">
                            <div class="tech_spec_content">
                                <p class="text-secondary">Launch Vehicle</p>
                                <p class="text-white">
                                    <?php echo the_field('ts_launch_vehicle') ?>
                                </p>
                            </div>
                            <div class="tech_spec_content">
                                <p class="text-secondary">Launch Site</p>
                                <p class="text-white">
                                    <?php echo the_field('ts_launch_site') ?>
                                </p>
                            </div>
                            <div class="tech_spec_content">
                                <p class="text-secondary">Landing Site</p>
                                <p class="text-white"><?php echo the_field('ts_landing_site') ?></p>
                            </div>
                            <div class="tech_spec_content">
                                <p class="text-secondary">Mission Duration</p>
                                <p class="text-white">
                                    <?php echo the_field('ts_mission_duration') ?>
                                </p>
                            </div>
                            <div class="tech_spec_content">
                                <p class="text-secondary">Mass</p>
                                <?php echo the_field('ts_mass') ?>
                            </div>
                            <div class="tech_spec_content">
                                <p class="text-secondary">Power Source</p>
                                <p class="text-white">
                                    <?php echo the_field('ts_power_source') ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- qt -->
                    <div class="flex gap-5 mt-5">
                        <div class="container">
                            <span class="self-stretch w-[10px] bg-[#4d1c27]"></span>
                            <div class="flex flex-col gap-10">
                                <p class="text-secondary">
                                    <?php echo the_field('ts_sub_info') ?>
                                </p>
                                <h5 class="text-white italic">
                                    <?php echo the_field('ts_h_sub_info') ?>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <span class="block h-[1px] w-[100%] mt-10 bg-[#27272b]"></span>

                    <div class="flex flex-wrap gap-3 mt-10">
                        <span class="btn btn--4rth"> Mars </span>
                        <span class="btn btn--4rth"> Rover </span>
                        <span class="btn btn--4rth"> NASA </span>
                        <span class="btn btn--4rth"> Astrobiology </span>
                        <span class="btn btn--4rth"> Sample Return </span>
                        <span class="btn btn--4rth"> Ingenuity </span>
                    </div>
                </div>
            </div>
            <!-- right -->
            <div class="flex flex-col gap-10">
                <!-- mission data -->
                <div class="mission__data">
                    <h5 class="text-main">📅 Mission Data</h5>
                    <div class="flex justify-between">
                        <p class="text-secondary">Distance</p>
                        <!-- here -->
                        <h5 class="text-main"><?php echo the_field('md_distance') ?></h5>
                    </div>
                    <span class="line"></span>
                    <div class="graph__container">
                        <span class="mission__graph"></span>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-secondary">Samples Collected</p>
                        <h5 class="text-main"><?php echo the_field('md_samples_collected') ?></h5>
                    </div>
                    <span class="line"></span>
                    <div class="graph__container">
                        <span class="mission__graph"></span>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-secondary">Sol (Mars Day)</p>
                        <h5 class="text-main"><?php echo the_field('sol') ?></h5>
                    </div>
                    <span class="line"></span>
                    <div class="flex justify-between">
                        <p class="text-secondary">Temperature</p>
                        <h5 class="text-main"><?php echo the_field('temprerature') ?></h5>
                    </div>
                    <span class="line"></span>
                    <div class="flex justify-between">
                        <p class="text-secondary">Wind Speed</p>
                        <h5 class="text-main"><?php echo the_field('wind_speed') ?></h5>
                    </div>
                </div>
                <!-- quick links -->
                <div class="quick__links">
                    <h5 class="text-white">🔗 Quick Links</h5>
                    <div class="quick__links__data">
                        <p>📡 Live Mission Control</p>
                        <p>📸 Raw Image Gallery</p>
                        <p>📍 Interactive Map</p>
                        <p>📺 Mission Videos</p>
                        <p>📚 Scientific Papers</p>
                    </div>
                </div>

                <div class="share__mission">
                    <h5>📩 Share Mission</h5>
                    <div class="flex gap-5">
                        <div class="social__card">
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        </div>
                        <div class="social__card">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <div class="social__card">
                            <a href="#"><i class="fa-regular fa-camera"></i></a>
                        </div>
                        <div class="social__card">
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Missions -->
<section>
    <div class="container">
        <div class="text__title flex flex-col items-center justify-center my-10 md:mt-20">
            <h2 class="text-main">Related Missions</h2>
            <p class="text-secondary mt-5">
                Explore other active missions in our solar system
            </p>
        </div>

        <div class="flex flex-col gap-5 mb-20 md:grid md:grid-cols-3">
            <?php
            $cards = new WP_Query(array(
                'post_type' => 'mission_cards',
                'posts_per_page' => 3,
                'orderby' => 'rand',
                'post__not_in' => array(get_the_ID()),
            ));
            ?>
            <?php if ($cards->have_posts()): ?>
                <?php while ($cards->have_posts()):
                    $cards->the_post(); ?>
                    <a href="<?php the_permalink() ?>">
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
</section>


<?php get_footer(); ?>