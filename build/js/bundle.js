document.addEventListener("DOMContentLoaded",()=>{const e=document.getElementById("label-check"),n=document.getElementById("contenido");e.addEventListener("click",()=>{n.classList.toggle("oculto")})}),function(e,n,A){function o(e,n){return typeof e===n}function t(e){var n=l.className,A=u._config.classPrefix||"";if(r&&(n=n.baseVal),u._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}u._config.enableClasses&&(n+=" "+A+e.join(" "+A),r?l.className.baseVal=n:l.className=n)}function a(e,n){if("object"==typeof e)for(var A in e)i(e,A)&&a(A,e[A]);else{var o=(e=e.toLowerCase()).split("."),s=u[o[0]];if(2==o.length&&(s=s[o[1]]),void 0!==s)return u;n="function"==typeof n?n():n,1==o.length?u[o[0]]=n:(!u[o[0]]||u[o[0]]instanceof Boolean||(u[o[0]]=new Boolean(u[o[0]])),u[o[0]][o[1]]=n),t([(n&&0!=n?"":"no-")+o.join("-")]),u._trigger(e,n)}return u}var i,s=[],l=n.documentElement,r="svg"===l.nodeName.toLowerCase(),c=[],f={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout((function(){n(A[e])}),0)},addTest:function(e,n,A){c.push({name:e,fn:n,options:A})},addAsyncTest:function(e){c.push({name:null,fn:e})}},u=function(){};u.prototype=f,u=new u,function(){var e={}.hasOwnProperty;i=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),f._l={},f.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),u.hasOwnProperty(e)&&setTimeout((function(){u._trigger(e,u[e])}),0)},f._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout((function(){var e;for(e=0;e<A.length;e++)(0,A[e])(n)}),0),delete this._l[e]}},u._q.push((function(){f.addTest=a})),u.addAsyncTest((function(){function e(e,n,A){function o(n){var o=!(!n||"load"!==n.type)&&1==t.width;a(e,"webp"===e&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,(function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)}))})),function(){var e,n,A,t,a,i;for(var l in c)if(c.hasOwnProperty(l)){if(e=[],(n=c[l]).name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)1===(i=e[a].split(".")).length?u[i[0]]=t:(!u[i[0]]||u[i[0]]instanceof Boolean||(u[i[0]]=new Boolean(u[i[0]])),u[i[0]][i[1]]=t),s.push((t?"":"no-")+i.join("-"))}}(),t(s),delete f.addTest,delete f.addAsyncTest;for(var d=0;d<u._q.length;d++)u._q[d]();e.Modernizr=u}(window,document);
//# sourceMappingURL=bundle.js.map
