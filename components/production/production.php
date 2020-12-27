<?php

$query = new WP_Query;

if (is_front_page()) {
    $products = $query->query( array(
        'post_type' => 'post',
        'cat' => '4',
        'posts_per_page' => '4',
) );
} else {
    $products = $query->query( array(
        'post_type' => 'post',
        'cat' => '4',
        'posts_per_page' => '-1',
    ) );
};


?>
<section class="section section_production <?php if (!is_front_page()) { ?>section_single<?php } ?>">
    <?php if (is_front_page()) { ?>
    <div class="container">
            <h2 class="title title_production">Our production</h2>
        <?php } ?>
        <?php if (!empty($products)) { ?>
        <div class="production__grid">
            <?php foreach ($products as $product) { ?>
            <a href="<?= get_permalink($product); ?>" class="grid-item <?php if (is_archive()) { ?>grid-item_archive<?php } ?>">
                <div class="grid-item__overlay">
                    <h6 class="grid-item__title <?php if (is_front_page()) { ?>grid-item__title_front<?php } ?>"><?= get_the_title($product); ?></h6>
                    <p class="grid-item__subtitle <?php if (is_front_page()) { ?>grid-item__subtitle_front<?php } ?>"><?= get_post_meta($product->ID, "wpcf-product-short-description", true); ?></p>
                </div>
                <img src="<?= get_the_post_thumbnail_url($product) ?>" alt="picture" class="grid-item__image">
            </a>
            <?php } ?>
        </div>
        <?php } ?>
        <?php if (is_front_page()) { ?>
            <a href="<?= get_category_link(4); ?>" class="button button_production">all technologies</a>
    </div>
    <?php } ?>
    <?php if (is_front_page()) { ?>
    <img src="<?= get_template_directory_uri() ?>/img/dest/cog-grey.png" alt="picture" class="production__cog_large">
    <img src="<?= get_template_directory_uri() ?>/img/dest/cog-grey.png" alt="picture" class="production__cog_small">
    <?php } ?>
</section>