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

      <?php
      $images = get_field('project_gallery');
      if ($images) : ?>
        <div class="gal-container">
          <?php foreach ($images as $image) : ?>
            <figure>
                <img type="button" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo esc_html($image['id']); ?>"/>              
            </figure>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?php echo esc_html($image['id']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div> -->
                  <div class="modal-body">
                   <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <!-- test -->
      <!-- Button trigger modal -->


      <!-- test -->
    </div>

    <div class="back_btn text-center">
      <a href="#" onclick="history.go(-1)" class="btn bg-third my-5 py-4 px-5">
        < back to projects</a>
    </div>
  </div>
</div>


<?php get_footer(); ?>