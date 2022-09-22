<?php
$correct_email = 'a@a.com';
$correct_password = 'password';

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header('Location: /');
    exit();
}
if($_POST['email'] != $correct_email) {
    header('Location: /');
    exit();
}

if($_POST['password'] != $correct_password) {
    header('Location: /');
    exit();
}

session_start();
$_SESSION['use_name'] = 'Sasia';
header('Location: admin');