<?php
require_once __DIR__.'/_x.php';

/* $cities = [
    ['city_name' => 'Copenhagen', 'country' => 'Denmark', 'airport_short' => 'CPH', 'airport_name' => 'Kastrup Copenhagen', 'city_image' => 'copenhagen.PNG', 'city_population' => '602.481'],
    ['city_name' => 'Milano', 'country' => 'Italy', 'airport_short' => 'MXP', 'airport_name' => 'Milan Malpensa', 'city_image' => 'milano.PNG', 'city_population' => '1.000.000'],
    ['city_name' => 'Verona', 'country' => 'Italy', 'airport_short' => 'VRN', 'airport_name' => 'Verona Villafranca Airport', 'city_image' => 'verona.PNG', 'city_population' => '500.000']  
]; */

try {
    $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $db->prepare('SELECT * FROM table_cities'); 
    $q->execute();
    $cities = $q->fetchAll(PDO::FETCH_ASSOC);
    //echo json_encode($flights);
} catch(Exception $ex) {
    http_response_code(500);
    echo json_encode(['info' => 'sorry went terribly wrong']);
    exit();
}

_validate_city_name_from();

_respond($cities, 200);
