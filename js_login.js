function validateLogin(callback) {
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
        case "int":
          if (
            !/^\d+$/.test(element.value) ||
            parseInt(element.value) <
              parseInt(element.getAttribute("data-min")) ||
            parseInt(element.value) > parseInt(element.getAttribute("data-max"))
          ) {
            element.classList.add("validate_error");
            element.style.backgroundColor = validate_error;
          }
          break;
        case "email":
          let re =
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          if (!re.test(element.value.toLowerCase())) {
            element.classList.add("validate_error");
            element.style.backgroundColor = validate_error;
          }
          break;
        case "regex":
          var regex = new RegExp(element.getAttribute("data-regex"));
          // var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
          if (!regex.test(element.value)) {
            console.log("regex error");
            element.classList.add("validate_error");
            element.style.backgroundColor = validate_error;
          }
          break;
        case "match":
          if (
            element.value !=
            document.querySelector(
              `[name='${element.getAttribute("data-match-name")}']`,
              form
            ).value
          ) {
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

async function login() {
  const theForm = document.querySelector("#login");
  const conn = await fetch("api-login.php", {
    method: "POST",
    body: new FormData(theForm),
  });
  if (!conn.ok) {
    console.log("test");
    return;
  }
  const data = await conn.json();
  console.log(data.info);
  window.location.replace("admin");
}

function clearInputLogin() {
  event.target.value = "";
  document.querySelector(".not-correct").style.display = "none";
}

function openLoginModal() {
  document.querySelector("#login-modal-container").style.display = "block";
}

function closeLoginModal() {
  document.querySelector("#login-modal-container").style.display = "none";
  document.querySelector("#login-form-container").style.display = "none";
}

function displayEmailModal() {
  document.querySelector("#login-modal-container").style.display = "none";
  document.querySelector("#login-form-container").style.display = "block";
}

function backToLoginModal() {
  document.querySelector("#login-modal-container").style.display = "block";
  document.querySelector("#login-form-container").style.display = "none";
}
