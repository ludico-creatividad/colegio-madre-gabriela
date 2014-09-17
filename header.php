<!DOCTYPE html5>
<html>
<head><title>Colegio Madre Gabriela de San Martin</title>
    <meta charset="utf-8"/>
    <?php require_once('styles-loader.php'); ?>
    <?php wp_head(); ?>
</head>
<body>
<div class="container">
    <header class="header">
        <figure id="mainLogo" class="pull-left"><img src="<?php stylesheetUri(); ?>imgs/logo_menu.png"/>
            <figcaption>Colegio Madre Gabriela</figcaption>
        </figure>
    </header>
    <div id="pestanas">
        <?php
        $menuConf = array(
            'theme_location' => 'mainMenu',
        );
        wp_nav_menu($menuConf);
        ?>
        <a href="<?= get_bloginfo('home'); ?>/contacto" class="iframe cboxElement" id="contacto">Contactános</a>
    </div>
</div>