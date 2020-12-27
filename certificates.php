<?php
/*
Template Name: Certificates
*/
?>

<?php get_header(); ?>
<div class="container">
    <main class="main main_certificates-page">
        <div class="certificates-page__pictures-block">
            <div class="certificates-page__bg">
                <img src="<?= get_template_directory_uri() ?>/img/dest/certificates-bg-cogs.png" alt="picture" class="certificates-page__cogs">
            </div>
            <?php get_template_part('components/breadcrumbs/breadcrumbs'); ?>
            <h1 class="title title_certificates"><?= the_title() ?></h1>
            <?php get_template_part('components/certificates/certificates'); ?>
        </div>
        <div class="certificates-page__text-block">
            <?= the_content(); ?>
        </div>
    </main>
</div>
<?php get_footer(); ?>