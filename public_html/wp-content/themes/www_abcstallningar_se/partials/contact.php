

<?php if( have_rows('kontaktinfo')): ?>
	<div class="profile-container">
    <?php while( have_rows('kontaktinfo')): the_row();?>		

	    	<div class="col-sm-4 col-md-4">
				
				<?php $profile_id =  get_sub_field('profilbild'); ?>
				<?php echo wp_get_attachment_image( $profile_id, 'profilbild' ); ?>

				<div class="contact-info">
					<h3><?php the_sub_field('profilnamn'); ?></h3>
					<p class="profile-title"><?php echo get_sub_field('profilbefattning'); ?></p>
					<a href="tel:<?php the_sub_field('profiltele'); ?>"><?php the_sub_field('profiltele'); ?></a><br>
					<a href="mailto:<?php the_sub_field('profilmail'); ?>" target="_blank"><?php the_sub_field('profilmail'); ?></a>
				</div>
			</div>

	<?php endwhile; ?> 		
 	</div>

 <?php endif; ?>