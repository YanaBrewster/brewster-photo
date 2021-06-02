<section class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">

  <?php
  if (have_posts()) :
    while (have_posts()):
      the_post();
  ?>

      <div class="card mb-3 mt-3">
        <div class="card-body blog-post-bg">

            <?php if(has_post_thumbnail()): ?>

          <div class="text-center">
            <h2 class="myHeadings mt-3"> <?php the_title(); ?></h2>
            <i><p><?php echo get_the_date('F j, Y g:i a'); ?></p></i>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="center-l img-fluid img-thumbnail">
          </div>

            <?php endif; ?>

          <div class="mx-auto mx-5 px-4">

              <?php
              $get_description = get_post(get_post_thumbnail_id())->post_excerpt;
                if(!empty($get_description)){//If description is not empty show the div
                echo '<i><p class="featured_caption py-2">' . $get_description . '</p></i>';
                }
              ?>

              <?php
              the_excerpt();
              ?>

              <div class="text-center">
                <a href="<?php the_permalink(); ?>" class="btn btn-lg btn-success rounded my-4"> Read More </a>
              </div>

          </div>

        </div>
      </div>

  <?php endwhile;
    else:
    endif;
  ?>

</section>
