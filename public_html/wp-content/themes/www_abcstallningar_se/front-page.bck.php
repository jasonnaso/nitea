<?php get_header(); ?>

<?php get_template_part('partials/custom-header'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<?php get_template_part('partials/hero-unit'); ?>
<div class="front-content-full">
    <div class="container">
        <!-- start content container -->
        <div class="row dmbs-content">    

            <div class="dmbs-main front-content col-md-12">

                <div class="col-md-8">

                    <?php // theloop
                    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <h1><?php get_template_part( 'partials/custom-title'); ?></h1>
                        <?php the_content(); ?>

                    <?php endwhile; ?>
                    <?php else: ?>

                        <?php get_404_template(); ?>

                    <?php endif; ?>

                </div>
                <div class="col-md-4">
                    <span class="front-orter" >Vi finns på följande orter:</span>
                    <?php $page = get_page_by_title( 'Kontakt' ); ?>
                    <ul class="front-orter-list">
                        <?php wp_list_pages('child_of='. $page->ID .'&exclude=212&sort_column=post_title&title_li='); ?>
                    </ul>
                </div>

            </div>

        </div>
    <!-- end content container -->
    </div>
</div>

<?php get_template_part('partials/front-puffs'); ?>

<?php get_footer(); ?>
