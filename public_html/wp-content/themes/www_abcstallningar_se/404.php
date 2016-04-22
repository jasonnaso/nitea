<?php get_header(); ?>

<?php get_template_part('partials/custom-header'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<div class="container">
    <!-- start content container -->
    <div class="row">   

        <div class="col-md-12 breadcrumbs">     
            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            } ?>
        </div>   

        <div class="col-md-12 the-404-content">
            <h1><?php _e('Sidan du söker finns inte!','devdmbootstrap3'); ?></h1>
            <h3>Navigera med hjälp av huvudmenyn eller prova en sökning i top-menyn.</h3>
        </div> 

    </div>
    <!-- end content container -->
</div>

<?php get_footer(); ?>