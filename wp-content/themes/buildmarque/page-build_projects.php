<?php
/*
Template Name: Projects
*/
get_header();  ?>

<?php get_template_part('inner-banner'); ?>

<!-- Projects section -->
<div class="about_sec py-5">
  <div class="container">
    <div class="heading text-center">
      <h2 class="text-second mb-5">Projects</h2>
    </div>
    <div class="content pt-2 pb-5">

      <div class="pr0_tab text-center">
        <button class="pr0_tablinks bg-white fw-bold text-uppercase px-4" onclick="openCity(event, 'cat_1')">
          All
        </button>
        <button class="pr0_tablinks bg-white fw-bold text-uppercase px-4" onclick="openCity(event, 'cat_2')">
          RENOVATIONS
        </button>
        <button class="pr0_tablinks bg-white fw-bold text-uppercase px-4" onclick="openCity(event, 'cat_3')">
          LANDSCAPING
        </button>
        <button class="pr0_tablinks bg-white fw-bold text-uppercase px-4" onclick="openCity(event, 'cat_4')">
          KITCHENS & BATHROOMS
        </button>
        <button class="pr0_tablinks bg-white fw-bold text-uppercase px-4" onclick="openCity(event, 'cat_5')">
          INTERNAL REFURBS
        </button>
      </div>

      <div id="cat_1" class="pr0_tabcontent" style="display: block">
        <div class="sing_cat_sec">
          <div class="row">

            <?php
            $args = array(
              'post_type' => 'build_projects',
              
            );

            $post_query = new WP_Query($args);

            if ($post_query->have_posts()) {
              while ($post_query->have_posts()) {
                $post_query->the_post();
                $featured_img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
                $cats = get_the_category($post->ID);
            ?>
                <div class="col-sm-4 mt-3">
                  <a href="<?php echo get_permalink($post->ID); ?>">
                    <div class="proj" style="background-image: url(<?php echo $featured_img_url; ?>)">
                      <div class="proj_cap text-center text-light text-uppercase">
                        <?php the_title(); ?>
                      </div>
                    </div>
                  </a>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </div>

      <div id="cat_2" class="pr0_tabcontent">
        <div class="sing_cat_sec">
          <div class="row">
          <?php
            $args = array(
              'post_type' => 'build_projects',
              'category_name' => 'renovations'
            );

            $post_query = new WP_Query($args);

            if ($post_query->have_posts()) {
              while ($post_query->have_posts()) {
                $post_query->the_post();
                $featured_img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
                $cats = get_the_category($post->ID);
            ?>
                <div class="col-sm-4 mt-3">
                  <a href="<?php echo get_permalink($post->ID); ?>">
                    <div class="proj" style="background-image: url(<?php echo $featured_img_url; ?>)">
                      <div class="proj_cap text-center text-light text-uppercase">
                        <?php the_title(); ?>
                      </div>
                    </div>
                  </a>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </div>

      <div id="cat_3" class="pr0_tabcontent">
        <div class="sing_cat_sec">
          <div class="row">
          <?php
            $args = array(
              'post_type' => 'build_projects',
              'category_name' => 'landscaping'
            );

            $post_query = new WP_Query($args);

            if ($post_query->have_posts()) {
              while ($post_query->have_posts()) {
                $post_query->the_post();
                $featured_img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
                $cats = get_the_category($post->ID);
            ?>
                <div class="col-sm-4 mt-3">
                  <a href="<?php echo get_permalink($post->ID); ?>">
                    <div class="proj" style="background-image: url(<?php echo $featured_img_url; ?>)">
                      <div class="proj_cap text-center text-light text-uppercase">
                        <?php the_title(); ?>
                      </div>
                    </div>
                  </a>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </div>
      <div id="cat_4" class="pr0_tabcontent">
        <div class="sing_cat_sec">
          <div class="row">
          <?php
            $args = array(
              'post_type' => 'build_projects',
              'category_name' => 'kitchens-bathrooms'
            );

            $post_query = new WP_Query($args);

            if ($post_query->have_posts()) {
              while ($post_query->have_posts()) {
                $post_query->the_post();
                $featured_img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
                $cats = get_the_category($post->ID);
            ?>
                <div class="col-sm-4 mt-3">
                  <a href="<?php echo get_permalink($post->ID); ?>">
                    <div class="proj" style="background-image: url(<?php echo $featured_img_url; ?>)">
                      <div class="proj_cap text-center text-light text-uppercase">
                        <?php the_title(); ?>
                      </div>
                    </div>
                  </a>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </div>
      <div id="cat_5" class="pr0_tabcontent">
        <div class="sing_cat_sec">
          <div class="row">
          <?php
            $args = array(
              'post_type' => 'build_projects',
              'category_name' => 'internal-refurbs'
            );

            $post_query = new WP_Query($args);

            if ($post_query->have_posts()) {
              while ($post_query->have_posts()) {
                $post_query->the_post();
                $featured_img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
                $cats = get_the_category($post->ID);
            ?>
                <div class="col-sm-4 mt-3">
                  <a href="<?php echo get_permalink($post->ID); ?>">
                    <div class="proj" style="background-image: url(<?php echo $featured_img_url; ?>)">
                      <div class="proj_cap text-center text-light text-uppercase">
                        <?php the_title(); ?>
                      </div>
                    </div>
                  </a>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>