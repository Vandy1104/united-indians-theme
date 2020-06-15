<div class="row">
<?php
if (have_posts()) : ?>
  <div class="col-lg-9">
    <?php
  while (have_posts()):
    the_post();
  ?>


    <div class="card mt-5 mb-5 border-dark rounded-top">
      <div class="card-body">

        <!-- featured image -->
        <?php if(has_post_thumbnail()): ?>
            <!-- This has a featured image -->
            <div>
              <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="mb-4 img-fluid img-thumbnail">
            </div>
      <?php endif; ?>

    <h3 class="pb-3"> <?php the_title(); ?>   </h3>

    <?php
    the_excerpt();//cut of some portion of text
    ?>

    <a href="<?php the_permalink(); ?>" class="text-info"> Read more </a>
  </div> <!--card-body-->

</div> <!--card-->



<?php endwhile;?>
</div>
<?php
 else:
endif;

?>

<div class="col-lg-3 pt-4">

  <?php if(is_active_sidebar('blog-sidebar')) :?>
    <?php dynamic_sidebar('blog-sidebar'); ?>

  <?php endif; ?>
</div>
</div>
