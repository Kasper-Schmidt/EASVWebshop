<?php get_header() ?>

<div class="ting">
        <div class="produktvenstre">
            <?php echo do_shortcode('[wpf-filters id=1]') ?>
        </div>

        <div class="produkthojre">
            <?php echo do_shortcode('[products column="4"]') ?>
        </div>

</div>

<?php get_footer() ?>
