function validateForm() {

    var username = document.getElementById("uname").value;
          if (username == "") {

        document.getElementById("message").innerHTML="........Enter name.......";

    alert("Enter values");

    return false;

    }
    var password = document.getElementById("pass").value;
         if (username == "" || password == "" || email == "") {

        document.getElementById("message").innerHTML="..........Enter password........";

    alert("Enter values");

    return false;

    }
    var email = document.getElementById("email").value;

   

    if (username == "" || password == "" || email == "") {

        document.getElementById("message").innerHTML="........Enter email.......";

    alert("Enter values");

    return false;

    }
    else 
     alert("Profile Updated");
    }