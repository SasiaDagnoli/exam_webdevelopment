function validateLoginEmail(callback) {
  const form = event.target;
  console.log(form);
  const validate_error = "#FF6666";
  document
    .querySelectorAll("[data-validate-login]", form)
    .forEach(function (element) {
      element.classList.remove("validate_error");
      element.style.backgroundColor = "white";
    });
  document
    .querySelectorAll("[data-validate-login]", form)
    .forEach(function (element) {
      switch (element.getAttribute("data-validate-login")) {
        case "email":
          let re =
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          if (!re.test(element.value.toLowerCase())) {
            element.classList.add("validate_error");
            element.style.backgroundColor = validate_error;
          }
          break;
      }
    });
  if (!document.querySelector(".validate_error", form)) {
    callback();
    return;
  }
  document.querySelector(".validate_error", form).focus();
}

function validateLoginPassword(callback) {
  const form = event.target;
  const validate_error = "#FF6666";
  document
    .querySelectorAll("[data-validate-login]", form)
    .forEach(function (element) {
      element.classList.remove("validate_error");
      element.style.backgroundColor = "white";
    });
  document
    .querySelectorAll("[data-validate-login]", form)
    .forEach(function (element) {
      switch (element.getAttribute("data-validate-login")) {
        case "str":
          if (
            element.value.length < parseInt(element.getAttribute("data-min")) ||
            element.value.length > parseInt(element.getAttribute("data-max"))
          ) {
            element.classList.add("validate_error");
            element.style.backgroundColor = validate_error;
          }
          break;
      }
    });
  if (!document.querySelector(".validate_error", form)) {
    password();
    return;
  }
  document.querySelector(".validate_error", form).focus();
}

async function login() {
  const theForm = document.querySelector("#email-login");
  const conn = await fetch("api-login-email.php", {
    method: "POST",
    body: new FormData(theForm),
  });
  if (!conn.ok) {
    document.querySelector(".not-correct").style.display = "block";
    return;
  }
  const data = await conn.json();
  console.log(data);
  displayPasswordModal();
}

async function password() {
  const theForm = document.querySelector("#password-login");
  const conn = await fetch("api-login-password.php", {
    method: "POST",
    body: new FormData(theForm),
  });
  if (!conn.ok) {
    document.querySelector(".not-correct").style.display = "block";
    return;
  }
  const data = await conn.json();
  console.log(data);
}

function clearInput() {
  event.target.value = "";
  document.querySelector(".not-correct").style.display = "none";
}

function openLoginModal() {
  document.querySelector("#login-modal-container").style.display = "block";
}

function closeLoginModal() {
  document.querySelector("#login-modal-container").style.display = "none";
  document.querySelector("#email-modal-container").style.display = "none";
  document.querySelector("#password-modal-container").style.display = "none";
}

function displayEmailModal() {
  document.querySelector("#login-modal-container").style.display = "none";
  document.querySelector("#email-modal-container").style.display = "block";
}

function backToLoginModal() {
  document.querySelector("#login-modal-container").style.display = "block";
  document.querySelector("#email-modal-container").style.display = "none";
}

function backToEmailModal() {
  document.querySelector("#email-modal-container").style.display = "block";
  document.querySelector("#password-modal-container").style.display = "none";
}

function displayPasswordModal() {
  document.querySelector("#email-modal-container").style.display = "none";
  document.querySelector("#password-modal-container").style.display = "block";
  const emailValue = document.querySelector("#email-value").value;
  document.querySelector("#email-value-password-modal").value = emailValue;
  document.querySelector(
    ".enter-password-for-email"
  ).innerHTML = `Please enter your momondo password for ${emailValue}`;
}
