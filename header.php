<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body class="body">
<header class="header <?php if (is_front_page()) { ?>header_front<?php } ?>">
    <div class="header__inner">
        <a href="<?= home_url(); ?>" class="header__link">
            <img src="<?php
            $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
            echo $custom_logo__url[0];
            ?>" alt="logo" class="header__logo">
        </a>
        <nav class="header__nav">
            <a href="<?= home_url(); ?>" class="nav__link <?php if (is_front_page()) { ?>nav__link_front<?php } ?>">Home</a>
            <?php
            $locations = get_nav_menu_locations();
            $menu_id = $locations['menu-1'];
            $menu_items = wp_get_nav_menu_items($menu_id);
            foreach ($menu_items as $menu_item) {
                ?>
                <a href="<?= $menu_item->url; ?>" class="nav__link <?php if (is_front_page()) { ?>nav__link_front<?php } ?>"><?= $menu_item->title; ?></a>
            <?php } ?>
        </nav>
        <div class="header__hamburger">
            <span class="hamburger__span <?php if (is_front_page()) { ?>hamburger__span_front<?php } ?>"></span>
            <span class="hamburger__span <?php if (is_front_page()) { ?>hamburger__span_front<?php } ?>"></span>
            <span class="hamburger__span <?php if (is_front_page()) { ?>hamburger__span_front<?php } ?>"></span>
        </div>
    </div>
</header>
<?php get_template_part('components/mobile-menu/mobile-menu'); ?>
<script>
    let themePath = '<?= get_template_directory_uri() ?>';
</script>


