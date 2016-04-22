

<?php if( have_rows('monterings_lista')): ?>
	
    <?php while( have_rows('monterings_lista')): the_row();?>
	
		<div class="pdf-container">
			<span class="mont-title"><?php the_sub_field('mont_title'); ?> </span>
			<a class="btn btn-success pdf-link" href="<?php the_sub_field('mont_pdf'); ?>" target="_blank">
			    <img src="<?php bloginfo('template_directory'); ?>/img/pdf-icon.png" alt="">
			    <span>Läs mer »</span>
		    </a>
		</div>

    <?php endwhile; ?> 		
 
 <?php endif; ?>