<?php
require_once __DIR__.'/_x.php';

_validate_firstname();
_validate_lastname();
_validate_email();
_validate_password();

$success_signup = ['message' => 'Success'];
_respond($success_signup, 200);