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

    <div id="delete-flights">
        <h1>Delete Flights</h1>
<?php
        foreach($flights as $flight) {
        ?>
        <form onsubmit="return false;">
            <div class="delete-flight">
                <!-- <img src="" alt="the image"> -->
                    <span><?= $flight['departure_city'] ?></span>
                    <span><?= $flight['arrival_city'] ?></span>
                    <input type="text" value="<?= $flight['flight_id'] ?>" name="flight_id" style="display: none;">
                    <button onclick="deleteFlight()">🗑️</button>
            </div>
        </form>
        </div>
        <?php
        }
        ?>
</main>

<?php 
require_once __DIR__.'/comp_footer.php'
?>
