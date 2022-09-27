<?php
require_once __DIR__.'/_x.php';
$correct_email = 'a@a.com';
$correct_password = 'password';

if($_POST['email'] != $correct_email) {
    http_response_code(400);
    echo "FAIL";
    exit();
}

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header('Location: /');
    echo "FAIL2";
    exit();
}

if($_POST['email'] != $correct_email) {
    header('Location: /');
    echo "FAIL3";
    exit();
}

if($_POST['password'] != $correct_password) {
    header('Location: /');
    exit();
}

_validate_email();
_validate_password();

session_start();
$_SESSION['user_name'] = 'Sasia';

echo json_encode(['info' => 'success']);
