

<?php if( have_rows('bildbank')): ?>

    <?php while( have_rows('bildbank')): the_row();?>
	
		<div class="col-md-12 bildgrupp">

			<h2><?php the_sub_field('bildbank_rubrik'); ?></h2>

			<?php if( have_rows('bildbank_bilder')): ?>
 				
    			<?php while( have_rows('bildbank_bilder')): the_row();?>
					<div class="col-md-4">
						<figure class="bild-figure">
							<a href="<?php the_sub_field('bildbank_bild'); ?>">
								<img class="" src="<?php the_sub_field('bildbank_bild'); ?>" alt="" title="">
							</a>
							<figcaption class="list-info">	
								<p><?php the_sub_field('bild_beskrivning'); ?></p>
							</figcaptio>
						</figure> 
					</div>	
  				<?php endwhile; ?> 		
 
 			<?php endif; ?>

		</div>

    <?php endwhile; ?> 		
 
 <?php endif; ?>
