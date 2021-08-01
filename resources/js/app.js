require('./bootstrap');

const el = document.querySelector(".nav-scroller")
const observer = new IntersectionObserver(
  ([e]) => {
    // e.target.classList.toggle("is-pinned", e.intersectionRatio < 1)
    const isPinned = (e.intersectionRatio < 1);
    if (isPinned) {
      e.target.classList.add("shadow-sm");
      e.target.classList.remove("border-bottom", "border-dark", "border-2", "container");
      document.querySelector("#nav-scroller-sections").classList.add('container');
    } else {
      e.target.classList.add("border-bottom", "border-dark", "border-2", "container");
      e.target.classList.remove("shadow-sm");
      document.querySelector("#nav-scroller-sections").classList.remove('container');
    }
  },
  { threshold: [1] }
);

observer.observe(el);
