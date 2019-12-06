<?php $loop = new WP_Query( array( 'post_type' => 'galerie', 'posts_per_page' => '1' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <?php 
        $images = get_field('image_galerie');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if( $images ): ?>
        <ul>
            <?php foreach( $images as $image_id ): ?>
                <li>
                    <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

<?php endwhile; wp_reset_query(); ?>