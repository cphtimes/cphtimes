require('./bootstrap');
window.autocomplete = require('./autocomplete');
window.darkmode = require('./darkmode');

var el = document.querySelector(".nav-scroller")
if (el !== null) {
  const observer = new IntersectionObserver(
    ([e]) => {
      // e.target.classList.toggle("is-pinned", e.intersectionRatio < 1)
      const isPinned = (e.intersectionRatio < 1);
      if (isPinned) {
        e.target.classList.add("shadow-sm");
        e.target.classList.remove("border-bottom", "border-dark", "border-2", "container");
        document.querySelector("#nav-scroller-sections").classList.add('container');
        document.querySelector("#homepage-link").classList.add('d-block');
        document.querySelector("#homepage-link").classList.remove('d-none');

      } else {
        e.target.classList.add("border-bottom", "border-dark", "border-2", "container");
        // get cookie and check if darkmode is on. if yes, do not include shadow.
        e.target.classList.remove("shadow-sm");
        document.querySelector("#nav-scroller-sections").classList.remove('container');
        document.querySelector("#homepage-link").classList.add('d-none');
        document.querySelector("#homepage-link").classList.remove('d-block');
      }
    },
    { threshold: [1] }
  );
  observer.observe(el);
}

window.copyCurrentURLToClipboard = function() {
  var url = window.location.href;
  navigator.clipboard.writeText(url);
}