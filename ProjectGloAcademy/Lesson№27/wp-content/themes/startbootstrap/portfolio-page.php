<?php
/*
  Template Name: Cтраница Портфолио
 */

get_header();
?>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Portfolio</h2>
        <hr class="star-primary">
        <div class="row">

        <?php 
        $args = array(
          'numberposts' => 5,
          'orderby'     => 'date',
          'order'       => 'DESC',
          'include'     => array(),
          'exclude'     => array(),
          'meta_key'    => '',
          'meta_value'  =>'',
          'post_type'   => 'post',
        );

        $posts = get_posts($args);
        foreach( $posts as $post ){
          setup_postdata($post);
          ?>
            <div class="col-sm-4 portfolio-item">
              <a class="portfolio-link" href="<?php the_permalink();?>" >
                <div class="caption">
                  <div class="caption-content">
                    <?php the_title();?>
                  </div>
                </div>
                <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
              </a>
            </div>
          <?php
        }
        wp_reset_postdata();
        ?>
        </div>
      </div>
    </section>

<?php
get_footer();
