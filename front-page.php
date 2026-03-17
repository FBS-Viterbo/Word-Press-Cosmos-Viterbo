<?php get_header(); ?>

    <!-- banner -->
    <section
      class="banner flex items-center justify-center text-center py-20 h-[800px]"
    >
      <div class="container">
        <div class="banner__wrapper flex flex-col items-center gap-5">
          <button class="btn btn--third">
            <span> 🏞️ Exploring the Unknown </span>
          </button>
          <h1
            class="title bg-gradient-to-r from-white via-pink-300 to-pink-500 bg-clip-text text-transparent max-w-[650px]"
          >
            Journey Beyond the Stars
          </h1>
          <p class="text-secondary">
            Discover the next generation of space exploration. From Mars
            missions to deep space telescopes, we're pushing the boundaries of
            human knowledge.
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
          <div
            class="flex flex-col md:flex-row py-6 gap-6 text-center items-center justify-center mt-10"
          >
            <div class="tabCard">
              <h3 class="cardCounter">150+</h3>
              <p>Missions Completed</p>
            </div>
            <div class="tabCard">
              <h3 class="cardCounter">12</h3>
              <p>Active Spacecraft</p>
            </div>
            <div class="tabCard">
              <h3 class="cardCounter">4.2B</h3>
              <p>Km Traveled</p>
            </div>
            <div class="tabCard">
              <p class="cardCounter">28</p>
              <p>Countries</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>

