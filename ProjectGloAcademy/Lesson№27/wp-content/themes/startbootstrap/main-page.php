<?php
/*
Template Name: Главная страница
 */

get_header();
?>
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-fluid" src="<?php echo get_field('imageMain',59) ?>" alt="">
        <div class="intro-text">
          <span class="name"><?php bloginfo('title'); ?></span>
          <hr class="star-light">
          <span class="skills"><?php bloginfo('description'); ?></span>
        </div>
      </div>
    </header>
<?php
get_footer();
