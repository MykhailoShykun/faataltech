<div class="mobile-menu">
    <div class="container">
        <h2 class="title title_mobile-menu">Navigation menu</h2>
        <nav class="mobile-menu__nav">
            <a href="<?= home_url(); ?>" class="mobile-menu__link">Home</a>
            <?php
                $locations = get_nav_menu_locations();
                $menu_id = $locations['menu-1'];
                $menu_items = wp_get_nav_menu_items($menu_id);
                foreach ($menu_items as $menu_item) {
            ?>
                    <a href="<?= $menu_item->url; ?>" class="mobile-menu__link"><?= $menu_item->title; ?></a>
            <?php } ?>
        </nav>
    </div>
</div>