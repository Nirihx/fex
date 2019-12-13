<section class="section galerie">
    <div class="container">
        <div class="row">
            <div class="text-center col-12">
                <h1 class="ttr">
                    <small class="small">Galerie</small>
                    Photo
                </h1>
            </div>
            <div class="col-12">
                <div class="galeriePhoto">

                    <?php $loop = new WP_Query( array( 'post_type' => 'galerie', 'posts_per_page' => '10' ) ); ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <?php if( have_rows('galerie_photo') ): ?>
                        
                            <?php while( have_rows('galerie_photo') ): the_row(); 
                                // vars
                                $largeImg = get_sub_field('large_image');
                                // $vignetteImg = get_sub_field('vignette_image');
                                $captionImg = get_sub_field('caption_image');
                            ?>
                                <div class="items">
                                    <a href="<?php echo esc_url($largeImg['url']); ?>" data-fancybox="images" data-caption="<?php echo $captionImg; ?>">
                                        <img src="<?php echo esc_url($largeImg['url']); ?>" alt="" />
                                    </a>
                                </div>
                            
                            <?php endwhile; ?>
                        <?php endif; ?>  


                    <?php endwhile; wp_reset_query(); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end service -->
