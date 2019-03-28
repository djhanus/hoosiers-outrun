<div class="sponsors-footer">

  <h3>Our Sponsors</h3>
  <?php 
    $images = get_field('sponsors_main', 'options');
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
</div>