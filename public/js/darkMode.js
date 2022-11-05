(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define("libraryName", [], factory);
	else if(typeof exports === 'object')
		exports["libraryName"] = factory();
	else
		root["libraryName"] = factory();
})(this, function() {
return /******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/darkMode.js ***!
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
/******/ 	return __webpack_exports__;
/******/ })()
;
});