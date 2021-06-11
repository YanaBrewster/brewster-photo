<!-- Header -->
<?php get_header(); ?>

<section class="container mx-2 my-2 mb-5">

  <h2 class="text-center myHeadings my-3"> <?php the_title(); ?> </h2>

  <?php get_template_part('includes/section','content'); ?>

</section>

<!-- Footer -->
<?php get_footer(); ?>
