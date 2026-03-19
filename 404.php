<?php get_header(); ?>

<section class="page_404 pt-10" style="
        background-image:
          linear-gradient(rgba(5, 11, 24, 0.8), rgba(5, 11, 24, 0.8)),
          url(&quot;https://images.unsplash.com/photo-1446776811953-b23d57bd21aa&quot;);
      ">
    <!-- container -->
    <div class="container">
        <!-- Avatar -->
        <div class="avatar">
            <div class="circle_border">
                <div class="avatar_bg">🙍‍♂️</div>
            </div>
        </div>
        <!-- Title -->
        <h1 class="title text-8xl m-0 p-0">404</h1>

        <!-- Subtitle -->
        <h4>Houston, We Have a Problem</h4>

        <!-- Description -->
        <p class="mt-3 text-secondary max-w-[750px] m-auto">
            The page you're looking for has drifted into deep space. It might have
            been moved, deleted, or never existed in this universe.
        </p>

        <!-- Buttons -->
        <div class="mt-6 flex flex-wrap justify-center gap-4">
            <button class="btn btn--primary w-full max-w-[350px] md:w-[200px]">
                🚀 Return to Earth
            </button>
            <button class="btn btn--secondary">📡 Browse Missions</button>
        </div>

        <!-- Popular destinations -->
        <div class="mt-10 mb-15 bg-[rgba(255,255,255,0.1)] p-5 rounded-4xl max-w-[800px] mx-auto">
            <h5>Popular Destination</h5>
            <div class="mt-5 flex flex-col gap-3 md:grid grid-cols-3 grid-rows-2">
                <a href="#">
                    <div class="destination">🏠 Home Base</div>
                </a>
                <a href="#">
                    <div class="destination">🎯 Missions</div>
                </a>
                <a href="#">
                    <div class="destination">🛸 Spacecraft</div>
                </a>
                <a href="#">
                    <div class="destination">🏞️ Gallery</div>
                </a>
                <a href="#">
                    <div class="destination">📡 Contact</div>
                </a>
                <a href="#">
                    <div class="destination">📰 News</div>
                </a>
            </div>
        </div>
    </div>
</section>