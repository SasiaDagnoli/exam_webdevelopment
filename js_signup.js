const theForm = document.querySelector("#signup-form");

async function signup() {
  const conn = await fetch("api-signup.php", {
    method: "POST",
    body: new FormData(theForm),
  });
  if (!conn.ok) {
    console.log("ups");
    return;
  }
  const data = await conn.json();
  Swal.fire(`Good job ${data.message}!`, "Thanks for signing up!", "success");
}

async function isEmailAvailable() {
  console.log("X");
  const conn = await fetch("api-is-email-available.php", {
    method: "POST",
    body: new FormData(theForm),
  });
  if (!conn.ok) {
    console.log("test");
    document.querySelector(".already-in-use").style.display = "block";
  }
}

function clearInput() {
  event.target.value = "";
  document.querySelector(".already-in-use").style.display = "none";
}
