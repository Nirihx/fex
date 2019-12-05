<section id="service" class="section service">
	<div class="container">
		<div class="row">
			<div class="text-center col-12">
				<h1 class="ttr">
					<small class="small">Nos</small>
					Services
				</h1>
			</div>
			<div class="col-12">
				<div class="slideService">

					<?php $loop = new WP_Query( array( 'post_type' => 'service', 'posts_per_page' => '10' ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<?php if( have_rows('slide_service') ): ?>
							<?php while( have_rows('slide_service') ): the_row(); 
										// vars
								$imgSlideService = get_sub_field('img_slide_service');
										
								if( !empty( $imgSlideService ) ): ?>
									<div class="item">
										<img src="<?php echo esc_url($imgSlideService['url']); ?>" alt="<?php echo esc_attr($imgSlideService['alt']); ?>" />
									</div>
								<?php endif; ?>

							<?php endwhile; ?>
						<?php endif; ?>

					<?php endwhile; wp_reset_query(); ?>

				</div>
			</div>
		</div>
	</div>
</section>