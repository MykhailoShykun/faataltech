<?php get_header(); ?>

<main class="main main_error-404">
    <h1 class="error-404__title">404 <i>error</i></h1>
    <small class="error-404__subtitle">Oops, Something went wrong.<br> Let's return to
        <a href="<?= home_url(); ?>" class="error-404__link">the main page</a></small>
    <img src="<?= get_template_directory_uri() . '/img/dest/404-cogs.png' ?>" alt="picture" class="error-404__cogs">
</main>