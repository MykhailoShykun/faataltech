<footer class="footer">
    <div class="footer-top">
        <img src="<?= get_template_directory_uri() ?>/img/dest/footer-bg.jpg" alt="picture" class="footer-top__background">
        <div class="container">
            <h3 class="footer-top__title">f.a. atal technology LTD.</h3>
            <div class="contacts">
                <ul class="contacts__block">
                    <li class="contacts__text">Paran st. 2</li>
                    <li class="contacts__text">2030118 Yavne, Israel﻿</li>
                    <li class="contacts__text">Po box 387</li>
                </ul>
                <ul class="contacts__block">
                    <li class="contacts__text">Tel ﻿﻿+972-722282511﻿</li>
                    <li class="contacts__text">Tel ﻿﻿+972-547838090</li>
                    <li class="contacts__text">e-mail - info@atal-tech.com</li>
                    <li class="contacts__text">Fax 15389322593﻿</li>
                </ul>
            </div>
            <a href="<?= home_url(); ?>" class="button button_contacts">Contact us</a>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom__block">
                <img src="<?php
                $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
                echo $custom_logo__url[0];
                ?>" alt="logo" class="logo logo_footer">
                <h6 class="copyright">Copyright © 2020 F.A Atal Technology LTD</h6>
            </div>
            <div class="footer-bottom__block">
                <div class="quality-markings">
                    <a href="<?= home_url(); ?>" class="quality-markings__link">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/600px-Telegram_logo.svg.png" alt="link" class="quality-markings__image">
                    </a>
                    <a href="<?= home_url(); ?>" class="quality-markings__link">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/600px-Telegram_logo.svg.png" alt="link" class="quality-markings__image">
                    </a>
                    <a href="<?= home_url(); ?>" class="quality-markings__link">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/600px-Telegram_logo.svg.png" alt="link" class="quality-markings__image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footprint">
        <div class="container">
            <a href="https://www.inkdesign.studio/" class="footprint__text footprint__text_mobile">By
                <img src="<?= get_template_directory_uri() ?>/img/dest/inkdesign.png" alt="inkdesign studio" class="footprint__logo"></a>
        </div>
    </div>
</footer>
<?php wp_footer();
if (is_front_page()) { ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?= get_template_directory_uri() . '/components/slider/js/slider.js'?>"></script>
    <script src="<?= get_template_directory_uri() . '/components/header/js/header.js'?>"></script>
    <script src="<?= get_template_directory_uri() . '/components/certificates/js/certificates.js'?>"></script>
<?php }
?>
<script src="<?= get_template_directory_uri() . '/components/mobile-menu/js/mobile-menu.js'?>"></script>
</body>
</html>