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
            <!-- TEST -->
            <!-- <?php
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
                    <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h1.jpg)">
                      <img src="<?php echo $featured_img_url; ?>" alt="">
                      <div class="proj_cap text-center text-light text-uppercase">
                        <?php the_title(); ?>
                      </div>
                    </div>
                  </a>
                </div>
            <?php
              }
            }
            ?> -->
            <!-- TEST -->
            <div class="col-sm-4 mt-3">
              <a href="<?php echo get_home_url(); ?>/build_projects/new-build-bergholt/">
                <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h1.jpg)">
                  <div class="proj_cap text-center text-light text-uppercase">
                    new build bergholt
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="#">
                <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h2.jpg)">
                  <div class="proj_cap text-center text-light text-uppercase">
                    PERIOD PORCH brantham
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="#">
                <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h3.jpg)">
                  <div class="proj_cap text-center text-light text-uppercase">
                    house conversion chelmsford
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="#">
                <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h4.jpg)">
                  <div class="proj_cap text-center text-light text-uppercase">
                    garden room / gym colchester
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="#">
                <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h5.jpg)">
                  <div class="proj_cap text-center text-light text-uppercase">
                    replacement dormers
                    copdock
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="#">
                <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h6.jpg)">
                  <div class="proj_cap text-center text-light text-uppercase">
                    house Refurbishment ipswich
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="#">
                <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h7.jpg)">
                  <div class="proj_cap text-center text-light text-uppercase">
                    house extension ipswich
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4 mt-3">

            </div>
            <div class="col-sm-4 mt-3">
              <a href="#">
                <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h9.jpg)">
                  <div class="proj_cap text-center text-light text-uppercase">
                    house refurbishment lexden
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <a href="#">
                <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h10.jpg)">
                  <div class="proj_cap text-center text-light text-uppercase">
                    new orangery lexden
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h11.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  extension
                  manningtree
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h12.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  extension
                  stanway
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h13.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Front porch tattingstone
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h14.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Garden room wickham bishops
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h15.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  extension
                  woodbridge
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="cat_2" class="pr0_tabcontent">
        <div class="sing_cat_sec">
          <div class="row">
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h1.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Sample text
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h1.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Sample text
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h1.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Sample text
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="cat_3" class="pr0_tabcontent">
        <div class="sing_cat_sec">
          <div class="row">
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h2.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Sample text
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h2.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Sample text
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h2.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Sample text
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="cat_4" class="pr0_tabcontent">
        <div class="sing_cat_sec">
          <div class="row">
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h3.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Sample text
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h3.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Sample text
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h3.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Sample text
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="cat_5" class="pr0_tabcontent">
        <div class="sing_cat_sec">
          <div class="row">
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h4.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Sample text
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h4.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Sample text
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="proj" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/h4.jpg)">
                <div class="proj_cap text-center text-light text-uppercase">
                  Sample text
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- test -->
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

    <div class="date-time">
      <p class="date-number"><?php the_date('d'); ?></p>
      <p class="month-name"><?php the_time('M'); ?></p>
    </div>
    <div class="exper">
      <p class="experiment text-center"><?php echo $cats[0]->name; ?></p>
    </div>
    <img src="<?php echo $featured_img_url; ?>" alt="">
    <h5 class="card-title"><?php the_title(); ?></h5>

    <div class="card-description">
      <p class="card-text"><?php the_excerpt(); ?></p>
      <a href="<?php echo get_permalink($post->ID); ?>" class="des">continue reading</a>
    </div>

<?php
  }
}
?>
<!-- test -->

<?php get_footer(); ?>