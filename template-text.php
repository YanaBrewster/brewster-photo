<?php /* Template Name: Text Page */ ?>

<!-- Header -->
<?php get_header(); ?>

<section class="container mx-auto mx-3 my-3 mb-5">

  <div class="text-box-l mx-auto">
    <h2 class="myHeadings mb-3 mt-2 text-center"> <?php the_title(); ?></h2>
    <?php get_template_part('includes/section','content'); ?>
  </div>

</section>

<!-- Footer -->
<?php get_footer(); ?>
