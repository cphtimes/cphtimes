require('./bootstrap');

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

function setCookie(cName, cValue, expDays) {
  let date = new Date();
  date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
  const expires = "expires=" + date.toUTCString();
  document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}

function getCookie(cName) {
  const name = cName + "=";
  const cDecoded = decodeURIComponent(document.cookie); //to be careful
  const cArr = cDecoded .split('; ');
  let res;
  cArr.forEach(val => {
  if (val.indexOf(name) === 0) res = val.substring(name.length);
  })
  return res;
}

let dark_mode = getCookie('dark_mode');
if (dark_mode !== undefined && dark_mode === 'true') {
  document.documentElement.classList.add('dark-mode');
  document.getElementById('header__sun').classList.add('d-none');
  document.getElementById('header__moon').classList.remove('d-none');
  setCookie('dark_mode', true, 30);
}
