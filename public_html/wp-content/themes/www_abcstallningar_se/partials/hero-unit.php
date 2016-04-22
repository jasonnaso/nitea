
<div class="hero-unit-full">
	<div class="container">
		<div class="row">
			<div class="hero-unit-container">
				<div class="hero-unit">
					<span class="hero-title"><?php the_field('hero_rubrik'); ?></span>
					<span class="hero-bread"><?php the_field('hero_brod'); ?></span>
					

					<!-- Button trigger modal -->
					<button class="btn btn-primary btn-lg front-btn" data-toggle="modal" data-target=".c2aModal">
					  <span class="hero-button"><?php the_field('hero_knapp'); ?></span>
					</button>

					<!-- Modal -->
					<div class="modal fade c2aModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  	<div class="modal-dialog modal-lg">
						    <div class="modal-content">
						    	<div class="modal-wrapper">
								   
								    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>				       
								    

								    <div class="modal-body">
								    	<?php gravity_form(5, true, truw, false, '', true); ?>   
							    </div>
						      	</div>
						    </div>
					  	</div>
					</div>


					<button class="btn btn-primary btn-lg" data-toggle="modal" data-target=".c2aModal-exp">
					  <span class="hero-button"><?php the_field('hero_knapp_exp'); ?></span>
					</button>

					<!-- Modal -->
					<div class="modal fade c2aModal-exp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  	<div class="modal-dialog modal-lg">
						    <div class="modal-content">
						    	<div class="modal-wrapper">
								   
								    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>				       
								    

								    <div class="modal-body">
								    	<?php gravity_form(4, true, truw, false, '', true); ?>   
							    </div>
						      	</div>
						    </div>
					  	</div>
					</div>

				</div>
			</div>	
		</div>
	</div>
</div>