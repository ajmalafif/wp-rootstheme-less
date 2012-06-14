<header id="banner" role="banner">
  <?php roots_header_inside(); ?>
  <div class="<?php echo WRAP_CLASSES; ?>">
  	<!-- self-added divs -->
  	<div class="logo">
    <a class="brand" href="<?php echo home_url(); ?>/">
      <?php bloginfo('name'); ?>
    </a>
	</div>
	<!-- end of self-added divs -->
    <nav id="nav-main" role="navigation">
      <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'offset1 nav nav-pills')); ?>
    </nav>
  </div>
</header>