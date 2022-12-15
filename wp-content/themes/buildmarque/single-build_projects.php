<?php

get_header();  ?>

<?php get_template_part('inner-banner'); ?>

<!-- Single Project section -->
<div class="about_sec py-5">
  <div class="container">
    <div class="heading text-center">
      <h2 class="text-second mb-5">
        <?php the_title(); ?>
      </h2>
    </div>
    <div class="content py-5">
      <?php
      $images = get_field('project_gallery');
      if ($images) : ?>
        <div class="gal-container">
          <?php foreach ($images as $image) : ?>
            <figure>
              <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </figure>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

    </div>

    <div class="back_btn text-center">
      <a href="#" onclick="history.go(-1)" class="btn bg-third my-5 py-4 px-5">
        < back to projects</a>
    </div>
  </div>
</div>



<?php get_footer(); ?>