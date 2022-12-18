<?php
/*
Template Name: Test Projects
*/
?>
<?php get_header();  ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('innerbanner'); ?>

    <div id="inner-content-wrapper" class="project-page" style="position:relative;">


      <div class="page-width ">
        <div class="projects-catagory">

          <div id="category-wrapper" class="filter-button-group projects-catagory">
            <a href="#" class="active grid-cat" data-filter="*">all</a>
            <?php
            $args = array(
              'orderby' => 'name',
            );

            $custom_terms = get_terms('project_category');

            $num = 1;
            $block_class = '';
            foreach ($custom_terms as $custom_term) {
              if (count($custom_terms) == $num) {
                $block_class = 'last-child';
              } ?>

              <a href="#" class="grid-cat <?php echo $block_class; ?>" data-filter=".<?php echo $custom_term->slug; ?>"><?php echo $custom_term->name; ?></a>
            <?php $num++;
            }
            ?>
          </div>
          <!--category-wrapper end-->
        </div>
        <!----projects-catagory---->

        <div class="group-wrapper isotope-grid">
          <?php
          $num = 1;
          $projects = new WP_Query(array(
            'post_type' => 'build_projects',
            'posts_per_page' => -1,
            'order' => 'DESC',
            'orderby' => 'date'
          ));

          $j = 0;

          $cat_count = $custom_terms;
          if ($projects->have_posts()) :
            while ($projects->have_posts()) : $projects->the_post();
              $postid = get_the_ID();

          ?>

              <?php $mainImg = wp_get_attachment_url(get_post_thumbnail_id($postid)); ?>

              <?php
              $project_class;
              $term_slug;
              $terms = get_the_terms($post->ID, array('project_category'));
              // init counter
              //var_dump( $terms );
              $i = 1;
              foreach ($terms as $term) {
                $term_link = get_term_link($term, array('project_category'));
                if (is_wp_error($term_link))
                  continue;
                $project_class .= ' ' . $term->slug;
                $term_slug = $term->slug;
                $i++;
              }

              ?> <?php $project_class .= (($num % 3) == 0) ? 'last-child' : ''; ?>






              <a href="<?php echo $mainImg; ?>" data-fancybox-trigger="<?php echo $j ?>" data-title="<?php echo the_post_thumbnail_caption();  ?>" class="isotope-item <?php echo $term->slug; ?> fancyboxLauncher">
                <div class="isotope-item-inner">
                  <div class="block-back" style="background-image:url('<?php echo $mainImg; ?>');">
                    <div class="block-info">

                      <h3><?php the_title(); ?></h3>

                    </div>
                  </div>


                </div>
              </a>

              <?php if (have_rows('add_images')) : $span;
                $n = 0; ?>
                <div style='display:none'>
                  <?php while (have_rows('add_images')) : the_row();

                    $image = get_sub_field('add_your_images');







                    if (!empty($image['caption'])) {
                      $image_caption = $image['caption'];
                    } else {
                      $image_caption = "&nbsp";
                    }


                  ?>



                    <?php /*<a id="<?php echo $n ?>" data-caption="<?php echo $image_caption ?>" href="<?php echo$image['url'] ?>" data-fancybox="<?php echo $j ?>" class="isotope-item <?php echo $term->slug ?>">					  
					<div class='isotope-item-inner'>
					
                  <div class='block-back' style='background-image:url("<?php echo $image['url']?>");'>
                    <div class='block-info'> 
                    <h3 data-fancybox-trigger="<?php echo $j ?>"><?php echo $image_caption ?></h3>
                  	</div>
                  </div>

                  
               	</div>
					
				  </a>*/ ?>






                    <a class='fancybox' id="<?php echo $n ?>" data-caption="<?php echo $image_caption ?>" href="<?php echo $image['url'] ?>" data-fancybox="<?php echo $j ?>" data-thumb="<?php echo $image['url'] ?>" />

                    </a>





                  <?php $n++;
                  endwhile; ?>
                </div>
              <?php endif; ?>



          <?php
              $j++;
              $k++;
            endwhile;
          else :
            echo 'no data!';

          endif;
          wp_reset_postdata();
          wp_reset_query();
          ?>

        </div>



        <div class="pagination">
          <?php echo  $catogry_items . '</div>';  ?>
        </div>

        <div class="grid" onload="grid()">
          <?php echo $gallery_items; ?>
        </div>
      </div>
      <!--inner content wrapper end-->


    <?php endwhile;
else : ?>
    <p><?php _e('Sorry, no records matched your criteria.'); ?></p>
  <?php endif; ?>

  <?php get_footer(); ?>