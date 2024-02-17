<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php the_field('insert_in_header', 'option'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<?php 

if ( is_page_template( 'page-business.php' ) ) {
    get_template_part('modules/nav-business');
} elseif  ( is_page_template( 'page-personal.php' ) ) {
    get_template_part('modules/nav-personal');
} else {
    get_template_part('modules/nav');
}

