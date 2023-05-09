function validate() {
  form = document.getElementById("ratingForm");
  // get the name field
  userName = form.elements["name"].value;
  // get the rating
  rating = form.elements["rating"].value;
  // get the comment field
  comment = form.elements["comment"].value;
  // check if the name field is empty
  if (userName == "" || comment == "") {
    // run through each field to highlight the errors
    var focused = false;
    // check if the name field is empty or contains only one word
    if (userName == "") {
      document.getElementById("name").classList.add("error");
      !focused ? document.getElementById("name").focus() : "";
      focused = true;
    }
    // check if the comment field is empty
    if (comment == "") {
      document.getElementById("comment").classList.add("error");
      !focused ? document.getElementById("comment").focus() : "";
    }
    alert("Please enter a name or comment!");
    if (rating == null || rating == NaN) {
      document.getElementById("rating").classList.add("error");
      alert("Sneaky! Stop changing the URL stuff!");
    }
    return false;
  } else {
    // return true if conditions are met
    return true;
  }
}

function darkMode() {
  // change body background color
  document.getElementsByTagName("body")[0].classList.contains("dark") &&
  document.getElementsByTagName("nav")[0].classList.contains("darkNav") &&
  document.getElementById("divider").classList.contains("darkDivide")
    ? removeDark()
    : addDark();
}

function addDark() {
  document.getElementsByTagName("body")[0].classList.add("dark");
  document.getElementsByTagName("nav")[0].classList.add("darkNav");
  document.getElementById("divider").classList.add("darkDivide");
  document.getElementById("content").classList.add("darkContent");
  document.getElementById("darkButton").innerHTML = "Light Mode Toggle";
}

function removeDark() {
  document.getElementsByTagName("body")[0].classList.remove("dark");
  document.getElementsByTagName("nav")[0].classList.remove("darkNav");
  document.getElementById("divider").classList.remove("darkDivide");
  document.getElementById("content").classList.remove("darkContent");
  document.getElementById("darkButton").innerHTML = "Dark Mode Toggle";
}

// from final project:
// INCLUDING THE COMMENT, I DIDN'T USE STACK OVERFLOW DURING THE FINAL
// courtesy of stack overflow
// https://stackoverflow.com/questions/951021/what-is-the-javascript-version-of-sleep
// https://stackoverflow.com/questions/14226803/wait-5-seconds-before-executing-next-line
const delay = (ms) => new Promise((res) => setTimeout(res, ms));

const waitThenGo = async () => {
  await delay(2000);
  window.open("index.php", "_self");
};
