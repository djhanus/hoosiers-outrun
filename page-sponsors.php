<?php get_header(); /* Template Name: Sponsors */ ?>

  <div id="page-standard">

    <div class="intro-section">
      <div class="contained">
        <div class="photo-container">
          <div class="photo" style="background-image: url('<?php echo get_field('intro_photo'); ?>');"></div>
        </div>

        <div class="text-container">
          <?php echo get_field('intro_text'); ?>
        </div>
      </div>
    </div> <!-- /.intro-section -->

    <div class="sponsors-logos">
      <img src="<?php echo get_field('sponsors_logos'); ?>" />
    </div> <!-- /.sponsors-logos -->

    <div class="sponsors-list">
      <?php echo get_field('sponsors_list'); ?>
    </div>

    <div class="main-container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
          endwhile; else: ?>
      <?php endif; ?>
    </div> <!-- /.container -->
  
  </div>  <!-- / #page-standard -->
<?php get_footer(); ?>