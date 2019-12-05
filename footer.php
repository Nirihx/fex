            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">

                            <?php $loop = new WP_Query( array( 'post_type' => 'contact', 'posts_per_page' => '1' ) ); ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="conTtr">
                                <h4 class="ttr">Adresse</h4>
                            </div>
                            <?php if( get_field('titre_contact') ): ?>
                                <p class="para"><i class="fa fa-map-marker"></i> <?php the_field('titre_contact'); ?> </p>
                            <?php endif; ?>

                            <?php if( have_rows('phone_contact') ): ?>
                                    <?php while( have_rows('phone_contact') ): the_row(); 
                                        // vars
                                        $numContact = get_sub_field('num_phone');
                                    ?>
                                    <p class="para"><i class="fa fa-phone"></i> <?php echo $numContact; ?></p>                                    
                                    <?php endwhile; ?>
                            <?php endif; ?>

                            <?php if( get_field('mail_contact') ): ?>
                                <p class="para"><i class="fa fa-envelope"></i> <?php the_field('mail_contact'); ?></p>
                            <?php endif; ?>                            

                            <?php endwhile; wp_reset_query(); ?>
                        
                        </div>

                        <div class="col-md-4">

                            <?php $loop = new WP_Query( array( 'post_type' => 'qui-sommes-nous', 'posts_per_page' => '1' ) ); ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="conTtr">
                                <h4 class="ttr">Qui sommes-nous ?</h4>
                            </div>
                            <?php if( get_field('contenue_qui_sommes-nous') ): ?>
                                <p class="para"><?php the_field('contenue_qui_sommes-nous'); ?></p>
                            <?php endif; ?>

                            <?php endwhile; wp_reset_query(); ?>

                        </div>
                        <div class="col-md-4">
                            <div class="conTtr">
                                <h4 class="ttr">Liens rapide</h4>
                            </div>

                            <?php
                                if ( has_nav_menu( 'footer-menu' ) ) : ?>
                                <?php 
                                    wp_nav_menu ( array (
                                        'theme_location' => 'footer-menu' ,
                                        'menu_class' => 'footerNav',
                                    ) ); ?>
                                <?php endif;
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col-12 copyright">
                    <p class="para">&copy; Copyright | Garage SOCIEFA | 2019</p>
                </div>
            </footer>
        </div>
    </div>
    <?php wp_footer(); ?>
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/hc-offcanvas-nav.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
</body>
</html>