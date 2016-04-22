<?php
    global $dm_settings;
    if ($dm_settings['left_sidebar'] != 0) : ?>
    <div class="col-md-<?php echo $dm_settings['left_sidebar_width']; ?> dmbs-left">
    	<button class="visible-sm visible-xs sub-menu-btn btn">UNDERMENY<div class="sub-button">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</div>
    	</button> 
        
        <?php get_template_part('partials/cat-menus'); ?>
        <?php dynamic_sidebar( 'Left Sidebar' ); ?>    
      
    </div>
<?php endif; ?>