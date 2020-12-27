<?php
    $post_id = get_the_ID();
    $title = get_post_meta($post_id, "wpcf-certificates-section-title", true);
    $description = get_post_meta($post_id, "wpcf-certificates-section-description", true);
?>

<section class="section section_certificates">
    <?php if (is_front_page()) { ?>
    <img src="<?= get_template_directory_uri() ?>/img/dest/cog-white.png" alt="picture"  class="certificates__cog">
    <?php } ?>
    <div class="container">
        <div class="certificates-text-block">
            <h2 class="title title__certificates"><?= $title ?></h2>
            <div class="certificates-text-block__inner">
                <p class="subtitle subtitle_certificates"><?= $description ?></p>
                <a href="<?= home_url(); ?>/certificates/" class="button button_certificates">See more</a>
            </div>
        </div>
        <?php get_template_part('components/certificates/certificates'); ?>
    </div>
</section>