/**
 * @license RequireJS domReady 2.0.1 Copyright (c) 2010-2012, The Dojo Foundation All Rights Reserved.
 * Available via the MIT or new BSD license.
 * see: http://github.com/requirejs/domReady for details
 */
/*jslint */
/*global require: false, define: false, requirejs: false,
  window: false, clearInterval: false, document: false,
  self: false, setInterval: false */

define(function(){"use strict";var n,e,t,o="undefined"!=typeof window&&window.document,d=!o,i=o?document:null,c=[];function a(){var n=c;d&&n.length&&(c=[],function(n){var e;for(e=0;e<n.length;e+=1)n[e](i)}(n))}function l(){d||(d=!0,t&&clearInterval(t),a())}if(o){if(document.addEventListener)document.addEventListener("DOMContentLoaded",l,!1),window.addEventListener("load",l,!1);else if(window.attachEvent){window.attachEvent("onload",l),e=document.createElement("div");try{n=null===window.frameElement}catch(n){}e.doScroll&&n&&window.external&&(t=setInterval(function(){try{e.doScroll(),l()}catch(n){}},30))}"complete"===document.readyState&&l()}function r(n){return d?n(i):c.push(n),r}return r.version="2.0.1",r.load=function(n,e,t,o){o.isBuild?t(null):r(t)},r});
