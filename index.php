<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <?php wp_head();  ?>
</head>

<body <?php body_class('dani matuko'); ?>>

    <h1>Heading</h1>

    <?php wp_footer(); ?>
</body>

</html>