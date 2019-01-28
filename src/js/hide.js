//Reister & Login form swtich
var btn = document.getElementById("register_login");
btn.onclick = function() {
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
      document.getElementById("register_login").innerHTML = "Register";
      break;

    case 2:
      login.style.display = "none";
      register.style.display = "block";
      count = 1;
      document.getElementById("register_login").innerHTML = "Login";
      break;
  }
};

// var industry = document.getElementById("industry");

// industry.onclick = function() {
//   var job = document.getElementById("boxx");
//   var form = document.getElementById("signup").blur;
//   job.style.display = "contents";
//   console.log("job on click ");
// };

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
