window.$ = require('jquery');
window.jQuery = window.$;

var App = require('./app');
var views = {};

views.home = require('./views/home');

$(function () {
    var $app = $('body');
    Object.create(App, {el: {value: $app}}).init();
    Object.create(views[$app.data('view')], {el: {value: $app}}).init();
});
