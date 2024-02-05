const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js("resources/js/app.js", "public/js")
  .postCss("resources/css/app.css", "public/css")
  .sass("resources/scss/theme.scss", "public/css")
  .js("resources/js/theme-switcher.js", "public/js")
  .css("resources/icons/around-icons.min.css", "public/icons");

mix.webpackConfig({
  output: {
    library: "libraryName",
    libraryTarget: "umd",
    umdNamedDefine: true, // optional
    globalObject: "this", // optional
  },
});
