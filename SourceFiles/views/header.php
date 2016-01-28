<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
-->
<html>
<head>
    <title>Zjedz.one</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <?php
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="<?php echo SITE_ROOT; ?>public/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo SITE_ROOT; ?>public/assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo SITE_ROOT; ?>public/css/custom.css">
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo SITE_ROOT; ?>public/assets/css/ie8.css" /><![endif]-->
</head>
<body class="homepage">
<div id="page-wrapper">

    <!-- Header -->
    <div id="header-wrapper">
        <div id="header" class="container">

            <!-- Logo -->
            <h1 id="logo"><a href="<?php echo SITE_ROOT; ?>index">ZJEDZ.ONE </a></h1>
            <p>Witaj głodomorze! Nie wiesz co zjeść? Pomożemy Ci.</p>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a class="icon fa-home" href="<?php echo SITE_ROOT; ?>index"><span>Strona główna</span></a></li>
                    <li><a class="icon fa-cog" href="<?php echo SITE_ROOT; ?>help"><span>Pomoc</span></a></li>
                    <li><a class="icon fa-retweet" href="<?php echo SITE_ROOT; ?>add_recipe"><span>Dodaj przepis</span></a></li>
                    <?php if(!($this->user)):  ?>
                    <li><a class="icon fa-sitemap" href="<?php echo SITE_ROOT; ?>login"><span>Zaloguj</span></a></li>
                    <li><a class="icon fa-user" href="<?php echo SITE_ROOT; ?>register"><span>Zarejestruj</span></a> </li>
                        <?php else:?>
                    <li>
                        <a><img class="avatar-image" src="http://www.gravatar.com/avatar/<?php echo md5($this->user['email']);?>?s=30&d=retro"><span><strong><?php echo $this->user['username'];?></strong></span></a>
                        <ul>
                            <li><a href="<?php echo SITE_ROOT; ?>add_recipe">Dodaj przepis</a></li>
                            <li><a href="#">Moje przepisy</a></li>
                            <li><a href="#">Zmień awatar</a></li>
                            <li>
                                <a href="#">Cos tu bedzie</a>
                                <ul>
                                    <li><a href="#">Jakas opcja</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo SITE_ROOT; ?>new_password">Zmień hasło</a></li>
                            <li><a href="<?php echo SITE_ROOT; ?>logout">Wyloguj się</a></li>
                        </ul>
                    </li>
                    <?php endif;?>
                </ul>
            </nav>
        </div
    </div>


