<?php get_header(); /* Template Name: Standard Page w/ CTA */ ?>

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

    <div class="cta-section">
      <div class="container">
        <?php echo get_field('cta_text'); ?>
        <a class="cta-button" href="<?php echo get_field('cta_button_url'); ?>"><?php echo get_field('cta_button_label'); ?></a>
      </div>
    </div> <!-- /.cta-section -->
     
    <div class="main-container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
          endwhile; else: ?>
      <?php endif; ?>
    </div> <!-- /.container -->

    <div class="closing-cta-section" style="background-image: url('<?php echo get_field('closing_cta_image'); ?>');">
      <div class="container">
        <div class="title">
          <?php echo get_field('closing_cta_text'); ?>
        </div>
        <a class="cta-button" target="_blank" href="<?php echo get_field('closing_cta_button_url'); ?>"><?php echo get_field('closing_cta_button_label'); ?></a>
      </div>
    </div> <!-- /.closing-cta-section -->

  
  </div>  <!-- / #page-standard -->
<?php include('sponsors-footer.php');?>
<?php get_footer(); ?>