//lihat password | LOGIN | REGISTER
var password = document.getElementById("password");
var showPassword = document.getElementById("btn-show-password");

showPassword.addEventListener("click", function () {
  if (password.type === "password") {
    password.type = "text";
    showPassword.innerHTML = "<i class='bi bi-eye-fill'></i>";
  } else {
    password.type = "password";
    showPassword.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
  }
});
