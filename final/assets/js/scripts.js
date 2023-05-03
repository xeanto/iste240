window.onscroll = function () {
  scrollBar();
};
window.onload = function () {
  resetDisplay();
};
function scrollBar() {
  document.getElementById("scrollBar").style.width =
    (window.pageYOffset / (document.body.scrollHeight - window.innerHeight)) *
      100 +
    "%";
  window.pageYOffset > 50
    ? document.getElementById("scrollBarContainer").classList.add("stickyTop")
    : document
        .getElementById("scrollBarContainer")
        .classList.remove("stickyTop");
}

function resetDisplay() {
  var cover = document.getElementById("cover");
  cover.classList.add("hide");
}
