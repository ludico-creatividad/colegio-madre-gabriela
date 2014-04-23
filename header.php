<!DOCTYPE html5>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Colegio Madre Gabriela de San Martin</title>
    <link rel="stylesheet" href="<?php stylesheetUri(); ?>css/reset.css"/>
    <link rel="stylesheet" href="<?php stylesheetUri(); ?>css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php stylesheetUri(); ?>style.css"/>
    <?php wp_head(); ?>
</head>
<body>
<div class="container">
    <header class="header">
        <figure id="mainLogo" class="pull-left"><img src="<?php stylesheetUri(); ?>imgs/logo.png"/>
            <figcaption>Colegio Madre Gabriela</figcaption>
        </figure>
        <?php
        $menuConf = array(
            'theme_location' => 'mainMenu',
            'menu_class' => 'nav nav-pills pull-right'
        );
        wp_nav_menu($menuConf);
        ?>
    </header>