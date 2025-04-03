<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <a href="<?php echo site_url(); ?>">
                <img class="icon" src="<?php echo get_theme_file_uri('images/icontsvg.svg'); ?>">
            </a>
            <?php 
            wp_nav_menu(array(
              'theme_location' => 'header'
            ));
            ?>
        </header>
        <main>