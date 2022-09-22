<?php 
define('_CITY_NAME_MIN_LEN', 1);
define('_CITY_NAME_MAX_LEN', 10);

define('_FIRST_NAME_MIN_LEN', 1);
define('_FIRST_NAME_MAX_LEN', 10);

define('_LAST_NAME_MIN_LEN', 1);
define('_LAST_NAME_MAX_LEN', 10);

define('_PASSWORD_MIN_LEN', 6);
define('_PASSWORD_MAX_LEN', 15);

define('_REGEX_EMAIL', '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/');

function _validate_city_name_from() {
    $error_message = 'city_name_from min '._CITY_NAME_MIN_LEN.' characters and max '. _CITY_NAME_MAX_LEN.' characters';
    if(!isset($_GET['city_name_from'])) {_respond($error_message, 400);}
    $_GET['city_name_from'] = trim($_GET['city_name_from']);
    if(strlen($_GET['city_name_from']) < _CITY_NAME_MIN_LEN) {_respond($error_message, 400);}
    if(strlen($_GET['city_name_from']) > _CITY_NAME_MAX_LEN) {_respond($error_message, 400);}
    return $_GET['city_name_from'];
}

function _validate_city_name_to() {
    $error_message = 'city_name_to min '._CITY_NAME_MIN_LEN.' characters and max '. _CITY_NAME_MAX_LEN.' characters';
    if(!isset($_GET['city_name_to'])) {_respond($error_message, 400);}
    $_GET['city_name_to'] = trim($_GET['city_name_to']);
    if(strlen($_GET['city_name_to']) < _CITY_NAME_MIN_LEN) {_respond($error_message, 400);}
    if(strlen($_GET['city_name_to']) > _CITY_NAME_MAX_LEN) {_respond($error_message, 400);}
    return $_GET['city_name_to'];
}

function _validate_firstname() {
    $error_message = 'firstname min '._FIRST_NAME_MIN_LEN.' characters and max '. _FIRST_NAME_MAX_LEN.' characters';
    if(!isset($_POST['firstname'])) {_respond($error_message, 400);}
    $_POST['firstname'] = trim($_POST['firstname']);
    if(strlen($_POST['firstname']) < _FIRST_NAME_MIN_LEN) {_respond($error_message, 400);}
    if(strlen($_POST['firstname']) > _FIRST_NAME_MAX_LEN) {_respond($error_message, 400);}
    return $_POST['firstname'];
}

function _validate_lastname() {
    $error_message = 'lastname min '._LAST_NAME_MIN_LEN.' characters and max '. _LAST_NAME_MAX_LEN.' characters';
    if(!isset($_POST['lastname'])) {_respond($error_message, 400);}
    $_POST['lastname'] = trim($_POST['lastname']);
    if(strlen($_POST['lastname']) < _LAST_NAME_MIN_LEN) {_respond($error_message, 400);}
    if(strlen($_POST['lastname']) > _LAST_NAME_MAX_LEN) {_respond($error_message, 400);}
    return $_POST['lastname'];
}

function _validate_email() {
    $error_message = 'email missing or invalid';
    if(!isset($_POST['email'])) {_respond($error_message, 400);}
    $_POST['email'] = trim($_POST['email']);
    if(!preg_match(_REGEX_EMAIL, $_POST['email'])) {_respond($error_message, 400);}
    return $_POST['email'];
}

function _validate_password() {
    $error_message = 'password min '._PASSWORD_MIN_LEN.' characters and max '. _PASSWORD_MAX_LEN.' characters';
    if(!isset($_POST['password'])) {_respond($error_message, 400);}
    $_POST['password'] = trim($_POST['password']);
    if(strlen($_POST['password']) < _PASSWORD_MIN_LEN) {_respond($error_message, 400);}
    if(strlen($_POST['password']) > _PASSWORD_MAX_LEN) {_respond($error_message, 400);}
    return $_POST['password'];
}

function _respond($message = '', $http_response_code = 200) {
    header('Content-Type: application/json');
    http_response_code($http_response_code);
    //$response = ['info' => $message];
    $response = is_array($message) ? $message : ['info' => $message];
    echo json_encode($response);
    exit();
}