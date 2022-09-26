<?php
try {
    $from_city = $_GET['city_name_to'] ?? 0;
    //Connect to the database
    $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Search for the flight in the database
    $q = $db->prepare('SELECT * FROM table_cities WHERE city_name LIKE :city_name_to');
    $q->bindValue(':city_name_to', '%'.$from_city.'%');
    $q->execute();
    //FETCH_ASSOC get the data as an assosiative array
    $cities = $q->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($cities);
} catch(Exception $ex) {
    //echo $ex;
    http_response_code(400);
    echo json_encode(['info' => 'Ups']);
}
