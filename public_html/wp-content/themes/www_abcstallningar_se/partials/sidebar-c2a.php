
<?php if (get_field('c2a_image')): ?>

<div class="sidebar-c2a-container leftbox">

	<div class="sidebar-c2a-bg" style="background-image:url('<?php the_field('c2a_image'); ?>');"></div>

	<div class="sidebar-c2a" style="background-image:url('<?php bloginfo('template_directory'); ?>/img/overlay.png');">		
	
		<div class="c2a-mess">	
		 	<span><?php the_field('c2a_meddelande'); ?>
		</div>

		<button class="btn btn-primary btn-lg c2a-knapp" data-toggle="modal" data-target=".c2aModal">
			<span class="hero-button"><?php the_field('c2a_knapp'); ?></span>
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

		<div class="clear"></div>	

	</div>

</div>
	
<?php endif ?>



<?php if (get_field('c2a_image_exp')): ?>

<div class="sidebar-c2a-container rightbox">

	<div class="sidebar-c2a-bg" style="background-image:url('<?php the_field('c2a_image_exp'); ?>');"></div>

	<div class="sidebar-c2a" style="background-image:url('<?php bloginfo('template_directory'); ?>/img/overlay.png');">		
	
		<div class="c2a-mess">	
		 	<span><?php the_field('c2a_meddelande_exp'); ?>
		</div>

		<button class="btn btn-primary btn-lg c2a-knapp" data-toggle="modal" data-target=".c2aModal-exp">
			<span class="hero-button"><?php the_field('c2a_knapp'); ?></span>
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

		<div class="clear"></div>	

	</div>

</div>
	
<?php endif ?>

