<?php
$_title = 'Cheap Flights - Search and Compare Flights | momondo';
require_once __DIR__.'/comp_header.php';
require_once __DIR__.'/comp_login_modal.php';
require_once __DIR__.'/dictionary.php';
require_once __DIR__.'/_x.php';
?>

<main>
    <h1 class="pt2 width-container"><?= $dictionary[$language.'_header'] ?></h1>

    <form id="flight-search-form" class="width-container" onsubmit="return false">
        <div class="form-inputs mt2">
            <input 
                id="from-input"
                name="city_name_from"
                type="text" 
                placeholder="From?"
                onblur="hideFromResults()"
                onfocus="showFromResults()"
            >
            <div class="form-arrows" onclick="switchCities()">
                <i class='fas fa-exchange-alt'></i>
            </div>
            <input 
                id="to-input"
                name="city_name_to" 
                type="text" 
                placeholder="To?"
                onblur="hideToResults()"
                onfocus="showToResults()">
            <input 
            id="to-input"
            type="text" 
            value="Wed 19/10">

            <input 
            id="to-input"
            type="text" 
            value="Wed 26/10">
        </div>
        <button class="flight-search-button mt1">Search</button>
    </form>
            <div id="from-results-container">
                <div class="search">
                    <input id="from-input-mobile" type="text" placeholder="From?" oninput="showFromResultsMobile()">
                    <div class="closeFromSearch">X</div>
                </div>
                <div id="from-results" class="mt1"></div>
            </div> 
            <div id="to-results-container">
                <div class="search">
                    <input id="to-input-mobile" type="text" placeholder="To?" oninput="showToResultsMobile()">
                    <div class="closeToSearch">X</div>
                </div>
                <div id="to-results" class="mt1"></div>
            </div>

    <h2 class="pt4 width-container"><?= $dictionary[$language.'_choose'] ?></h2>
    <section class="usps mt1 width-container">
        <div class="usp">
            <i class="fa fa-tag" style="font-size:24px"></i>
            <div>
                <strong><p><?= $dictionary[$language.'_travel-deals-header'] ?></p></strong>
                <p class="usp-text"><?= $dictionary[$language.'_travel-deals-text'] ?></p>
            </div>
        </div>
        <div class="usp">
            <i class="fa fa-check-circle" style="font-size:24px"></i>
            <div>
                <strong><p><?= $dictionary[$language.'_search-without-worry'] ?></p></strong>
                <p class="usp-text"><?= $dictionary[$language.'_search-without-worry-text'] ?></p>
            </div>
        </div>
        <div class="usp">
            <i class='fas fa-redo' style='font-size:24px'></i>
            <div>
                <strong><p><?= $dictionary[$language.'_book-with-flexibility'] ?></p></strong>
                <p class="usp-text"><?= $dictionary[$language.'_book-with-flexibility-text'] ?></p>
            </div>
        </div>
        <div class="usp">
            <i class="fa fa-star" style="font-size:24px"></i>
            <div>
                <strong><p><?= $dictionary[$language.'_trusted-and-free'] ?></p></strong>
                <p class="usp-text"><?= $dictionary[$language.'_trusted-and-free-text'] ?></p>
            </div>
        </div>
    </section>

    <section id="trending-cities">
        <h2 class="mt2 width-container"><?= $dictionary[$language.'_trending-cities'] ?></h2>
        <p class="mt1 subtitle width-container"><?= $dictionary[$language.'_trending-cities-text'] ?></p>
        <div class="trending-cards mt2 mr1 ml1">
            <div class="trending-card">
                <div class="trending-flex">
                    <div class="trending-image"></div>
                    <div class="trending-text">
                        <p class="trending-header"><?= $dictionary[$language.'_trending-flights-to'] ?></p>
                        <strong><p>New Delhi</p></strong>
                    </div>
                </div>
            </div>
            <div class="trending-card">
                <div class="trending-flex">
                    <div class="trending-image"></div>
                    <div class="trending-text">
                        <p class="trending-header"><?= $dictionary[$language.'_trending-flights-to'] ?></p>
                        <strong><p>Mumbai</p></strong>
                    </div>
                </div>
            </div>
            <div class="trending-card">
                <div class="trending-flex">
                    <div class="trending-image"></div>
                    <div class="trending-text">
                        <p class="trending-header"><?= $dictionary[$language.'_trending-flights-to'] ?></p>
                        <strong><p>Rome</p></strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="trending-countries" class="mt7">
        <h2 class="mt2 width-container"><?= $dictionary[$language.'_trending-countries'] ?></h2>
        <p class="mt1 subtitle width-container"><?= $dictionary[$language.'_trending-countries-text'] ?></p>
        <div class="trending-cards mt2 mr1 ml1">
            <div class="trending-card">
                <div class="trending-flex">
                    <div class="trending-image"></div>
                    <div class="trending-text">
                        <p class="trending-header"><?= $dictionary[$language.'_trending-flights-to'] ?></p>
                        <strong><p>New Delhi</p></strong>
                    </div>
                </div>
            </div>
            <div class="trending-card">
                <div class="trending-flex">
                    <div class="trending-image"></div>
                    <div class="trending-text">
                        <p class="trending-header"><?= $dictionary[$language.'_trending-flights-to'] ?></p>
                        <strong><p>Mumbai</p></strong>
                    </div>
                </div>
            </div>
            <div class="trending-card">
                <div class="trending-flex">
                    <div class="trending-image"></div>
                    <div class="trending-text">
                        <p class="trending-header"><?= $dictionary[$language.'_trending-flights-to'] ?></p>
                        <strong><p>Rome</p></strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="flight-deals" class="mt7 width-container">
        <h2><?= $dictionary[$language.'_flight-deals-destination'] ?></h2>
        <p class="mt1 subtitle"><?= $dictionary[$language.'_flight-deals-destination-text'] ?></p>
        <p class="body-text mt1"><?= $dictionary[$language.'_flight-deals-destination-small-text'] ?></p>
        <div class="cities-list mt1">
            <div class="city-list">
                <strong><p class="mb1 mt1">London</p></strong>
            </div>
            <div class="city-list">
                <strong><p class="mb1 mt1">Istanbul</p></strong>
            </div>
            <div class="city-list">
                <strong><p class="mb1 mt1">Dubai</p></strong>
            </div>
            <div class="city-list">
                <strong><p class="mb1 mt1">Bangkok</p></strong>
            </div>
        </div>
    </section>

    <!-- <section id="how-to-container" class="width-container mt7">
        <h2>How to find cheap flight deals with momondo</h2>
        <div class="dropdown-container mt1">
            <div>
                <strong><p>How does momondo find such cheap airfare?</p></strong>
            </div>
        </div>
    </section> -->
</main>


<?php
require_once __DIR__.'/comp_footer.php';
?>