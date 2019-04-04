</main>
  <footer>
    
  	<div class="container">

      <a class="cta-button" target="_blank" href="<?php echo get_field('newsletter_signup_url', 'options'); ?>">Newsletter Signup</a>

      <div class="social-media">
        <a href="<?php echo get_field('facebook_url', 'options'); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href="<?php echo get_field('twitter_url', 'options'); ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
        <a href="<?php echo get_field('instagram_url', 'options'); ?>" target="_blank"><i class="fab fa-instagram"></i></i></a>
      </div>
		<div class="title">HOOSIERS OUTRUN CANCER</div>
	  	<div class="copyright">&copy; <?php echo get_field('footer_text','options'); ?></div>
  	</div> <!-- /.container -->
  </footer>
  <?php wp_footer(); ?>
  <div class="footer-brand clearfix">
  	<div class="item"></div>
  	<div class="item"></div>
  	<div class="item"></div>
  	<div class="item"></div>
  </div>
</body>
</html>