<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JOTT_MEDIA
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" id="style-style-css"
          href="<?= esc_url(get_stylesheet_directory_uri() . '/assets/css/style.css'); ?>" type="text/css"
          media="all">
    <?php
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

    <header id="masthead">
        <nav class="menu">
            <a class="logo" href="<?= home_url(); ?>">
                <?php $image = get_field('logo', 'options');
                if ($image) : ?>
                    <img src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>" />
                <?php endif; ?>
            </a>
            <?php wp_nav_menu(array('theme_location' => 'header-menu', 'depth' => 1)); ?>
        </nav>
    </header>

    <div id="main" class="site-content">

