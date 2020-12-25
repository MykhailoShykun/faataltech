<section class="section section_certificates">
    <?php if (is_front_page()) { ?>
    <img src="<?= get_template_directory_uri() ?>/img/dest/cog-white.png" alt="picture"  class="certificates__cog">
    <?php } ?>
    <div class="container">
        <div class="certificates-text-block">
            <h2 class="title title__certificates">Quality mark approved by professionals</h2>
            <div class="certificates-text-block__inner">
                <p class="subtitle subtitle_certificates">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="<?= home_url(); ?>" class="button button_certificates">See more</a>
            </div>
        </div>
        <?php get_template_part('components/certificates/certificates'); ?>
    </div>
</section>