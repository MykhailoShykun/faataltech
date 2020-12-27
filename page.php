<?php
$post_id = get_the_ID();
$faqQuestions = get_post_meta($post_id, "wpcf-faq-question", true);
$faqAnswers = get_post_meta($post_id, "wpcf-faq-answer", true);

if (!empty($faqQuestions) && !empty($faqAnswers)) {
    $faqQuestionsArr = explode('|', $faqQuestions);
    $faqAnswersArr = explode('|', $faqAnswers);
}
get_header(); ?>

<main class="main main_page">
    <?php get_template_part('components/breadcrumbs/breadcrumbs'); ?>
    <div class="container">
        <h1 class="title title_page"><?= the_title(); ?></h1>
        <div class="page-content-block">
            <div class="page-content-block__thumbnail-block">
                <img src="<?= the_post_thumbnail_url(); ?>" alt="thumbnail" class="thumbnail-block__image thumbnail-block__image_page">
            </div>
            <div class="page-content-block__text-block"><?= the_content(); ?></div>
        </div>
        <?php if (!empty($faqQuestionsArr[0]) && !empty($faqAnswersArr[0])) { ?>
        <ul class="faq-list">
            <?php get_template_part('components/faq-item/faq-item'); ?>
        </ul>
        <?php } ?>
    </div>
</main>
<?php get_footer(); ?>
