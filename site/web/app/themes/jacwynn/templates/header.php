<header class="site-header">
  <div class="wrapper">
    <div class="site-header__logo">
      <h2 class="site-header__logo-text">JACWYNN</h2>
    </div>
    <nav class="primary-navbar primary-navbar--pull-right">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>      
  </div>
</header>
