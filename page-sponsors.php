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

    <div class="sponsors-section-large">
      <?php 
        $images_L = get_field('sponsors_large');
        $size_L = 'medium'; // (thumbnail, medium, large, full or custom size)

        if( $images_L ): ?>
            <ul>
                <?php foreach( $images_L as $image_L ): ?>
                    <li class="large">
                      <?php echo wp_get_attachment_image( $image_L['ID'], $size ); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
      <?php endif; ?>
    </div> <!-- /.sponsors-section -->



    <div class="sponsors-section-medium">
      <?php 
        $images_M = get_field('sponsors_medium');
        $size_M = 'medium'; // (thumbnail, medium, large, full or custom size)

        if( $images_M ): ?>
            <ul>
                <?php foreach( $images_M as $image_M ): ?>
                    <li class="medium">
                      <?php echo wp_get_attachment_image( $image_M['ID'], $size ); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
      <?php endif; ?>
    </div> <!-- /.sponsors-section -->



    <div class="sponsors-section-small">
      <?php 
        $images_S = get_field('sponsors_small');
        $size_S = 'medium'; // (thumbnail, medium, large, full or custom size)

        if( $images_S ): ?>
            <ul>
                <?php foreach( $images_S as $image_S ): ?>
                    <li class="small">
                      <?php echo wp_get_attachment_image( $image_S['ID'], $size ); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
      <?php endif; ?>
    </div> <!-- /.sponsors-section -->



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