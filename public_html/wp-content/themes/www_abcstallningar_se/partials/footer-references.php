<div class="container">	
	<div class="row">

		<div class="col-md-12">
			<div class="bottom-ref-title">
			    <?php
			        

			        if (is_page('huvudkontor')) {
					    $category_name = 'stockholm';
					    $category_ID = get_cat_ID( $category_name );
					    $category_link = get_category_link( $category_ID );
					    $category_name = 'Referenser ' . $category_name;
					} elseif (is_page('borlange')) {
						$category_name = 'borlänge';
				        $category_ID = get_cat_ID( $category_name );
				        $category_link = get_category_link( $category_ID );
				        $category_name = 'Referenser ' . $category_name;
					} elseif (is_page('stockholm')) {
						$category_name = 'stockholm';
				        $category_ID = get_cat_ID( $category_name );
				        $category_link = get_category_link( $category_ID );
				        $category_name = 'Referenser ' . $category_name;
					} elseif (is_page('vasteras')) {
						$category_name = 'västerås';
				        $category_ID = get_cat_ID( $category_name );
				        $category_link = get_category_link( $category_ID );
				        $category_name = 'Referenser ' . $category_name;
					} elseif (is_page('gavle')) {
						$category_name = 'gävle';
				        $category_ID = get_cat_ID( $category_name );
				        $category_link = get_category_link( $category_ID );
				        $category_name = 'Referenser ' . $category_name;
					} else {
						$category_name = 'Referenser';
				        $category_ID = get_cat_ID( $category_name );
				        $category_link = get_category_link( $category_ID );
					} ;


			    ?>
			    <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $category_name ?>"><?php echo $category_name ?></a>
		    </div>
		</div>

		          
		<?php
		$args = array( 'posts_per_page' => 4, 'category' => $category_ID, 'orderby' => 'rand' );
		$postslist = get_posts( $args );          

		foreach ( $postslist as $post ) :
		    setup_postdata( $post );
		    $thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); 			
			?>		    
		    
		        <div class="col-sm-6 col-md-3">
			        <div class="bottom-single-ref">
			        	<div class="ref-img-holder" style="background-image: url('<?php echo $thumb_url[0]; ?>')"></div>    
			            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>            	
			        	<?php the_excerpt(); ?>
			            <a class="btn btn-danger" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Läs mer »</a>
			        </div>
		        </div>
		  
		<?php
		endforeach; 
		wp_reset_postdata();
		?>

	</div>
</div>	