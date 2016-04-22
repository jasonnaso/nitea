<?php 
/*
Template Name: Hem
*/
get_header(); ?>
<link rel="stylesheet" type="text/css" href="wp-content/themes/www_abcstallningar_se/custom-styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

<?php get_template_part('partials/custom-header'); ?>
<?php get_template_part('template-part', 'topnav'); ?>
<!-- Hero -->
<?php $hem_hero_image       = get_field("hem_hero_image"); ?>
<?php $hem_hero_title       = get_field("hem_hero_title"); ?>
<?php $hem_hero_btn_image   = get_field("hem_hero_btn_image") ?>
<!-- Puffar and video -->
<?php $hem_puffar_list_rep  = get_field("hem_puffar_list_rep"); ?>
<?php $hem_video_title      = get_field("hem_video_title") ?>
<?php $hem_video_button_img = get_field("hem_video_button_img"); ?>
<!-- Reference Box -->
<?php $hem_reference_title  = get_field('hem_reference_title') ?>
<?php $hem_reference_list_rep = get_field('hem_reference_list') ?>

<?php $hem_parallax_title   = get_field('hem_parallax_title')?>
<?php $hem_parallax_image   = get_field('hem_parallax_image')?>

<?php $hem_map_image        = get_field('hem_map_image') ?>


    <!-- Hero Unit -->
    <div class="hero">
        <div class="hero-title">
            <?php echo $hem_hero_title ?>
        </div>
        <div class="hero-image">
            <img class="img-responsive hero-image" src="<?php echo $hem_hero_image['url']; ?>" alt="ABC Image">
        </div>
        <a href="">
            <div class="hero-btns one">
                <img class="img-responsive hero-btn-image" src="<?php echo $hem_hero_btn_image['url']; ?>" alt="ABC Button Image">
            </div>
        </a>
    </div>

    <!-- Puffar / Video-->
    <div class="col-md-10 col-md-offset-1">
        <div class="link-box">
            <?php if ($hem_puffar_list_rep) : ?>
                <?php foreach ($hem_puffar_list_rep as $k => $r) : ?>
                    <a href="#" class="col-md-3 links">
                        <div class="links-title"><?php echo $r['title'] ?></div>
                        <p class="links-info"><?php echo $r['information']; ?></p>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?> 
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="col-sm-6">
            <div class="video-title">
                <?php echo $hem_video_title ?>
            </div>
        </div>
        <div class="col-md-6">
            <a href="" ><img class="img-responsive video-btn-image" src="<?php echo $hem_video_button_img['url']; ?>" alt="ABC Image">
                </a>
        </div>
    </div>

    <!-- Map Box -->
    <div class="map">
        <img class="img-responsive map-image" src="<?php echo $hem_map_image['url']; ?>" alt="ABC Image">
    </div>

    <!-- Reference Box -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="reference-box">
                <div class="reference-title"><?php echo $hem_reference_title ?></div>

                <?php if ($hem_reference_list_rep) : ?>
                    <?php foreach ($hem_reference_list_rep as $k => $r) : ?>
                        <div class="col-md-3">
                            <img class="img-responsive" src="<?php echo $r['logo']['url']; ?>" alt="ABC Image">
                        </div>
                        
                    <?php endforeach; ?>
                <?php endif; ?> 
            </div>
        </div>
    </div>

    <!-- Parallax -->
    <div class="">
        <img class="img-responsive parallax" src="<?php echo $hem_parallax_image['url']; ?>" alt="Business Flow Image">
    </div> 
    <div class="hem_parallax_title">
        <?php echo $hem_parallax_title ?>
    </div>






           
   















<?php get_template_part('partials/footer-links'); ?>
<?php get_footer(); ?>
