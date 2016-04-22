<?php
    if (in_category('referenser')) { ?>

        <aside class="cat-menu-container">
            <h3 class="ancestor-title">
                <a href="<?php bloginfo( 'url' ); ?>/referenser/">REFERENSER</a>
            </h3>
            <?php query_posts('category_name=referenser'); ?>
            <ul class="cat-menu">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </aside>

        <?php wp_reset_query(); ?>
       
<?php }
?>

<?php
    if (in_category('nyheter')) { ?>

        <aside class="cat-menu-container">
            <h3 class="ancestor-title">
                <a href="<?php bloginfo( 'url' ); ?>/nyheter/">NYHETER</a>
            </h3>
            <?php query_posts('category_name=nyheter'); ?>
            <ul class="cat-menu">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </aside>
       
        <?php wp_reset_query(); ?>

<?php }
?>

