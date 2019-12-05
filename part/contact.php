<section id="contact" class="section contact">
    <div class="container">
        <div class="row">
            <div class="text-center col-12">
                <h1 class="ttr">
                    <small class="small">Nous</small>
                    Contacter
                </h1>
            </div>
            <div class="col-12">
                <div class="content">

                <?php $loop = new WP_Query( array( 'post_type' => 'contact', 'posts_per_page' => '1' ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="adresse">
                        <?php if( get_field('titre_contact') ): ?>
                            <h2 class="sttr"><?php the_field('titre_contact'); ?></h2>
                        <?php endif; ?>

                        <i class="fa fa-map-marker"></i>
                        <?php if( get_field('adresse_contact') ): ?>
                            <p class="para"><?php the_field('adresse_contact'); ?></p>
                        <?php endif; ?>

                        <i class="fa fa-phone"></i>
                        <?php if( have_rows('phone_contact') ): ?>
                            <table class="table">
                                <?php while( have_rows('phone_contact') ): the_row(); 
                                    // vars
                                    $numContact = get_sub_field('num_phone');
                                ?>
                                <p class="para"><?php echo $numContact; ?></p>
                                
                                <?php endwhile; ?>
                            </table>
                        <?php endif; ?>

                        <i class="fa fa-at"></i>
                        <?php if( get_field('mail_contact') ): ?>
                            <p class="para"><?php the_field('mail_contact'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="form">
                        <form action="">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input class="form-control" type="text" name="" placeholder="Votre nom">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                </div>
                                <input class="form-control" type="mail" name="" placeholder="Votre email">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-commenting-o"></i></span>
                                </div>
                                <textarea class="form-control" name="" id="" placeholder="Votre message"></textarea>
                            </div>
                            <div class="text-right">
                                <input type="submit" class="btn btn-secondary" value="Envoyer">
                            </div>
                        </form>
                    </div>

                <?php endwhile; wp_reset_query(); ?>

                </div> 
            </div>
        </div>
    </div>
</section>