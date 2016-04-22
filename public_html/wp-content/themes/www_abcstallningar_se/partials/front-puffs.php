

<div class="container">
	<div class="row">

		<?php if(get_field('front_puffs')): ?>
 
		    <?php while(has_sub_field('front_puffs')): ?>
				
				<div class="col-sm-4 col-md-4">

					<div class="puff-header">
						<h2><a href="<?php the_sub_field('knapp_lank'); ?>"><?php the_sub_field('puff_rubrik'); ?></a></h2>
					</div>

					<div class="puff-container">

				    	<div class="front-puff-bg" style="background-image:url('<?php the_sub_field('puff_image'); ?>');"></div>

						<div class="front-puff" style="background-image:url('<?php bloginfo('template_directory'); ?>/img/overlay.png');">
							
						
							<div class="puff-mess">	
								<?php the_sub_field('puff_meddelande'); ?>
							</div>
							<a class="btn btn-primary btn-lg" href="<?php the_sub_field('knapp_lank'); ?>" title="<?php the_title_attribute(); ?>"><?php the_sub_field('knapp_text'); ?></a> 	
						
							<div class="clear"></div>	
						</div>

					</div>


				</div>	

		    <?php endwhile; ?> 		
		 
		 <?php endif; ?>


	</div>
</div>