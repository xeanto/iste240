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
  if (userName == "" || userName.split(" ").length < 2) {
    // if it is, show an error message
    document.getElementById("name-error").innerHTML =
      "Please enter your full name";
    // and return false to prevent the form from submitting
    return false;
  } else if (
    email == "" ||
    (email.split("@").length < 2 && email.split(".").length < 2)
  ) {
    document.getElementById("email-error").innerHTML =
      "Please enter a valid email address";
    return false;
  } else if (comment == "") {
    document.getElementById("comment-error").innerHTML =
      "Please enter a comment";
    return false;
  } else {
    return true;
  }
}
