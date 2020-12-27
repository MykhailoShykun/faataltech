<?php
$post_id = get_the_ID();
$title = get_post_meta($post_id, "wpcf-general-information-title", true);
$description = get_post_meta($post_id, "wpcf-general-information-description", true);
$descriptionArr = explode('|', $description);
?>

<section class="section section_info">
    <div class="container">
        <h2 class="title title_info"><?= $title ?></h2>
        <?php foreach ($descriptionArr as $desc) { ?>
        <p class="subtitle subtitle_info"><?= esc_html($desc) ?></p>
        <?php } ?>
    </div>
</section>