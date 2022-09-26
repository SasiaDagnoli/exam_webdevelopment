<?php
try {
    $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $db->prepare('SELECT * FROM table_cities'); 
    $q->execute();
    $cities = $q->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($cities);
} catch(Exception $ex) {
    http_response_code(500);
    echo json_encode(['info' => 'sorry went terribly wrong']);
    exit();
}