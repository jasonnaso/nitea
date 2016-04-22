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

                <h2 class="page-header"><a href="<?php the_permalink(); ?> "><?php get_template_part('partials/custom-title'); ?></a></h2>
                <?php the_content(); ?>
                <div class="clear"></div>
                <?php wp_link_pages(); ?>
                <?php comments_template(); ?>
            
            <?php endwhile; ?>
            <?php else: ?>

                <?php get_404_template(); ?>

            <?php endif; ?>

            <div class="pagination"><?php pagination('&laquo;', '&raquo;'); ?></div>

        </div>

        <?php //get the right sidebar ?>
        <?php get_sidebar( 'right' ); ?>

    </div>
    <!-- end content container -->
</div>

<?php get_footer(); ?>
