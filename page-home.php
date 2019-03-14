<?php get_header(); /* Template Name: Home Page */ ?>

  <div id="page-home">
     
    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
          endwhile; else: ?>
      <?php endif; ?>
    </div> <!-- /.container -->
  
  </div>  <!-- / #page-home -->
<?php get_footer(); ?>