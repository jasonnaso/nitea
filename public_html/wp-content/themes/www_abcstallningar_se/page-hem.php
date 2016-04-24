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

<?php $hem_system_list_rep  = get_field('hem_system_list_rep')?>

<?php $hem_project_title    = get_field('hem_project_title')?>
<?php $hem_project_rep      = get_field('hem_project_rep')?>

<?php $hem_announcement_one = get_field('hem_announcement_one')?>
<?php $hem_announcement_two = get_field('hem_announcement_two')?>

<?php $hem_parallax_building_image   = get_field('hem_parallax_building_image')?>

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
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
        
            <div class="link-box">
                <?php if ($hem_puffar_list_rep) : ?>
                    <?php foreach ($hem_puffar_list_rep as $k => $r) : ?>
                        <div class="col-md-3 col-sm-12 links">
                            <div class="links-title"><?php echo $r['title']; ?></div>
                            <p class="links-info"><?php echo $r['information']; ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?> 
            </div>
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
                <?php $x = 1; ?>
                <?php if ($hem_reference_list_rep) : ?>
                    <?php foreach ($hem_reference_list_rep as $k => $r) : ?>
                        
                        <div class="col-xs-3">
                            <img class="img-responsive" src="<?php echo $r['logo']['url']; ?>" alt="ABC Image">
                        </div>
                        
                        <?php if ($x % 3 ==  0) :  ?>
                            <?php echo "<div class='clearfix'></div>"; ?>
                            
                        <?php endif; ?>
                        <?php $x++; ?>

                    <?php endforeach; ?>
                <?php endif; ?> 
            </div>
        </div>
    </div>

    <!-- Parallax-IT -->
    
        <div class="paralax-IT-image" style="background-image: url('<?php echo $hem_parallax_image["url"]; ?>');">

            <div class="paralax-IT-title">
                <?php echo $hem_parallax_title ?>
            </div>

            <div class="paralax-IT-system">
                <div class="col-md-10 col-md-offset-1">
                    <div class="system-box">
                        <div class="col-sm-2 col-xs-4"><i class="fa fa-quote-right fa-5x" aria-hidden="true"></i><br /><span class="system-title">Offert</span></div>
                        <div class="col-sm-2 col-xs-4"><i class="fa fa-file-text fa-5x" aria-hidden="true"></i><br /><span class="system-title">Order</span></div>
                        <div class="col-sm-2 col-xs-4"><i class="fa fa-pencil fa-5x" aria-hidden="true"></i><br /><span class="system-title">Dokumentation</span></div>
                        <div class="col-sm-2 col-xs-4"><i class="fa fa-calendar fa-5x" aria-hidden="true"></i><br /><span class="system-title">Planering</span></div>
                        <div class="col-sm-2 col-xs-4"><i class="fa fa-cogs fa-5x" aria-hidden="true"></i><br /><span class="system-title">Montage</span></div>
                        <div class="col-sm-2 col-xs-4"><i class="fa fa-check fa-5x" aria-hidden="true"></i><br /><span class="system-title">Slutbesiktning</span></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row project-box">
            <div class="col-md-10 col-md-offset-1">
                <div class="project_box">
                    <?php if ($hem_project_rep) : ?>
                        <?php foreach ($hem_project_rep as $k => $r) : ?>
                            <div class="col-md-4 col-sm-12">
                                <img class="img-responsive" src="<?php echo $r['image']['url']; ?>" alt="ABC Image">
                                
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?> 
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="announcement-box">
                    <?php echo $hem_announcement_one ."<br />" ?>
                    <?php echo $hem_announcement_two ?>
                </div>
            </div>
        </div>

        <!-- Parallax-IT -->
            <div class="row">
                <div class="paralax-building-image" style="background-image: url('<?php echo $hem_parallax_building_image["url"]; ?>');">

                    <div class="paralax-building-title">
                        <!-- <?php echo $hem_parallax_title ?> -->
                    </div>

                   <div class="paralax-building-form">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="abc-form">
                               
                                    <div class="container">

                                        <div class="col-sm-12 title">
                                            <?php echo $hem_contact_box_title  ?>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="col-sm-11 col-sm-offset-1">
                                                <img src="<?php echo $hem_contact_box_image['url']; ?>" class="image center-block" alt="">
                                            </div>
                                            <div class="col-sm-9 col-sm-offset-2">
                                                <div class="text text-center">
                                                    <?php echo $hem_contact_box_info  ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="col-sm-6 col-md-4">
                                            <form id="form-contact" name="form_contact" class="form-contact" method="POST" action="<?php echo str_replace('?send', '', $_SERVER['REQUEST_URI']); ?>?send">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="form-contact-name" placeholder="Namn" name="form_contact_name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="form-contact-email" placeholder="E-post" name="form_contact_email">

                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="3" placeholder="Meddelande" id="form-contact-message" name="form_contact_message"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-default skicka">Skicka</button>
                                                <input type="hidden" name="form_contact_uri" id="form-contact-uri" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
                                            </form>
                                        </div>
                                    </div>
                              
                           </div>
                       </div>
                   </div>
               </div>
            </div>

        
    <?php get_template_part('partials/footer-links'); ?>
<?php get_footer(); ?>
