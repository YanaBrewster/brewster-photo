<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
    ?>

  <!-- Get the date -->
  <p class="text-center">
  <?php  echo get_the_date('F j, Y g:i a');?>
  </p>

<section class="container my-2 mx-2 mt-4 mb-4 mx-auto">
  <div class="row">
    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pb-4">
      <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="center-l img-fluid img-thumbnail">
      <?php
      the_content();
      ?>
      <?php
      $fname = get_the_author_meta('first_name');
      $lname = get_the_author_meta('last_name');
      ?>

      <i><p class="mt-5"> <?php echo 'Posted by ' . $fname . ' ' . $lname; ?> </p></i>

      <?php the_tags( '<p class="pt-4"><b>Tags:</b> ', ', ', '<br /></p>'); ?>

      <p><b> Categories: <?php the_category(', ') ?></b></p>
    </div>

    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex justify-content-start">
    <?php previous_post_link(); ?>
    </div>

    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex justify-content-end">
    <?php next_post_link(); ?>
    </div>

      <?php
    endwhile;
    else:
    endif;
    ?>

  </div>
</section>
