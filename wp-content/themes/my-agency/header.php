<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agencya</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="nav">
        <a href="<?= home_url('/'); ?>" class="nav__logo" title="Page d'accueil">
            <img src="<?php bloginfo('template_directory'); ?>/assets/logo.5b7fbf6d.svg" alt="">
        </a>
        <?php
        wp_nav_menu([
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'nav__menu'
        ]);
        ?>
        <button class="nav__burger">
            <span></span>
        </button>   
    </header>