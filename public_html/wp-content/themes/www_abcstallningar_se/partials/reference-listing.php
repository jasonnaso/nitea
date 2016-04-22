<?php

wp_reset_query();

if (is_page('referenscase')) {
    $category_name = 'Referenser';
    $category_ID = get_cat_ID( $category_name );
};

$args = array('paged' => $paged, 'cat' => $category_ID, 'orderby' => 'date');



// The Query
query_posts( $args );

// The Loop
while ( have_posts() ) : the_post();
    setup_postdata( $post );
    $thumb_id = get_post_thumbnail_id();
    $thumb_url = wp_get_attachment_image_src($thumb_id, false); 
    ?>

    <div class="singel-ref-container">       
       
            <div class="col-sm-5 col-md-5 ref-img hidden-lg hidden-md hidden-sm visible-xs">
                <?php if ($thumb_id) {
                    ?> <img class="listing-img" height="200px" width="300px" src="<?php echo $thumb_url[0]; ?>"> <?php
                    } else {
                        ?> <img class="listing-ghost-img" height="200px" width="300px" src="<?php bloginfo('template_directory'); ?>/img/default-img-post.jpg"> <?php
                    }
                ?>
            </div>
            
            <div class="col-sm-7 col-md-7 ref-text">
                <span><?php the_time('l, j F, Y') ?></span>
                <h2><a href="<?php the_permalink(); ?>"><?php get_template_part('partials/custom-title'); ?></a></h2> 
                <?php the_excerpt(); ?> 
                <a class="btn" href="<?php the_permalink(); ?>">Läs mer »</a>
                <div class="clear"></div>
            </div>

            <div class="col-sm-5 col-md-5 ref-img hidden-xs">
                <a href="<?php the_permalink(); ?> ">
                    <?php if ($thumb_id) {                        
                        ?>  <div class="listing-ref-holder" style="background-image: url('<?php echo $thumb_url[0]; ?>')"></div>
                             <?php
                        } else {
                            ?> <img class="listing-ghost-img" height="200px" width="300px" src="<?php bloginfo('stylesheet_directory'); ?>/img/social-share.png"> <?php
                        }
                    ?>
                </a>
            </div> 

            <div class="clear"></div>      
        
    </div>

    <?php
endwhile;
?>

<div class="pagination"><?php pagination('&laquo;  Föregående', 'Nästa  &raquo;'); ?></div>

<?php wp_reset_query(); ?>