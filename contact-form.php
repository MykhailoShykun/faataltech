<?php
/*
Template Name: Contact form
*/
?>

<?php get_header(); ?>
<main class="main main_contact-us">
    <?php get_template_part('components/breadcrumbs/breadcrumbs'); ?>
    <div class="container">
        <div class="contact-us">
            <div class="contact-us__text-block-wrapper">
                <h1 class="title title_contact-us"><?= the_title(); ?></h1>
                <div class="contact-us__content-block"><?= the_content(); ?></div>
            </div>
            <form action="#" class="contact-us__form">
                <div class="inputs-wrapper">
                    <input type="email" name="email" placeholder="E-mail*" required class="form-input form-input_email">
                    <input type="tel" name="phone" placeholder="Phone number*" required class="form-input form-input_phone">
                </div>
                <div class="inputs-wrapper">
                    <input type="text" name="name" placeholder="Name*" required class="form-input form-input_name">
                    <input type="text" name="company" placeholder="Company name" class="form-input form-input_company">
                </div>
                <div class="textarea-wrapper">
                    <textarea name="message" placeholder="Write your question here..." class="form-textarea"></textarea>
                </div>
                <button class="button form-btn">Send form</button>
            </form>
        </div>
    </div>
</main>


<?php get_footer(); ?>
