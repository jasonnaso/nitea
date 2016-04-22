<?php get_header(); ?>

<?php get_template_part('partials/custom-header'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<div class="container">
    <!-- start content container -->
    <div class="row dmbs-content">

        <div class="col-md-12 breadcrumbs">     
            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            } ?>
        </div>

        <?php //left sidebar ?>
        <?php get_sidebar( 'left' ); ?>

        <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

            <?php // theloop
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if (get_field('header_bild')): ?>
                    <div class="header-image" style="background-image: url('<?php the_field('header_bild'); ?>');"></div>
                <?php endif ?>
                <h1 class="page-header"><?php get_template_part('partials/custom-title');?></h1>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
                <?php comments_template(); ?>

            <?php endwhile; ?>
            <?php else: ?>

                <?php get_404_template(); ?>

            <?php endif; ?>




            <?php get_template_part('partials/contact-adresses'); ?>
            <?php 
                if (is_tree(get_id_by_slug('kontakt'))) {
                    get_template_part('partials/contact');
                }
            ?>
            
            <?php if (is_page('monteringsanvisningar') or is_tree(get_id_by_slug('produkter'))): ?>
                <?php get_template_part('partials/montering'); ?>
            <?php endif ?>  

<?php get_template_part('partials/sidebar-c2a'); ?>          
            
        </div>

        <?php //get the right sidebar ?>
        <?php get_sidebar( 'right' ); ?>

    </div>
    <!-- end content container -->
</div>

<?php get_footer(); ?>
