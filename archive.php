<?php get_header(); ?>

<!-- <section class="page-wrap"> -->
<div class="blog-container">


  <!-- <div class="row">

    <div class=""> -->

      <h3 class="pt-5 mt-3"> <?php echo single_cat_title(); ?> </h3>
      <?php get_template_part('includes/section','archive'); ?>
      <!-- Pagination Method 1 -->
      <?php previous_posts_link();  ?>
      <?php next_posts_link();  ?>

</div>
<!-- </section> -->
<?php get_footer(); ?>
