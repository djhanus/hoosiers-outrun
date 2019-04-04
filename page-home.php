<?php get_header(); /* Template Name: Home Page */ ?>

  <div id="page-home">

  	<div class="featured-section" style="background-image: url('<?php echo get_field('featured_image') ?>');">
  		<div class="text"><?php echo get_field('featured_text'); ?></div>
  	</div>
     
    <div class="main-container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
          endwhile; else: ?>
      <?php endif; ?>
    </div> <!-- /.main-container -->

    <div class="video-section">
      <div class="embed-container">
        <?php the_field('featured_video'); ?>
      </div>
    </div>

    <div class="race-day">
      
    	<h4>Hoosiers Outrun Cancer - Race Day:</h4>
    	<div class="date">
    		<?php echo get_field('race_day'); ?>
    	</div>

      <?php the_field('countdown_timer'); ?>

    </div>

    <div class="announcements-section">
    	<?php echo get_field('important_info'); ?>
    </div>



    <div class="gallery-section">
    	<h2><?php echo get_field('gallery_title'); ?></h2>
    	<?php 
	        $images = get_field('hoc_gallery');
	        $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

	        if( $images ): ?>
	            <ul>
	                <?php foreach( $images as $image ): ?>
	                    <li>
	                      <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
	                    </li>
	                <?php endforeach; ?>
	            </ul>
      <?php endif; ?>
    </div>
  
  </div>  <!-- / #page-home -->
<?php get_footer(); ?>