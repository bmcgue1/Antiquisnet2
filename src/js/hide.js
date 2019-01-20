function creds() {
  var login = document.getElementById("login");
  var register = document.getElementById("signup");
  var cocunt;

  if (login.style.display == "block") {
    count = 2;
  } else {
    count = 1;
  }

  switch (count) {
    case 1:
      login.style.display = "block";
      register.style.display = "none";
      count = 2;
      document.getElementById("pills-home-tab").innerHTML = "Register";
      break;

    case 2:
      login.style.display = "none";
      register.style.display = "block";
      count = 1;
      document.getElementById("pills-home-tab").innerHTML = "Login";
      break;
  }
}
