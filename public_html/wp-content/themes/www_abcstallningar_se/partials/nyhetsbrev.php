

<?php if( have_rows('nyhetsbrev_grupp')): ?>
	
    <?php while( have_rows('nyhetsbrev_grupp')): the_row();?>
	
		<section class="col-md-12 news-group">

		<h3><?php the_sub_field('nyhetsgrupp_rubrik'); ?></h3>

			<?php if( have_rows('nyhetsbrev')): ?>
 				
 				<ul class="news-list">

	    			<?php while( have_rows('nyhetsbrev')): the_row();?>					
							
					    <li><a href="<?php the_sub_field('nyhetsbrev_lank'); ?>"><?php the_sub_field('nyhetsbrev_namn'); ?></a></li>
					    	
					<?php endwhile; ?>

  				</ul>	
 
 			<?php endif; ?>

		</section>

    <?php endwhile; ?> 		
 
 <?php endif; ?>

