<!-- Header -->
<?php get_header(); ?>

  <div class="container mx-auto">
    <div class="row py-2">
      <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
        <h3 class="mt-4"> Search Results </h3>
        <?php if ( have_posts() ) { ?>
          <h2> <?php echo single_cat_title(); ?> </h2>

          <?php get_template_part('includes/section','archive'); ?>

          <div class="py-3 text-center">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <?php previous_posts_link(); ?>
            <?php next_posts_link();  ?>
            </div>
          </div>

      <?php } else { ?>
          <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
          <h4 class="mt-5">Sorry, we could not find anything that matched your search term. <br> Try searching again.</h4>
            <div class="col-10 col-xs-10 col-sm-10 col-md-10 col-lg-5 col-xl-5">
              <?php get_search_form(); ?>
            </div>
          </div>
      <?php } ?>
      </div>
      <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 mb-4">
        <div id="blog-sidebar" class="widget card px-3 py-3">
          <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
            <?php dynamic_sidebar( 'blog-sidebar' ); ?>
          <?php else : ?>
          <?php endif; ?>
        </div>
      </div>
  </div>
</div>
<!-- Footer -->
<?php get_footer(); ?>
