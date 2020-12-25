<?php
/*
Template Name: Frequently asked questions
*/
?>

<?php get_header();
    get_template_part('components/breadcrumbs/breadcrumbs');
?>

<div class="container">
    <h1 class="title title_faq"><?= the_title() ?></h1>
    <div class="faq">
        <h2 class="faq__title">basics</h2>
        <ul class="faq-list">
            <?php get_template_part('components/faq-item/faq-item'); ?>
            <?php get_template_part('components/faq-item/faq-item'); ?>
            <?php get_template_part('components/faq-item/faq-item'); ?>
        </ul>
        <h2 class="faq__title">basics</h2>
        <ul class="faq-list">
            <?php get_template_part('components/faq-item/faq-item'); ?>
            <?php get_template_part('components/faq-item/faq-item'); ?>
            <?php get_template_part('components/faq-item/faq-item'); ?>
        </ul>
        <h2 class="faq__title">basics</h2>
        <ul class="faq-list">
            <?php get_template_part('components/faq-item/faq-item'); ?>
            <?php get_template_part('components/faq-item/faq-item'); ?>
            <?php get_template_part('components/faq-item/faq-item'); ?>
        </ul>
    </div>
</div>


<?php get_footer(); ?>
