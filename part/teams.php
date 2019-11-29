<section class="section team">
    <div class="container">
        <div class="row">
            <div class="text-center col-12">
                <h1 class="ttr">
                    <small class="small">Nos</small>
                    équipes
                </h1>
            </div>
            <div class="col-12">
                <div class="content">      

                <?php $loop = new WP_Query( array( 'post_type' => 'equipe', 'posts_per_page' => '10' ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="grid">
                        <div class="avatar">
                            <div class="cadre">
                                <?php 
                                $image = get_field('avatar');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                
                                <div class="infos">
                                    <?php if( get_field('nom_equipe') ): ?>
                                        <h4 class="nom"><?php the_field('nom_equipe'); ?></h4>
                                    <?php endif; ?>
                                    <?php if( get_field('info_equipe') ): ?>
                                        <p class="info"><?php the_field('info_equipe'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end grid -->

                    <?php endwhile; wp_reset_query(); ?>

                </div>
            </div>
        </div>
    </div>
</section>