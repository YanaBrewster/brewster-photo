<!-- Header -->
<?php get_header(); ?>

<?php if(has_header_image()): ?>
  <div class="px-0 py-0 mt-0 mb-3">
    <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>);">
    </div>
  </div>
<?php endif; ?>

<section class="container my-2 mx-2 mt-4 mb-4 mx-auto">

  <div class="row">

    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
      <h2 class="myHeadings"> <?php echo single_cat_title(); ?> </h2>

      <?php get_template_part('includes/section','archive'); ?>

      <?php the_posts_pagination(); ?>

    </div>
    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 mb-4">
      <div id="blog-sidebar" class="widget card px-3 py-2">
        <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'blog-sidebar' ); ?>
        <?php else : ?>
        <?php endif; ?>
      </div>
    </div>

  </div>

</section>

<!-- Footer -->
<?php get_footer(); ?>
