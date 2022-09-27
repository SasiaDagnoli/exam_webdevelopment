<?php 
$_title = 'Admin | momondo';
require_once __DIR__.'/comp_header.php';
require_once __DIR__.'/comp_login_modal.php';
if(!$_SESSION) {
    header('Location: /');
    exit();
}
try {
    $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $db->prepare('SELECT * FROM table_flights'); 
    $q->execute();
    $flights = $q->fetchAll(PDO::FETCH_ASSOC);
    //echo json_encode($flights);
} catch(Exception $ex) {
    http_response_code(500);
    echo json_encode(['info' => 'sorry went terribly wrong']);
    exit();
}
?>

<main>
        <h1 class="delete-flights-header">Delete Flights</h1>
<?php
        foreach($flights as $flight) {
        ?>
        <form id="delete-flights" onsubmit="return false;">
            <div class="delete-flight">
                    <div class="cities">
                        <span><?= "{$flight['departure_city']} - {$flight['arrival_city']}" ?></span>
                        <input type="text" value="<?= $flight['flight_id'] ?>" name="flight_id" style="display: none;">
                    </div>
                    <div class="delete-flight-right">
                        <p><?= $flight['flight_price'] ?></p>
                        <p class="admin-airline"><?= $flight['airline'] ?></p>
                        <button class="mt1" onclick="deleteFlight()">Delete Flight</button>
                    </div>
            </div>
        </form>
        <?php
        }
        ?>
</main>

<?php 
require_once __DIR__.'/comp_footer.php'
?>
