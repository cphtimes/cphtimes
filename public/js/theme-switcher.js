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
/*!****************************************!*\
  !*** ./resources/js/theme-switcher.js ***!
  \****************************************/
/**
 * Switch between light and dark themes (color modes)
 * Copyright 2023 Createx Studio
 */
(function () {
  'use strict';

  var getStoredTheme = function getStoredTheme() {
    return localStorage.getItem('theme');
  };

  var setStoredTheme = function setStoredTheme(theme) {
    return localStorage.setItem('theme', theme);
  };

  var getPreferredTheme = function getPreferredTheme() {
    var storedTheme = getStoredTheme();

    if (storedTheme) {
      return storedTheme;
    } // Set default theme to 'light'.
    // Possible options: 'dark' or system color mode (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')


    return 'light';
  };

  var setTheme = function setTheme(theme) {
    if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      document.documentElement.setAttribute('data-bs-theme', 'dark');
    } else {
      document.documentElement.setAttribute('data-bs-theme', theme);
    }
  };

  setTheme(getPreferredTheme());

  var showActiveTheme = function showActiveTheme(theme) {
    var themeSwitcher = document.querySelector('[data-bs-toggle="mode"]');

    if (!themeSwitcher) {
      return;
    }

    var themeSwitcherCheck = themeSwitcher.querySelector('input[type="checkbox"]');

    if (theme === 'dark') {
      themeSwitcherCheck.checked = 'checked';
    } else {
      themeSwitcherCheck.checked = false;
    }
  };

  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function () {
    var storedTheme = getStoredTheme();

    if (storedTheme !== 'light' && storedTheme !== 'dark') {
      setTheme(getPreferredTheme());
    }
  });
  window.addEventListener('DOMContentLoaded', function () {
    showActiveTheme(getPreferredTheme());
    document.querySelectorAll('[data-bs-toggle="mode"]').forEach(function (toggle) {
      toggle.addEventListener('click', function () {
        var theme = toggle.querySelector('input[type="checkbox"]').checked === true ? 'dark' : 'light';
        setStoredTheme(theme);
        setTheme(theme);
        showActiveTheme(theme, true);
      });
    });
  });
})();
/******/ 	return __webpack_exports__;
/******/ })()
;
});