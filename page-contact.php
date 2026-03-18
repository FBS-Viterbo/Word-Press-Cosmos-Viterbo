<?php get_header(); ?>

<section class="contact pt-15 pb-20 relative">
    <div class="container">
        <div class="contact__wrapper">
            <div class="title">
                <h1 class="text-white text-center"><?php echo the_field('title') ?></h1>
                <p class="text-secondary text-center mt-10">
                    <?php echo the_field('banner_info') ?>
                </p>
            </div>
            <div
                class="main__content flex flex-col items-center mt-15 md:grid md:grid-cols-2 md:items-center md:justify-items-center">
                <div class="max-w-md text-white text-center md:text-start">
                    <h2 class="text-2xl font-semibold mb-3">
                        <?php echo the_field('form_title') ?>
                    </h2>

                    <p class="text-gray-300 mb-8">
                        <?php echo the_field('name_place_holder') ?>
                    </p>

                    <div class="flex flex-col gap-5 items-center justify-center md:justify-start md:items-start">

                        <?php
                        $cards = new WP_Query(array(
                            'post_type' => 'contact_infos',
                            'posts_per_page' => -1,
                        ));
                        ?>

                        <?php if ($cards->have_posts()): ?>
                            <?php while ($cards->have_posts()):
                                $cards->the_post(); ?>

                                <div class="info__item">
                                    <div class="icon__box">
                                        <?php the_content(); ?>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold"><?php the_title(); ?></h5>
                                        <p class="text-gray-400 text-sm">
                                            <?php echo get_the_excerpt(); ?>
                                        </p>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
                <form action="#"
                    class="bg-linear-to-b from-[#0f172a] to-[#1e293b] p-10 rounded-2xl space-y-5 w-full max-w-md text-white mt-15 relative z-1">
                    <!-- Full Name -->
                    <div class="flex flex-col gap-2">
                        <label for="full_name">Full Name</label>
                        <input id="full_name" type="text" placeholder="John Astronaut"
                            class="bg-[#111827] border border-gray-700 rounded-lg px-4 py-3 text-sm outline-none focus:border-pink-500 focus:ring-1 focus:ring-pink-500" />
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col gap-2">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" placeholder="john@example.com"
                            class="bg-[#111827] border border-gray-700 rounded-lg px-4 py-3 text-sm outline-none focus:border-pink-500 focus:ring-1 focus:ring-pink-500" />
                    </div>

                    <!-- Subject -->
                    <div class="flex flex-col gap-2">
                        <label for="subject">Subject</label>
                        <input id="subject" type="text" placeholder="Mission Inquiry"
                            class="bg-[#111827] border border-gray-700 rounded-lg px-4 py-3 text-sm outline-none focus:border-pink-500 focus:ring-1 focus:ring-pink-500" />
                    </div>

                    <!-- Message -->
                    <div class="flex flex-col gap-2">
                        <label for="message">Message</label>
                        <textarea id="message" rows="5" placeholder="Tell us about your space interests..."
                            class="bg-[#111827] border border-gray-700 rounded-lg px-4 py-3 text-sm outline-none resize-none focus:border-pink-500 focus:ring-1 focus:ring-pink-500"></textarea>
                    </div>

                    <!-- Button -->
                    <button type="submit"
                        class="w-full bg-pink-500 hover:bg-pink-600 transition rounded-full py-3 font-semibold shadow-lg shadow-pink-500/30">
                        Send Message 🚀
                    </button>
                </form>
            </div>
            <div class="hidden h-30 w-screen absolute bg-primary left-0 bottom-0 -z-0 md:block"></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>