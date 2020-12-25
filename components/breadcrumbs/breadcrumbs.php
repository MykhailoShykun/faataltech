<div class="container">
    <div class="breadcrumbs">
        <?php if (is_page()) { ?>
            <a href="<?= home_url(); ?>" class="breadcrumbs__text breadcrumbs__text_home">Home</a>
            <a href="<?= get_page_link(); ?>" class="breadcrumbs__text breadcrumbs__text_last"><?= the_title(); ?></a>
        <?php } ?>
    </div>
</div>
