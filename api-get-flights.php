<?php
require_once __DIR__.'/_x.php';

if(!isset($_GET['city_name_from'])) {
    http_response_code(400);
    echo json_encode(['info' => 'city_name_from missing']);
    exit();
}
if(strlen($_GET['city_name_from']) < _CITY_NAME_MIN_LEN) {
    http_response_code(400);
    echo json_encode(['info' => 'city_name_from min '._CITY_NAME_MIN_LEN.' characters']);
    exit();
}
if(strlen($_GET['city_name_from']) > _CITY_NAME_MAX_LEN) {
    http_response_code(400);
    echo json_encode(['info' => 'city_name_from max '._CITY_NAME_MAX_LEN.' characters']);
    exit();
}

echo json_encode(['message' => 'Yes']);