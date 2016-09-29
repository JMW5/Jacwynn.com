<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
 
    <?php 
      get_template_part('templates/hero-image');
     ?>

     <div class="about-section">
      <div class="wrapper">
        <div class="about-section__photoAndButton">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/me.png" class="about-section__profile-pic" height="215px">
          <div class="about-section__btns">
            <a href="" class="about-section__link"><button class="about-section__btn">Who Am I?</button></a>
            <a href="" class="about-section__link"><button class="about-section__btn">Web Development</button></a>
            <a href="" class="about-section__link"><button class="about-section__btn">Web Design</button></a>
            <p class="about-section__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget maximus risus, et congue nulla. Integer sed finibus augue. Pellentesque sit amet nunc id quam tristique tempor a a nibh. Sed at turpis quam. Phasellus eget mauris facilisis, rhoncus augue a, consectetur arcu.Integer sed finibus augue. Pellentesque sit amet nunc id quam tristique tempor a a nibh. Sed at turpis quam. Phasellus eget mauris facilisis, rhoncus augue a, consectetur arcu.</p>
          </div>
        </div>
        <div class="about-section__social-icons">
          <img class="about-section__social-icon" src="<?php bloginfo('template_directory'); ?>/assets/images/github.png">
          <img class="about-section__social-icon" src="<?php bloginfo('template_directory'); ?>/assets/images/linkedin.png">
          <img class="about-section__social-icon" src="<?php bloginfo('template_directory'); ?>/assets/images/twitter.png">
          <img class="about-section__social-icon" src="<?php bloginfo('template_directory'); ?>/assets/images/facebook.png">
          <img class="about-section__social-icon" src="<?php bloginfo('template_directory'); ?>/assets/images/instagram.png">
        </div>
      </div>
     </div>





    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
