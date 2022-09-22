<?php
require_once __DIR__.'/_x.php';
$correct_email = 'a@a.com';

if($_POST['email'] != $correct_email) {
    http_response_code(400);
    exit();
}

_validate_email();

$success_email = ['message' => 'Success'];
_respond($success_email, 200);