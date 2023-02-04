<header>
    <h1><?php __('H1', 'domain1') ?></h1>
    <h2><?php __('H2', 'domain2') ?></h2>
    <h3><?php __('H3') ?></h3>
</header>

<div>
    <p class="<?php esc_attr_e('attribute1', 'domain1')?>"><?php _e('Echo p', 'domain1') ?></p>
    <p class="<?= esc_attr__('attribute2', 'domain1')?>"><?php _x('Echo context', 'Context.', 'domain1') ?></p>
    <p class="<?php esc_attr_x('attribute3', 'Attribute context.', 'domain1')?>">Text</p>
</div>

<div>
    <?php esc_html_e('<span>e</span>', 'domain1') ?>
    <?= esc_html__('<span>r</span>', 'domain1') ?>
    <?= esc_html_x('<span>x</span>', 'HTML context.', 'domain1') ?>
</div>

<?php

// Code in here
$plural = _n('%s flower', '%s flowers', 1, 'domain1');
$plural2 = _n_noop('%s cup', '%s cups', 'domain1');

$plural_ctx = _nx('%s wall', '%s walls', 1, 'Number of walls.', 'domain1');
$plural_ctx2 = _nx_noop('%s bean', '%s beans', 'Number of beans.', 'domain1');

// Duplicated 
$plural2 = _n_noop('%s flower', '%s flowers', 'domain1');
$plural_ctx = _nx('%s flower', '%s flowers', 1, 'Number of flowers.', 'domain1');

function not_to_include() {
    return __('%s flower', 'domain1');
}

function to_include() {
    return __('last one', 'domain1');
}