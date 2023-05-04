// Author: Casey Malley
// define a function that validates the form to leave a comment that runs on submit
function validateForm() {
  form = document.getElementById("comment-form");
  // get the name field
  userName = form.elements["name"].value;
  // get the email field
  email = form.elements["email"].value;
  // get the comment field
  comment = form.elements["comment"].value;
  // check if the name field is empty
  if (
    userName == "" ||
    userName.split(" ").length < 2 ||
    email == "" ||
    (email.split("@").length < 2 && email.split(".").length < 2) ||
    comment == ""
  ) {
    // run through each field to highlight the errors
    var focused = false;
    // check if the name field is empty or contains only one word
    if (userName == "" || userName.split(" ").length < 2) {
      document.getElementById("name-error").innerHTML =
        "Please enter your full name";
      document.getElementById("name").classList.add("error");
      document.getElementById("name-error").classList.add("error");
      !focused ? document.getElementById("name").focus() : "";
      focused = true;
    }
    // check if the email field is empty or contains an invalid email address
    if (
      email == "" ||
      (email.split("@").length < 2 && email.split(".").length < 2)
    ) {
      document.getElementById("email-error").innerHTML =
        "Please enter a valid email address";
      document.getElementById("email").classList.add("error");
      document.getElementById("email-error").classList.add("error");
      !focused ? document.getElementById("email").focus() : "";
      focused = true;
    }
    // check if the comment field is empty
    if (comment == "") {
      document.getElementById("comment-error").innerHTML =
        "Please enter a comment";
      document.getElementById("comment").classList.add("error");
      document.getElementById("comment-error").classList.add("error");
      !focused ? document.getElementById("comment").focus() : "";
    }
    return false;
  } else {
    // return true if conditions are met
    return true;
  }
}
