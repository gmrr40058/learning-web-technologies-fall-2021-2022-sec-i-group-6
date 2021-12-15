var check = function () {
  if (
    document.getElementById("pass").value ==
    document.getElementById("con_password").value
  ) {
    document.getElementById("one").style.color = "green";
    document.getElementById("one").innerHTML = "Matched";
  } else {
    document.getElementById("one").style.color = "red";
    document.getElementById("one").innerHTML = "Not matching";
  }
};


function validateForm() {

    var username = document.getElementById("uname").value;
    var password = document.getElementById("pass").value;
    var email = document.getElementById("email").value;

    if (username == "" || password == "" || email == "") {

        document.getElementById("message").innerHTML="Enter all information!";

    alert("ENTER VALID INFORMATION");

    return false;

    }

    }