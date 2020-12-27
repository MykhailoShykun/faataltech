<?php
$post_id = 30;
$title = get_post_meta($post_id, "wpcf-partners-section-title", true);
$partnersImages = get_post_meta($post_id, "wpcf-partner-image");
?>
<section class="section section_professionals">
    <div class="container">
        <?php if (!empty($title)) { ?>
        <h2 class="title title_professionals"><?= $title ?></h2>
        <?php } ?>
        <div class="professionals__grid">
            <?php if (!empty($partnersImages)) {
             foreach ($partnersImages as $image) {
                ?>
                 <div class="professionals__item">
                     <img src="<?= $image ?>" alt="photo" class="professionals__img">
                 </div>
            <?php } } ?>
        </div>
    </div>
</section>