<?php
require_once __DIR__.'/_x.php';

$cities = [
    ['city_name' => 'Copenhagen', 'country' => 'Denmark', 'airport_short' => 'CPH', 'airport_name' => 'Kastrup Copenhagen', 'city_image' => 'copenhagen.PNG', 'city_population' => '602.481'],
    ['city_name' => 'Milano', 'country' => 'Italy', 'airport_short' => 'MXP', 'airport_name' => 'Milan Malpensa', 'city_image' => 'milano.PNG', 'city_population' => '1.000.000'],
    ['city_name' => 'Verona', 'country' => 'Italy', 'airport_short' => 'VRN', 'airport_name' => 'Verona Villafranca Airport', 'city_image' => 'verona.PNG', 'city_population' => '500.000']  
];

_validate_city_name_from();

_respond($cities, 200);
