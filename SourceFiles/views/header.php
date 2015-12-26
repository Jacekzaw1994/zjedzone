<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    ?>

    <link rel="icon" href="#">
    <!-- Title -->
    <title>Zjedzone</title>
    <!-- Bootstrap -->
    <link href="<?php echo SITE_ROOT; ?>public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div id="header">
    <?php if($this->someoneIsLoggedIn == 1){ ?>
        <div>ZALOGOWANO!</div>
    <?php }else{
        ?>
        <div>NIE ZALOGOWANO!</div>
        <?php
    } ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ZJEDZ.ONE</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo SITE_ROOT; ?>index">Strona Główna</a></li>
                    <li><a href="<?php echo SITE_ROOT; ?>help">Pomoc</a></li>
                    <?php if($this->user):  ?>
                        <li><a href="<?php echo SITE_ROOT; ?>logout">Wyloguj</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo SITE_ROOT; ?>login">Zaloguj</a></li>
                    <?php endif;?>
                    <li><a href="<?php echo SITE_ROOT; ?>register">Zarejestruj</a></li>
                    <li><?php  ?></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</div>

<!-- This will be remove -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
