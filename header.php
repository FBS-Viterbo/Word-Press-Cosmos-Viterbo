<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo blogInfo('description') ?>" />
  <title>COSMOS</title>
  <?php wp_head(); ?>
</head>

<body class="bg-primary">
  <!-- header -->
  <header class="header">
    <div class="container">
      <div class="header__wrapper">
        <div class="header__logo">
          <?php the_custom_logo() ?>
          <h3>COSMOS</h3>
        </div>

        <!-- burger -->
        <button class="header__burger">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <nav class="header__nav">
          <ul>
            <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo site_url('/missions'); ?>">Missions</a></li>
            <li><a href="<?php echo site_url('/space'); ?>">Spacecraft</a></li>
            <li><a href="<?php echo site_url('/gallery'); ?>">Gallery</a></li>
            <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
</body>

</html>