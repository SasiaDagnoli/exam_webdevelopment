function showReceiptForm() {
  document.querySelector(".search-for-receipt").style.display = "block";
  document.querySelector(".momondo-receipt").style.display = "none";
}

function closeReceipt() {
  document.querySelector(".search-for-receipt").style.display = "none";
  document.querySelector(".momondo-receipt").style.display = "block";
}

function setActiveClass() {
  const clicked = event.target;
  const removeClass = document.querySelectorAll(".search-for-receipt-p");
  removeClass.forEach((elm) => {
    elm.classList.remove("active");
  });
  clicked.classList.add("active");
  if (clicked.classList.contains("confirmation-header")) {
    document.querySelectorAll(".credit-card").forEach((elm) => {
      elm.style.display = "none";
    });
    document.querySelectorAll(".confirmation").forEach((elm) => {
      elm.style.display = "block";
    });
    document.querySelector(".email").style.display = "none";
  }
  if (clicked.classList.contains("credit-card-header")) {
    document.querySelectorAll(".confirmation").forEach((elm) => {
      elm.style.display = "none";
    });
    document.querySelectorAll(".credit-card").forEach((elm) => {
      elm.style.display = "block";
    });
    document.querySelector(".email").style.display = "none";
  }
  if (clicked.classList.contains("email-header")) {
    document.querySelectorAll(".confirmation").forEach((elm) => {
      elm.style.display = "none";
    });
    document.querySelectorAll(".credit-card").forEach((elm) => {
      elm.style.display = "none";
    });
    document.querySelector(".email").style.display = "block";
  }
}

function openChangeLanguage() {
  document.querySelector("#change-language").style.display = "flex";
}
