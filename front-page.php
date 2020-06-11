<?php get_header(); ?>

<?php if(has_header_image()): ?>
    <div class="container-fluid p-0">
        <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>);">

        </div>
    </div>
    <section class="container page-wrap m-auto">

      <div class="row">

        <div class="col-lg-9 text-justify my-3 p-2">
          <h2 class="text-dark display-4"> <?php the_title(); ?>   </h2>
          <div class="text-dark">
          <?php get_template_part('includes/section','content'); ?>
        </div>
        </div>
        <div class="col-lg-3 widget pl-5 mt-5">

      <?php if(is_active_sidebar('page-sidebar')) :?>
        <?php dynamic_sidebar('page-sidebar'); ?>

      <?php endif; ?>
    </div>
  </div>
    </section>
<?php endif; ?>



<?php get_footer(); ?>
