<?php 
$_title = 'Trips: Trip Planner to Plan & Manage Your Travel | momondo';
require_once __DIR__.'/comp_header.php';
require_once __DIR__.'/comp_login_modal.php';
require_once __DIR__.'/dictionary.php';
?>

<main>
    <div id="trips-header">
        <div>
            <h1><?= $dictionary[$language.'_trips-header']  ?></h1>
            <p class="mt1"><?= $dictionary[$language.'_trips-text']  ?></p>
            <div class="trips-buttons mt1">
                <button onclick="openLoginModal()" class="trips-sign-in-button"><?= $dictionary[$language.'_trips-signin-btn']  ?></button>
                <a href="<?= "bookings?language=".$language ?>"><button class="trips-find-bookings"><?= $dictionary[$language.'_trips-find-bookings-btn']  ?></button></a>
            </div>
        </div>
        <div></div>
    </div>
    <section id="trips" class="mt7">
        <h2><?= $dictionary[$language.'_trips-second-header']  ?></h2>
    </section>
</main>

<?php 
require_once __DIR__.'/comp_footer.php'
?>