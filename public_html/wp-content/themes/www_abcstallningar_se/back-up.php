This is for the system box repeater try
<?php if ($hem_system_list_rep) : ?>
    <?php foreach ($hem_system_list_rep as $k => $r) : ?>
        <div class="col-md-2">
            <div class="system-logo"><?php echo $r['icon']; ?></div>
            <p class="system-title"><?php echo $r['title']; ?></p>

        </div>
    <?php endforeach; ?>
<?php endif; ?> 