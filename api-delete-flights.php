<?php
//Validate the flight id
if(!isset($_POST['flight_id'])) {
    http_response_code(400);
    echo json_encode(['info' => 'flight_id missing']);
    exit();
}

if(!ctype_digit($_POST['flight_id'])) {
    http_response_code(400);
    echo json_encode(['info' => 'flight_id must be a digit']);
    exit();
}

//TODO: Delete the flight from the database
try {
    //Success
    $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $db->prepare('DELETE FROM flights WHERE id = :id'); 
    $q->bindValue(':id', $_POST['flight_id']);
    $q->execute();
    echo json_encode(['info' => 'flight deleted', 'flight_id' => $_POST['flight_id']]);
} catch(Exception $ex) {
    http_response_code(500);
    echo json_encode(['info' => 'sorry went terribly wrong']);
    exit();
}