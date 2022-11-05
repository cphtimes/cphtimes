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

window.toLightMode = function() {
  document.documentElement.classList.remove('dark-mode');
  document.getElementById('header__moon').classList.add('d-none');
  document.getElementById('header__sun').classList.remove('d-none');
  setCookie('dark_mode', false, 30);
}

window.toDarkMode = function() {
  document.documentElement.classList.add('dark-mode');
  document.getElementById('header__sun').classList.add('d-none');
  document.getElementById('header__moon').classList.remove('d-none');
  setCookie('dark_mode', true, 30);
}

/*
function toSystemMode() {...}
*/
