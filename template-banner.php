<?php /* Template Name: Banner Page */ ?>

<!-- Header -->
<?php get_header(); ?>
<?php if(has_header_image()): ?>
  <div class="px-0 py-0 mt-0 mb-3">
    <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>);">
    </div>
  </div>
<?php endif; ?>

<section class="container mx-auto mx-3 my-3 mb-5">

  <div class="text-box-l mx-auto">
    <h2 class="myHeadings mb-3 mt-2"> <?php the_title(); ?></h2>
    <?php get_template_part('includes/section','content'); ?>
  </div>

</section>

<!-- Footer -->
<?php get_footer(); ?>
