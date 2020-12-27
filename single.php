<?php
$post_id = get_the_ID();
$galleryImage = get_post_meta($post_id, "wpcf-product-gallery-image");

get_header(); ?>

<main class="main">
    <?php get_template_part('components/breadcrumbs/breadcrumbs'); ?>
    <div class="container">
        <h1 class="title title_single"><?= the_title(); ?></h1>
        <div class="single-page__images-wrapper">
            <a href="<?= the_post_thumbnail_url() ?>" data-lightbox="product" class="single-page__thumbnail-block">
                <img src="<?= the_post_thumbnail_url() ?>" alt="thumbnail" class="thumbnail-block__image">
            </a>
            <?php if (!empty($galleryImage[0])) { ?>
            <div class="single-page__gallery">
                <div class="gallery-wrapper">
                <?php foreach ($galleryImage as $image) { ?>
                    <a href="<?= $image ?>" data-lightbox="product" class="gallery-block">
                        <img src="<?= $image ?>" alt="picture" class="gallery-block__image">
                    </a>
                <?php } ?>
                </div>
                </div>
            </div>
            <?php } ?>
        <div class="single-page__subtitle-block">
            <?= the_content(); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
