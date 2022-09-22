<?php 
$_title = 'Find a momondo booking | momondo';
require_once __DIR__.'/comp_header.php';
require_once __DIR__.'/comp_login_modal.php';
require_once __DIR__.'/dictionary.php';
?>

<main>
<div id="bookings-header">
    <img src="images/bookings_banner.jpg" alt="">
    <div class="bookings-image-overlay">
        <h1 class="bookings-header"><?= $dictionary[$language.'_bookings-header'] ?></h1>
        <p class="mt05"><?= $dictionary[$language.'_bookings-text'] ?></p>
    </div>
</div>

<div class="momondo-receipt">
    <button onclick="showReceiptForm()"><?= $dictionary[$language.'_bookings-receipt'] ?></button>
</div>

<div class="search-for-receipt">
    <div class="receipt-header mb1" onclick="closeReceipt()">
        <h2><?= $dictionary[$language.'_bookings-receipt'] ?> </h2>
        <i class='fas fa-angle-up' style='font-size:24px'></i>
    </div>
    <div class="search-for-receipt-nav mb1">
        <p onclick="setActiveClass()" class="active search-for-receipt-p confirmation-header"><?= $dictionary[$language.'_bookings-confirmation'] ?></p>
        <p onclick="setActiveClass()" class="search-for-receipt-p credit-card-header"><?= $dictionary[$language.'_bookings-creditcard'] ?></p>
        <p onclick="setActiveClass()" class="search-for-receipt-p email-header">Email</p>
    </div>
    <form id="bookings-form" onsubmit="return false">
        <input class="mb1 confirmation" type="text" placeholder="<?= $dictionary[$language.'_bookings-reference-placeholder'] ?>">
        <input class="mb1 confirmation" type="text" placeholder="<?= $dictionary[$language.'_bookings-surname-placeholder'] ?>">
        <input style="display: none" class="mb1 credit-card" type="text" placeholder="<?= $dictionary[$language.'_bookings-creditcard-placeholder'] ?>">
        <input style="display: none" class="mb1 credit-card" type="text" placeholder="<?= $dictionary[$language.'_bookings-phone-number-placeholder'] ?>">
        <input style="display: none" class="mb1 email" type="text" placeholder="<?= $dictionary[$language.'_bookings-email-placeholder'] ?>">
        <button>Find Booking</button>
    </form>
</div>
</main>

<?php 
require_once __DIR__.'/comp_footer.php'
?>