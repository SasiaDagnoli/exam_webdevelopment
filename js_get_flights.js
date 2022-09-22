function switchCities() {
  let valueFromInput = document.querySelector("#from-input");
  let savedValue = document.querySelector("#from-input").value;
  let valueToInput = document.querySelector("#to-input");
  if (valueFromInput.value && valueToInput.value) {
    valueFromInput.value = valueToInput.value;
    valueToInput.value = savedValue;
  }
}

function showFromResults() {
  document.querySelector("#from-results").innerHTML = "";
  document.querySelector("#from-results-container").style.display = "block";
  document.querySelector("#from-input-mobile").value = "";
  if (window.innerWidth > 1200) {
    /* document.querySelector(".search").style.display = "none"; */
    document
      .querySelector("#from-input")
      .addEventListener("input", getCitiesFrom);
  }
  document
    .querySelector(".closeFromSearch")
    .addEventListener("click", closeFromSearch);
}

function showToResults() {
  document.querySelector("#to-results").innerHTML = "";
  document.querySelector("#to-input-mobile").value = "";
  document.querySelector("#to-results-container").style.display = "block";
  if (window.innerWidth > 1200) {
    /* document.querySelector(".search").style.display = "none"; */
    document.querySelector("#to-input").addEventListener("input", getCitiesTo);
  }
  document
    .querySelector(".closeToSearch")
    .addEventListener("click", closeToSearch);
}

function closeFromSearch() {
  document.querySelector("#from-results-container").style.display = "none";
  document.querySelector("#from-results-mobile").innerHTML = "";
}

function closeToSearch() {
  document.querySelector("#to-results-container").style.display = "none";
  document.querySelector("#to-results-mobile").innerHTML = "";
}

function showFromResultsMobile() {
  const fromInputMobile = document.querySelector("#from-input-mobile");
  if (fromInputMobile.value.length > 0) {
    getCitiesFrom();
  }
}

function showToResultsMobile() {
  const toInputMobile = document.querySelector("#to-input-mobile");
  if (toInputMobile.value.length > 0) {
    getCitiesTo();
  }
}

function hideFromResults() {
  if (window.innerWidth > 1200) {
    document.querySelector("#from-results-container").style.display = "none";
  } else {
    return;
  }
}

function hideToResults() {
  if (window.innerWidth > 1200) {
    document.querySelector("#to-results-container").style.display = "none";
  } else {
    return;
  }
}

async function getCitiesFrom() {
  let searchForFrom;
  document.querySelector("#from-results").innerHTML = "";
  if (window.innerWidth < 1200) {
    searchForFrom = document.querySelector("#from-input-mobile").value;
  } else {
    searchForFrom = document.querySelector("#from-input").value;
  }
  console.log(searchForFrom);
  const conn = await fetch(
    `api-get-cities-from.php?city_name_from=${searchForFrom}`
  );
  if (!conn.ok) {
    console.log("ups");
    return;
  }
  const dataCitiesFrom = await conn.json();
  const cityFromBlueprint = `<div class="from-city" onclick="getInputValueFrom()">
                              <img src="#city-image#" alt="City">
                              <div class="city-text">
                                  <strong><p class="city-name">#city-name#</p></strong>
                                  <p class="short">#airport-short#</p>
                              </div>
                        </div>`;
  let allCities = "";
  dataCitiesFrom.forEach((city) => {
    let divCity = cityFromBlueprint;
    divCity = divCity.replace("#city-name#", city.city_name);
    divCity = divCity.replace("#airport-short#", city.city_airport_abr);
    divCity = divCity.replace("#city-image#", `images/${city.city_image}`);

    allCities += divCity;
  });
  document
    .querySelector("#from-results")
    .insertAdjacentHTML("afterbegin", allCities);
}

async function getCitiesTo() {
  let searchForTo;
  document.querySelector("#to-results").innerHTML = "";
  if (window.innerWidth < 1200) {
    searchForTo = document.querySelector("#to-input-mobile").value;
  } else {
    searchForTo = document.querySelector("#to-input").value;
  }
  const conn = await fetch(`api-get-cities-to.php?city_name_to=${searchForTo}`);
  if (!conn.ok) {
    console.log("ups");
    return;
  }
  const dataCitiesTo = await conn.json();
  const cityToBlueprint = `<div class="to-city" onclick="getInputValueTo()">
                                <img src="#city-image#" alt="City">
                                <div class="city-text">
                                    <strong><p class="city-name">#city-name#</p></strong>
                                    <p class="short">#airport-short#</p>
                                </div>
                          </div>`;
  let allCities = "";
  dataCitiesTo.forEach((city) => {
    let divCity = cityToBlueprint;
    divCity = divCity.replace("#city-name#", city.city_name);
    divCity = divCity.replace("#airport-short#", city.city_airport_abr);
    divCity = divCity.replace("#city-image#", `images/${city.city_image}`);

    allCities += divCity;
  });
  document
    .querySelector("#to-results")
    .insertAdjacentHTML("afterbegin", allCities);
}

function getInputValueFrom() {
  const cityName = event.target.querySelector(".city-name").innerText;
  document.querySelector("#from-results-container").style.display = "none";
  document.querySelector("#from-input").value = cityName;
}

function getInputValueTo() {
  const cityName = event.target.querySelector(".city-name").innerText;
  document.querySelector("#to-results-container").style.display = "none";
  document.querySelector("#to-input").value = cityName;
}
