<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo blogInfo('description') ?>" />
  <title>COSMOS</title>
  <?php wp_head(); ?>
</head>

<?php
$background_img = get_field("bg");
?>

<body style="
    background: linear-gradient(rgba(5, 11, 24, 0.8), rgba(5, 11, 24, 0.8)), url('<?php echo esc_url($background_img['url']); ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  " class="bg-primary">

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

        <?php
        global $wp;
        $current_slug = $wp->request;
        ?>

        <nav class="header__nav">
          <ul>
            <li class="<?php echo ($current_slug == '') ? 'active' : ''; ?>">
              <a href="<?php echo site_url('/'); ?>">Home</a>
            </li>

            <li
              class="<?php echo ($current_slug == 'missions' || $current_slug == 'mission_cards') ? 'active' : ''; ?>">
              <a href="<?php echo site_url('/missions'); ?>">Missions</a>
            </li>

            <li class="<?php echo ($current_slug == 'space-craft') ? 'active' : ''; ?>">
              <a href="<?php echo site_url('/space'); ?>">Spacecraft</a>
            </li>

            <li class="<?php echo ($current_slug == 'gallery') ? 'active' : ''; ?>">
              <a href="<?php echo site_url('/gallery'); ?>">Gallery</a>
            </li>

            <li class="<?php echo ($current_slug == 'contact') ? 'active' : ''; ?>">
              <a href="<?php echo site_url('/contact'); ?>">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
</body>

</html>