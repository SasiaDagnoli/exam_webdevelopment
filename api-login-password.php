<?php
require_once __DIR__.'/_x.php';
$correct_password = 'password';

if($_POST['password'] != $correct_password) {
    http_response_code(400);
    exit();
}

_validate_password();

$success_password = ['message' => 'Success'];
_respond($success_password, 200);