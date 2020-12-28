<?php
$post_id = 30;
$companyName = get_post_meta($post_id, "wpcf-footer-company-name", true);
$footerAddress = get_post_meta($post_id, "wpcf-footer-address", true);
$footerAddressArr = explode('|', $footerAddress);
$footerContacts = get_post_meta($post_id, "wpcf-footer-contacts", true);
$footerContactsArr = explode('|', $footerContacts);
$footerCopyrights = get_post_meta($post_id, "wpcf-footer-copyrights", true);
$footerQualityMark = get_post_meta($post_id, "wpcf-footer-quality-mark");
$footerBg = get_post_meta($post_id, "wpcf-footer-background-image", true);
?>

<footer class="footer">
    <?php if (!is_page_template('contact-form.php')) { ?>
    <div class="footer-top">
        <?php if (!empty($footerBg)) { ?>
        <img src="<?= $footerBg ?>" alt="picture" class="footer-top__background">
        <?php } ?>
        <div class="container">
            <?php if (!empty($companyName)) { ?>
            <h3 class="footer-top__title"><?= $companyName ?></h3>
            <?php } ?>
            <div class="contacts">
                <ul class="contacts__block">
                    <?php if (!empty($companyName)) { ?>
                    <li class="contacts__text contacts__text_title"><?= $companyName ?></li>
                    <?php } ?>
                    <?php if (!empty($footerAddressArr[0])) {
                        foreach ($footerAddressArr as $address) {
                        ?>
                    <li class="contacts__text"><?= $address ?></li>
                    <?php } } ?>
                </ul>
                <ul class="contacts__block">
                    <?php if (!empty($footerContactsArr[0])) {
                        foreach ($footerContactsArr as $contact) { ?>
                            <li class="contacts__text"><?= $contact ?></li>
                        <?php } } ?>
                </ul>
                <div class="contacts__form">
                    <a href="<?= home_url(); ?>" class="button button_form">Contact us</a>
                </div>
            </div>
            <a href="<?= home_url(); ?>" class="button button_contacts">Contact us</a>
        </div>
    </div>
    <?php } ?>
    <div class="footer-middle">
        <div class="container">
            <div class="footer-middle__content">
                <a href="<?= home_url(); ?>" class="footer-middle__link">Home</a>
                <?php
                $locations = get_nav_menu_locations();
                $menu_id = $locations['menu-2'];
                $menu_items = wp_get_nav_menu_items($menu_id);
                foreach ($menu_items as $menu_item) {
                    ?>
                    <a href="<?= $menu_item->url; ?>" class="footer-middle__link"><?= $menu_item->title; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom__block">
                <img src="<?php
                $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
                echo $custom_logo__url[0];
                ?>" alt="logo" class="logo logo_footer">
                <?php if (!empty($footerCopyrights)) { ?>
                <h6 class="copyright"><?= $footerCopyrights ?></h6>
                <?php } ?>
            </div>
            <div class="footer-bottom__block">
                <div class="quality-markings">
                    <?php if (!empty($footerQualityMark[0])) {
                        foreach ($footerQualityMark as $mark) { ?>
                            <div class="quality-markings__link">
                                <img src="<?= $mark ?>" alt="link" class="quality-markings__image">
                            </div>
                        <?php } } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footprint">
        <div class="container">
            <a href="https://www.inkdesign.studio/" class="footprint__text footprint__text_mobile">Made by<img src="<?= get_template_directory_uri() ?>/img/dest/inkdesign.png" alt="inkdesign studio" class="footprint__logo">inkdesign studio</a>
        </div>
    </div>
</footer>
<?php wp_footer();
if (is_front_page()) { ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?= get_template_directory_uri() . '/components/slider/js/slider.js'?>"></script>
    <script src="<?= get_template_directory_uri() . '/components/header/js/header.js'?>"></script>
    <script src="<?= get_template_directory_uri() . '/components/section_certificates/js/section_certificates.js'?>"></script>
<?php } if (is_page()) { ?>
    <script src="<?= get_template_directory_uri() . '/components/faq-item/js/faq-item.js'?>"></script>
<?php } ?>
<?php if (is_single()) { ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
    <script src="<?= get_template_directory_uri() . '/assets/js/lightbox-options.js'?>"></script>
<?php } ?>
<script src="<?= get_template_directory_uri() . '/components/mobile-menu/js/mobile-menu.js'?>"></script>
</body>
</html>