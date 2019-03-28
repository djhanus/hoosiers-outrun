<?php get_header(); /* Template Name: Sponsors */ ?>

  <div id="page-standard">

    <?php include('sponsors-footer.php');?>

    <div class="sponsors-section">
      <h3><?php echo get_field('sponsors_title'); ?></h3>
      <?php 
        $images = get_field('sponsors_general');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)

        if( $images ): ?>
            <ul>
                <?php foreach( $images as $image ): ?>
                    <li>
                      <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
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