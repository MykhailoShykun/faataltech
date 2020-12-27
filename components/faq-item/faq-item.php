<?php
    $post_id = get_the_ID();
    $faqQuestions = get_post_meta($post_id, "wpcf-faq-question", true);
    $faqAnswers = get_post_meta($post_id, "wpcf-faq-answer", true);

    if (!empty($faqQuestions) && !empty($faqAnswers)) {
        $faqQuestionsArr = explode('|', $faqQuestions);
        $faqAnswersArr = explode('|', $faqAnswers);
    }
    for ($i = 0 ; $i < count($faqQuestionsArr); $i++) {
    ?>
<li class="faq-item">
    <div class="faq-item__header">
        <h6 class="faq-item__title"><?= $faqQuestionsArr[$i] ?></h6>
        <div class="faq-item__arrow-block"></div>
    </div>
    <div class="faq-item__text-block">
        <p class="faq-item__text"><?= $faqAnswersArr[$i] ?></p>
    </div>
</li>
<?php } ?>