<?php
$main_slides = new WP_Query;

$mainSlides = $main_slides->query( array(
    'post_type' => 'main-page-slide',
    'orderby' => 'menu_order'
) );
?>

<div class="image-slider swiper-container">
    <div class="image-slider__wrapper swiper-wrapper">
        <?php foreach( $mainSlides as $slide ) { ?>
        <div class="image-slider__slider swiper-slide">
            <img class="image-slider__image" src="<?= get_the_post_thumbnail($slide); ?>" alt="Picture">
            <div class="container container-flex-center">
                <h2 class="image-slider__title"><?= esc_html($slide->post_title); ?></h2>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
</div>