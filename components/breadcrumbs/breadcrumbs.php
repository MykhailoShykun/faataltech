<?php
$post_id = get_the_ID();
if (is_archive()) {
    $cat_id = getCurrentCatID();
    if ($cat_id = 4) {
        $post_id = 73;
    }
}
if (is_single()) {
    $cat_id = get_the_category($post_id)[0]->cat_ID;
    if (strlen(get_the_title($post_id)) > 30) {
        $title = substr(get_the_title($post_id), 0, 27) . '...';
    }
    else {
        $title = get_the_title($post_id);
    }
}
?>

<div class="container">
    <div class="breadcrumbs">
        <?php if (is_page()) { ?>
            <a href="<?= home_url(); ?>" class="breadcrumbs__text breadcrumbs__text_home <?php if (is_page_template('certificates.php') || is_page_template('contact-form.php')) { ?>breadcrumbs__text_grey<?php } ?>">Home</a>
            <a href="<?= get_page_link(); ?>" class="breadcrumbs__text breadcrumbs__text_last <?php if (is_page_template('certificates.php') || is_page_template('contact-form.php')) { ?>breadcrumbs__text_grey<?php } ?>"><?= the_title(); ?></a>
        <?php } ?>
        <?php if (is_archive() && $cat_id = 4) { ?>
            <a href="<?= home_url(); ?>" class="breadcrumbs__text breadcrumbs__text_home">Home</a>
            <a href="<?= get_page_link($post_id); ?>" class="breadcrumbs__text breadcrumbs__text_last"><?= get_the_title($post_id); ?></a>
        <?php } ?>
        <?php if (is_single()) { ?>
            <a href="<?= home_url(); ?>" class="breadcrumbs__text breadcrumbs__text_home">Home</a>
            <a href="<?= get_category_link($cat_id); ?>" class="breadcrumbs__text"><?= get_cat_name($cat_id); ?></a>
            <a href="<?= get_page_link(); ?>" class="breadcrumbs__text breadcrumbs__text_last"><?= $title  ?></a>
        <?php } ?>
    </div>
</div>
