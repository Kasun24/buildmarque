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
              <a href="" data-bs-toggle="modal" data-bs-target="#<?php echo esc_html($image['id']); ?>">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </a>
            </figure>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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