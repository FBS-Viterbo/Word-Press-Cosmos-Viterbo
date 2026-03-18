<?php wp_footer(); ?>
<!-- footer -->
<footer class="footer bg-primary text-white border-t-[2px] border-[#27272b]">
  <div class="container">
    <div class="footer__wrapper flex flex-col">
      <div class="top flex flex-col gap-10 py-10 md:flex-row w-full justify-between">
        <div class="icon flex items-center justify-center">
          <!-- here -->
          <?php
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_url($custom_logo_id, 'full');
          ?>
          <img class="size-10 relative top-[4px]" src="<?php echo esc_url($logo); ?>" alt="Logo" />
          <h4>COSMOS</h4>
        </div>

        <ul class="flex items-center justify-center gap-5 text-secondary">
          <li><a href="#">Home</a></li>
          <li><a href="#">Mission</a></li>
          <li><a href="#">Spacecraft</a></li>
          <li><a href="#">Gallery</a></li>
        </ul>

        <div class="flex items-center justify-center gap-5">
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

      <div class="bottom text-center border-t-[2px] border-[#27272b] py-5">
        <p class="text-secondary m-auto">
          © 2026 Cosmos Space Exploration. All rights reserved.
        </p>
        <small class="text-[#a0a0a0]">Designed by Vince</small>
      </div>
    </div>
  </div>
</footer>

</body>

</html>