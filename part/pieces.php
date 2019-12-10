<section id="pieces" class="section pieces">
	<div class="container">
		<div class="row">
			<div class="text-center col-12">
				<h1 class="ttr">
					<small class="small">Nos</small>
					Pièces
				</h1>
			</div>
       
			<div class="col-12 content">       

			<?php $loop = new WP_Query( array( 'post_type' => 'pieces', 'posts_per_page' => '10' ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php 
					$nomPiece = "piece-";
				?>
				<div class="itemCard">
					<div class="card">
						<div class="card-header">
						<?php 
							$image = get_field('piece_image');
							if( !empty( $image ) ): ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</div>

						<div class="card-body">                        
                            <?php if( get_field('nom_du_piece') ): ?>
                                <h3 class="sttr"><?php the_field('nom_du_piece'); ?></h3>
                            <?php endif; ?>

							
                            <?php if( have_rows('description_piece') ): ?>
                                <table class="table">
                                    <?php while( have_rows('description_piece') ): the_row(); 
                                        // vars
                                        $libeller = get_sub_field('libeller');
                                        $content = get_sub_field('content');
                                    ?>
                                    <tr>
                                        <td><?php echo $libeller; ?></td>
                                        <td><?php echo $content; ?></td>
                                    </tr>
                                    
                                    <?php endwhile; ?>
                                </table>
                            <?php endif; ?>							
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#<?php echo $nomPiece.get_the_ID(); ?>">
								Détails
							</button>
                            <!-- <a href="#" class="btn btn-outline-light"></a> -->
                            <?php if( get_field('prix_du_piece') ): ?>
                                <span class="text-right price"><?php the_field('prix_du_piece'); ?> Ar</span>
                            <?php endif; ?>
						</div>
					</div><!-- end card -->
				<!-- Modal -->
				<div class="modal fade" id="<?php echo $nomPiece.get_the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalPiecesLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						
							<div class="modal-body">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
								<?php 
								$image = get_field('piece_image');
								if( !empty( $image ) ): ?>
									<img class="picPiece" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>

								

								
								<?php if( have_rows('description_piece') ): ?>
									<table class="table table-bordered">
										<tr>
											<th colspan="3">
												<?php if( get_field('nom_du_piece') ): ?>
													<h3 class="sttr"><?php the_field('nom_du_piece'); ?></h3>
												<?php endif; ?>
											</th>
										</tr>
										<?php while( have_rows('description_piece') ): the_row(); 
											// vars
											$libeller = get_sub_field('libeller');
											$content = get_sub_field('content');
										?>
										<tr>
											<td><?php echo $libeller; ?></td>
											<td><?php echo $content; ?></td>
										</tr>
										
										<?php endwhile; ?>
									</table>
								<?php endif; ?>                      
								<div class="modal-footer">
									<?php if( get_field('prix_du_piece') ): ?>
										<span class="price"><?php the_field('prix_du_piece'); ?> Ar</span>
									<?php endif; ?>
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
								</div>
							</div> <!-- end modal-body -->                        

						</div> <!-- end modal-content -->
					</div> <!-- end modal-dialog -->
				</div> <!-- end modal -->
				</div><!-- end itemCard -->

			<?php endwhile; wp_reset_query(); ?>
			
			</div><!-- end content -->
		</div>
	</div>
</section>
<!-- end pieces -->
