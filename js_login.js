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
}
