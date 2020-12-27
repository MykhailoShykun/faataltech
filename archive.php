<?php
$cat_id = getCurrentCatID();
if ($cat_id = 4) {
    $post_id = 73;
}
get_header();
get_template_part('components/breadcrumbs/breadcrumbs'); ?>
<main class="main">
    <div class="container">
        <h1 class="title title_archive"><?= get_the_title($post_id); ?></h1>
        <p class="subtitle subtitle_archive"><?= get_the_content(null, null, $post_id); ?></p>
        <?php get_template_part('components/production/production'); ?>
    </div>
</main>
<?php get_footer(); ?>
