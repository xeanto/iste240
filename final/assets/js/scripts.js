// Author: Casey Malley

// set event listeners
window.onscroll = function () {
  scrollBar();
};
window.onload = function () {
  resetDisplay();
};
function scrollBar() {
  // set the width to the percentage of the page scrolled ovre the total
  // height of the page minues the device height to get normalized value
  document.getElementById("scrollBar").style.width =
    (window.pageYOffset / (document.body.scrollHeight - window.innerHeight)) *
      100 +
    "%";
  // once it's been scrolled more than 50px, add the stickyTop class
  window.pageYOffset > 50
    ? document.getElementById("scrollBarContainer").classList.add("stickyTop")
    : document
        .getElementById("scrollBarContainer")
        .classList.remove("stickyTop");
}

// courtesy of stack overflow
// https://stackoverflow.com/questions/951021/what-is-the-javascript-version-of-sleep
// https://stackoverflow.com/questions/14226803/wait-5-seconds-before-executing-next-line
const delay = (ms) => new Promise((res) => setTimeout(res, ms));

// this function allows interaction with the actual site after it's done
// loading by hiding the cover and pausing the loader animation to prevent
// CPU / GPU usage when invisible
const resetDisplay = async () => {
  var cover = document.getElementById("cover");
  cover.classList.add("hide");
  document.getElementById("loader").classList.add("paused");
  await delay(750);
  cover.style.display = "none";
};
