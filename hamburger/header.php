<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>


<body>
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
                        <form class="p-searchForm">
                            <label class="screen-reader-text" for="s"></label>
                            <input type="text" class="p-searchForm__keyword" value="" name="s" id="s" placeholder="&#xF002; キーワードを入力" style="font-family:Arial, FontAwesome">
                            <input class="p-searchForm__submit" type="submit" id="searchsubmit" value="検索">
                        </form>
                    </div>
                </div>
            </header>