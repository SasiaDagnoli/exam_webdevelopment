<?php
session_start();
require_once __DIR__.'/dictionary.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost">
    <title>
        <?= 
            $_title ?? 'Momondo'
        ?>
    </title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="nav">
        <div id="nav-logo-and-menu">
            <p id="burger-menu">☰</p>
            <a href="<?= "".$language ?>"><img id="nav-logo" src="/images/momondo_logo.png" alt="Momondo Logo"></a>
        </div>
        <div id="nav-links">
            <a class="hover-orange" href="<?= "trips/".$language ?>">Trips</a> 
            <?php 
            if(!$_SESSION) {
            ?>
                <a class="nav-login" onclick="openLoginModal()"><?= $dictionary[$language.'_nav-signin'] ?></a> 
            <?php 
            }
            ?>
            <?php 
            if($_SESSION) {
            ?>
                <a class="nav-logout" href="<?= "logout/".$language ?>"><?= $dictionary[$language.'_nav-logout'] ?></a>
                <a class="nav-logout" href="admin">Admin</a> 
            <?php 
            }
            ?>
            <?php 
            if($language == 'en') {
            ?>
                <p onclick="openChangeLanguage()">🇬🇧</p>
            <?php
            }
            ?>
            <?php 
            if($language == 'dk') {
            ?>
                <p onclick="openChangeLanguage()">🇩🇰</p>
            <?php
            }
            ?>
            <?php 
            if($language == 'it') {
            ?>
                <p onclick="openChangeLanguage()">🇮🇹</p>
            <?php
            }
            ?>
        </div>
       </div>

       <div id="change-language">
            <?php 
            if($language != 'en') {
            ?>
                <a href="/en">🇬🇧</a>
            <?php
            }
            ?>
            <?php 
            if($language != 'dk') {
            ?>
                <a href="/dk">🇩🇰</a>
            <?php
            }
            ?>
            <?php 
            if($language != 'it') {
            ?>
                <a href="/it">🇮🇹</a>
            <?php
            }
            ?>
        </div>
    </nav>