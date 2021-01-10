<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?><?php wp_body_open(); ?>>
    <div class="p-bodyFilter"></div>
    <main class="l-main">
        <div class="l-container">
            <header class="l-header">
                <div class="p-header">
                    <a href="#" class="p-header__menu">Menu</a>
                    <div class="p-header__left">
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                            <div class="p-header__left__ttl" ><?php bloginfo( 'name' ); ?></div>
                        </a>
                    </div>
                    <div class="p-header__right">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </header>