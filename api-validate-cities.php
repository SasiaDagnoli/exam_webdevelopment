<?php
require_once __DIR__.'/_x.php';

_validate_city_name_from();
_validate_city_name_to();

$cities = ['info' => 'success'];
_respond($cities, 200);