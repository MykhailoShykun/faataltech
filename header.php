<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>>">
    <title><?php echo wp_get_document_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">

</header>
<script>
    let themePath = '<?= get_template_directory_uri() ?>';
</script>


