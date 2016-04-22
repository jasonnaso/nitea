<?php if(is_page('Kontakt')){ ?>
    <div class="contact-adresses-wrapper">
    <p class="adresses-title" ><strong>Våra kontor:</strong></p>
    <?php if(get_field('adress_repeater')): ?>
        <?php while(the_repeater_field('adress_repeater')): ?>
            <div class="col-sm-6 col-md-4 contact-adresses">
                <?php the_sub_field('contact_adresses'); ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="clear"></div>
    </div>
<?php } ?>

