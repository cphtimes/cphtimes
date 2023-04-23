/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/darkmode.js ***!
  \**********************************/
function setCookie(cName, cValue, expDays) {
  var date = new Date();
  date.setTime(date.getTime() + expDays * 24 * 60 * 60 * 1000);
  var expires = "expires=" + date.toUTCString();
  document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}

function getCookie(cName) {
  var name = cName + "=";
  var cDecoded = decodeURIComponent(document.cookie); //to be careful

  var cArr = cDecoded.split('; ');
  var res;
  cArr.forEach(function (val) {
    if (val.indexOf(name) === 0) res = val.substring(name.length);
  });
  return res;
}

window.toLightMode = function () {
  document.documentElement.classList.remove('dark-mode');
  document.getElementById('header__moon').classList.add('d-none');
  document.getElementById('header__sun').classList.remove('d-none');
  setCookie('dark_mode', false, 30);
};

window.toDarkMode = function () {
  document.documentElement.classList.add('dark-mode');
  document.getElementById('header__sun').classList.add('d-none');
  document.getElementById('header__moon').classList.remove('d-none');
  setCookie('dark_mode', true, 30);
};
/*
function toSystemMode() {...}
*/
var __webpack_export_target__ = window;
for(var i in __webpack_exports__) __webpack_export_target__[i] = __webpack_exports__[i];
if(__webpack_exports__.__esModule) Object.defineProperty(__webpack_export_target__, "__esModule", { value: true });
/******/ })()
;