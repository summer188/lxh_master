!function a(b,c,d){function e(g,h){if(!c[g]){if(!b[g]){var i="function"==typeof require&&require;if(!h&&i)return i(g,!0);if(f)return f(g,!0);throw new Error("Cannot find module '"+g+"'")}var j=c[g]={exports:{}};b[g][0].call(j.exports,function(a){var c=b[g][1][a];return e(c?c:a)},j,j.exports,a,b,c,d)}return c[g].exports}for(var f="function"==typeof require&&require,g=0;g<d.length;g++)e(d[g]);return e}({1:[function(){"use strict";var a=window.jQuery;a(function(){function a(a,b,c){var d,e;return function(){var f=this,g=arguments,h=function(){d=null,c||(e=a.apply(f,g))},i=c&&!d;return clearTimeout(d),d=setTimeout(h,b),i&&(e=a.apply(f,g)),e}}var b=document.getElementById("bg"),c=new Image;c.src=b.getAttribute("data-src"),c.id="bg";var d=null,e=a(function(){b.parentNode&&b.parentNode.replaceChild(c,b);var a=window.innerWidth||document.documentElement.offsetWidth,e=Math.max(a,1585),f=e/d;c.width=e,c.height=f,c.style.marginTop=0-(f-830)/1.5+"px",c.style.marginLeft=0-(e-a)/2+"px"}),f=(new Date).valueOf();c.onload=function(){window._gaq.push(["_trackEvent","bonjourImage","downloadDuration",null,(new Date).valueOf()-f,!0]),d=2122/1192,e(),document.getElementById("userCount").setAttribute("class","")},window.onresize=e}),a(function(){function b(a){var b=a*e;f.animate({left:0-b},500),c()}function c(){h&&(clearTimeout(h),h=null),h=setTimeout(function(){b(++g%d.size())},3e3)}var d=a(".slides img"),e=d.eq(0).width(),f=a(".slides"),g=0,h=null;b(0)})},{}]},{},[1]);