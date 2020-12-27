<?php
$post_id = get_the_ID();
if (is_page_template('certificates.php')) {
    $certificates = get_post_meta($post_id, "wpcf-certificate-picture");
}
else {
    $certificates = get_post_meta($post_id, "wpcf-certificate-picture-main");
}
?>

<div class="certificates <?php if (is_page_template('certificates.php')) { ?>certificates_certificates-page<?php } ?>">
    <?php
    foreach ($certificates as $certificate) {
    ?>
    <img src="<?= $certificate ?>" alt="picture" class="certificates__image <?php if (is_page_template('certificates.php')) { ?>certificates__image_certificates-page<?php } ?>">
    <?php } ?>
</div>