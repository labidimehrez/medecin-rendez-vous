window.NREUM||(NREUM={}),__nr_require=function(a,b,c){function d(c){if(!b[c]){var e=b[c]={exports:{}};a[c][0].call(e.exports,function(b){return d(a[c][1][b]||b)},e,e.exports)}return b[c].exports}if("function"==typeof __nr_require)return __nr_require;for(var e=0;e<c.length;e++)d(c[e]);return d}({1:[function(a,b,c){function d(a){try{h.console&&console.log(a)}catch(b){}}var e,f=a("ee"),g=a(15),h={};try{e=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(h.console=!0,-1!==e.indexOf("dev")&&(h.dev=!0),-1!==e.indexOf("nr_dev")&&(h.nrDev=!0))}catch(i){}h.nrDev&&f.on("internal-error",function(a){d(a.stack)}),h.dev&&f.on("fn-err",function(a,b,c){d(c.stack)}),h.dev&&(d("NR AGENT IN DEVELOPMENT MODE"),d("flags: "+g(h,function(a,b){return a}).join(", ")))},{}],2:[function(a,b,c){function d(a,b,c,d,f){try{m?m-=1:g("err",[f||new e(a,b,c)])}catch(i){try{g("ierr",[i,(new Date).getTime(),!0])}catch(j){}}return"function"==typeof k&&k.apply(this,h(arguments))}function e(a,b,c){this.message=a||"Uncaught error with no additional information",this.sourceURL=b,this.line=c}function f(a){g("err",[a,(new Date).getTime()])}var g=a("handle"),h=a(16),i=a("ee"),j=a("loader"),k=window.onerror,l=!1,m=0;j.features.err=!0,a(1),window.onerror=d;try{throw new Error}catch(n){"stack"in n&&(a(8),a(7),"addEventListener"in window&&a(5),j.xhrWrappable&&a(9),l=!0)}i.on("fn-start",function(a,b,c){l&&(m+=1)}),i.on("fn-err",function(a,b,c){l&&(this.thrown=!0,f(c))}),i.on("fn-end",function(){l&&!this.thrown&&m>0&&(m-=1)}),i.on("internal-error",function(a){g("ierr",[a,(new Date).getTime(),!0])})},{}],3:[function(a,b,c){a("loader").features.ins=!0},{}],4:[function(a,b,c){function d(a){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var e=a("ee"),f=a("handle"),g=a(8),h=a(7),i="learResourceTimings",j="addEventListener",k="resourcetimingbufferfull",l="bstResource",m="resource",n="-start",o="-end",p="fn"+n,q="fn"+o,r="bstTimer",s="pushState";a("loader").features.stn=!0,a(6);var t=NREUM.o.EV;e.on(p,function(a,b){a[0]instanceof t&&(this.bstStart=Date.now())}),e.on(q,function(a,b){var c=a[0];c instanceof t&&f("bst",[c,b,this.bstStart,Date.now()])}),g.on(p,function(a,b,c){this.bstStart=Date.now(),this.bstType=c}),g.on(q,function(a,b){f(r,[b,this.bstStart,Date.now(),this.bstType])}),h.on(p,function(){this.bstStart=Date.now()}),h.on(q,function(a,b){f(r,[b,this.bstStart,Date.now(),"requestAnimationFrame"])}),e.on(s+n,function(a){this.time=Date.now(),this.startPath=location.pathname+location.hash}),e.on(s+o,function(a){f("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),j in window.performance&&(window.performance["c"+i]?window.performance[j](k,function(a){f(l,[window.performance.getEntriesByType(m)]),window.performance["c"+i]()},!1):window.performance[j]("webkit"+k,function(a){f(l,[window.performance.getEntriesByType(m)]),window.performance["webkitC"+i]()},!1)),document[j]("scroll",d,!1),document[j]("keypress",d,!1),document[j]("click",d,!1)}},{}],5:[function(a,b,c){function d(a){for(var b=a;b&&!b.hasOwnProperty(k);)b=Object.getPrototypeOf(b);b&&e(b)}function e(a){h.inPlace(a,[k,l],"-",f)}function f(a,b){return a[1]}var g=a("ee").get("events"),h=a(17)(g),i=a("gos"),j=XMLHttpRequest,k="addEventListener",l="removeEventListener";b.exports=g,"getPrototypeOf"in Object?(d(document),d(window),d(j.prototype)):j.prototype.hasOwnProperty(k)&&(e(window),e(j.prototype)),g.on(k+"-start",function(a,b){if(a[1]){var c=a[1];if("function"==typeof c){var d=i(c,"nr@wrapped",function(){return h(c,"fn-",null,c.name||"anonymous")});this.wrapped=a[1]=d}else"function"==typeof c.handleEvent&&h.inPlace(c,["handleEvent"],"fn-")}}),g.on(l+"-start",function(a){var b=this.wrapped;b&&(a[1]=b)})},{}],6:[function(a,b,c){var d=a("ee").get("history"),e=a(17)(d);b.exports=d,e.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(a,b,c){var d=a("ee").get("raf"),e=a(17)(d),f="equestAnimationFrame";b.exports=d,e.inPlace(window,["r"+f,"mozR"+f,"webkitR"+f,"msR"+f],"raf-"),d.on("raf-start",function(a){a[0]=e(a[0],"fn-")})},{}],8:[function(a,b,c){function d(a,b,c){a[0]=g(a[0],"fn-",null,c)}function e(a,b,c){this.method=c,this.timerDuration="number"==typeof a[1]?a[1]:0,a[0]=g(a[0],"fn-",this,c)}var f=a("ee").get("timer"),g=a(17)(f),h="setTimeout",i="setInterval",j="clearTimeout",k="-start",l="-";b.exports=f,g.inPlace(window,[h,"setImmediate"],h+l),g.inPlace(window,[i],i+l),g.inPlace(window,[j,"clearImmediate"],j+l),f.on(i+k,d),f.on(h+k,e)},{}],9:[function(a,b,c){function d(a,b){l.inPlace(b,["onreadystatechange"],"fn-",h)}function e(){var a=this,b=k.context(a);a.readyState>3&&!b.resolved&&(b.resolved=!0,k.emit("xhr-resolved",[],a)),l.inPlace(a,q,"fn-",h)}function f(a){r.push(a),o&&(t=-t,u.data=t)}function g(){for(var a=0;a<r.length;a++)d([],r[a]);r.length&&(r=[])}function h(a,b){return b}function i(a,b){for(var c in a)b[c]=a[c];return b}a(5);var j=a("ee"),k=j.get("xhr"),l=a(17)(k),m=NREUM.o,n=m.XHR,o=m.MO,p="readystatechange",q=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],r=[];b.exports=k;var s=window.XMLHttpRequest=function(a){var b=new n(a);try{k.emit("new-xhr",[b],b),b.addEventListener(p,e,!1)}catch(c){try{k.emit("internal-error",[c])}catch(d){}}return b};if(i(n,s),s.prototype=n.prototype,l.inPlace(s.prototype,["open","send"],"-xhr-",h),k.on("send-xhr-start",function(a,b){d(a,b),f(b)}),k.on("open-xhr-start",d),o){var t=1,u=document.createTextNode(t);new o(g).observe(u,{characterData:!0})}else j.on("fn-end",function(a){a[0]&&a[0].type===p||g()})},{}],10:[function(a,b,c){function d(a){var b=this.params,c=this.metrics;if(!this.ended){this.ended=!0;for(var d=0;d<l;d++)a.removeEventListener(k[d],this.listener,!1);if(!b.aborted){if(c.duration=(new Date).getTime()-this.startTime,4===a.readyState){b.status=a.status;var f=e(a,this.lastSize);if(f&&(c.rxSize=f),this.sameOrigin){var g=a.getResponseHeader("X-NewRelic-App-Data");g&&(b.cat=g.split(", ").pop())}}else b.status=0;c.cbTime=this.cbTime,j.emit("xhr-done",[a],a),h("xhr",[b,c,this.startTime])}}}function e(a,b){var c=a.responseType;if("json"===c&&null!==b)return b;var d="arraybuffer"===c||"blob"===c||"json"===c?a.response:a.responseText;return o(d)}function f(a,b){var c=i(b),d=a.params;d.host=c.hostname+":"+c.port,d.pathname=c.pathname,a.sameOrigin=c.sameOrigin}var g=a("loader");if(g.xhrWrappable){var h=a("handle"),i=a(11),j=a("ee"),k=["load","error","abort","timeout"],l=k.length,m=a("id"),n=a(14),o=a(13),p=window.XMLHttpRequest;g.features.xhr=!0,a(9),j.on("new-xhr",function(a){var b=this;b.totalCbs=0,b.called=0,b.cbTime=0,b.end=d,b.ended=!1,b.xhrGuids={},b.lastSize=null,n&&(n>34||n<10)||window.opera||a.addEventListener("progress",function(a){b.lastSize=a.loaded},!1)}),j.on("open-xhr-start",function(a){this.params={method:a[0]},f(this,a[1]),this.metrics={}}),j.on("open-xhr-end",function(a,b){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&b.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),j.on("send-xhr-start",function(a,b){var c=this.metrics,d=a[0],e=this;if(c&&d){var f=o(d);f&&(c.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(a){try{"abort"===a.type&&(e.params.aborted=!0),("load"!==a.type||e.called===e.totalCbs&&(e.onloadCalled||"function"!=typeof b.onload))&&e.end(b)}catch(c){try{j.emit("internal-error",[c])}catch(d){}}};for(var g=0;g<l;g++)b.addEventListener(k[g],this.listener,!1)}),j.on("xhr-cb-time",function(a,b,c){this.cbTime+=a,b?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof c.onload||this.end(c)}),j.on("xhr-load-added",function(a,b){var c=""+m(a)+!!b;this.xhrGuids&&!this.xhrGuids[c]&&(this.xhrGuids[c]=!0,this.totalCbs+=1)}),j.on("xhr-load-removed",function(a,b){var c=""+m(a)+!!b;this.xhrGuids&&this.xhrGuids[c]&&(delete this.xhrGuids[c],this.totalCbs-=1)}),j.on("addEventListener-end",function(a,b){b instanceof p&&"load"===a[0]&&j.emit("xhr-load-added",[a[1],a[2]],b)}),j.on("removeEventListener-end",function(a,b){b instanceof p&&"load"===a[0]&&j.emit("xhr-load-removed",[a[1],a[2]],b)}),j.on("fn-start",function(a,b,c){b instanceof p&&("onload"===c&&(this.onload=!0),("load"===(a[0]&&a[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),j.on("fn-end",function(a,b){this.xhrCbStart&&j.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,b],b)})}},{}],11:[function(a,b,c){b.exports=function(a){var b=document.createElement("a"),c=window.location,d={};b.href=a,d.port=b.port;var e=b.href.split("://");!d.port&&e[1]&&(d.port=e[1].split("/")[0].split("@").pop().split(":")[1]),d.port&&"0"!==d.port||(d.port="https"===e[0]?"443":"80"),d.hostname=b.hostname||c.hostname,d.pathname=b.pathname,d.protocol=e[0],"/"!==d.pathname.charAt(0)&&(d.pathname="/"+d.pathname);var f=!b.protocol||":"===b.protocol||b.protocol===c.protocol,g=b.hostname===document.domain&&b.port===c.port;return d.sameOrigin=f&&(!b.hostname||g),d}},{}],12:[function(a,b,c){function d(){}function e(a,b,c){return function(){return f(a,[(new Date).getTime()].concat(h(arguments)),b?null:this,c),b?void 0:this}}var f=a("handle"),g=a(15),h=a(16),i=a("ee").get("tracer"),j=NREUM;void 0===window.newrelic&&(newrelic=j);var k=["setPageViewName","setCustomAttribute","finished","addToTrace","inlineHit"],l="api-",m=l+"ixn-";g(k,function(a,b){j[b]=e(l+b,!0,"api")}),j.addPageAction=e(l+"addPageAction",!0),b.exports=newrelic,j.interaction=function(){return(new d).get()};var n=d.prototype={createTracer:function(a,b){var c={},d=this,e="function"==typeof b;return f(m+"tracer",[Date.now(),a,c],d),function(){if(i.emit((e?"":"no-")+"fn-start",[Date.now(),d,e],c),e)try{return b.apply(this,arguments)}finally{i.emit("fn-end",[Date.now()],c)}}}};g("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(a,b){n[b]=e(m+b)}),newrelic.noticeError=function(a){"string"==typeof a&&(a=new Error(a)),f("err",[a,(new Date).getTime()])}},{}],13:[function(a,b,c){b.exports=function(a){if("string"==typeof a&&a.length)return a.length;if("object"==typeof a){if("undefined"!=typeof ArrayBuffer&&a instanceof ArrayBuffer&&a.byteLength)return a.byteLength;if("undefined"!=typeof Blob&&a instanceof Blob&&a.size)return a.size;if(!("undefined"!=typeof FormData&&a instanceof FormData))try{return JSON.stringify(a).length}catch(b){return}}}},{}],14:[function(a,b,c){var d=0,e=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);e&&(d=+e[1]),b.exports=d},{}],15:[function(a,b,c){function d(a,b){var c=[],d="",f=0;for(d in a)e.call(a,d)&&(c[f]=b(d,a[d]),f+=1);return c}var e=Object.prototype.hasOwnProperty;b.exports=d},{}],16:[function(a,b,c){function d(a,b,c){b||(b=0),void 0===c&&(c=a?a.length:0);for(var d=-1,e=c-b||0,f=Array(e<0?0:e);++d<e;)f[d]=a[b+d];return f}b.exports=d},{}],17:[function(a,b,c){function d(a){return!(a&&"function"==typeof a&&a.apply&&!a[g])}var e=a("ee"),f=a(16),g="nr@original",h=Object.prototype.hasOwnProperty,i=!1;b.exports=function(a){function b(a,b,c,e){function h(){var d,g,h,i;try{g=this,d=f(arguments),h="function"==typeof c?c(d,g):c||{}}catch(k){l([k,"",[d,g,e],h])}j(b+"start",[d,g,e],h);try{return i=a.apply(g,d)}catch(m){throw j(b+"err",[d,g,m],h),m}finally{j(b+"end",[d,g,i],h)}}return d(a)?a:(b||(b=""),h[g]=a,k(a,h),h)}function c(a,c,e,f){e||(e="");var g,h,i,j="-"===e.charAt(0);for(i=0;i<c.length;i++)h=c[i],g=a[h],d(g)||(a[h]=b(g,j?h+e:e,f,h))}function j(b,c,d){if(!i){i=!0;try{a.emit(b,c,d)}catch(e){l([e,b,c,d])}i=!1}}function k(a,b){if(Object.defineProperty&&Object.keys)try{return Object.keys(a).forEach(function(c){Object.defineProperty(b,c,{get:function(){return a[c]},set:function(b){return a[c]=b,b}})}),b}catch(d){l([d])}for(var c in a)h.call(a,c)&&(b[c]=a[c]);return b}function l(b){try{a.emit("internal-error",b)}catch(c){}}return a||(a=e),b.inPlace=c,b.flag=g,b}},{}],ee:[function(a,b,c){function d(){}function e(a){function b(a){return a&&a instanceof d?a:a?h(a,g,f):f()}function c(c,d,e){a&&a(c,d,e);for(var f=b(e),g=m(c),h=g.length,i=0;i<h;i++)g[i].apply(f,d);var k=j[q[c]];return k&&k.push([r,c,d,f]),f}function l(a,b){p[a]=m(a).concat(b)}function m(a){return p[a]||[]}function n(a){return k[a]=k[a]||e(c)}function o(a,b){i(a,function(a,c){b=b||"feature",q[c]=b,b in j||(j[b]=[])})}var p={},q={},r={on:l,emit:c,get:n,listeners:m,context:b,buffer:o};return r}function f(){return new d}var g="nr@context",h=a("gos"),i=a(15),j={},k={};(b.exports=e()).backlog=j},{}],gos:[function(a,b,c){function d(a,b,c){if(e.call(a,b))return a[b];var d=c();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(a,b,{value:d,writable:!0,enumerable:!1}),d}catch(f){}return a[b]=d,d}var e=Object.prototype.hasOwnProperty;b.exports=d},{}],handle:[function(a,b,c){function d(a,b,c,d){e.buffer([a],d),e.emit(a,b,c)}var e=a("ee").get("handle");b.exports=d,d.ee=e},{}],id:[function(a,b,c){function d(a){var b=typeof a;return!a||"object"!==b&&"function"!==b?-1:a===window?0:g(a,f,function(){return e++})}var e=1,f="nr@id",g=a("gos");b.exports=d},{}],loader:[function(a,b,c){function d(){if(!t++){var a=s.info=NREUM.info,b=k.getElementsByTagName("script")[0];if(a&&a.licenseKey&&a.applicationID&&b){i(q,function(b,c){a[b]||(a[b]=c)});var c="https"===p.split(":")[0]||a.sslForHttp;s.proto=c?"https://":"http://",h("mark",["onload",g()],null,"api");var d=k.createElement("script");d.src=s.proto+a.agent,b.parentNode.insertBefore(d,b)}}}function e(){"complete"===k.readyState&&f()}function f(){h("mark",["domContent",g()],null,"api")}function g(){return(new Date).getTime()}var h=a("handle"),i=a(15),j=window,k=j.document,l="addEventListener",m="attachEvent",n=j.XMLHttpRequest,o=n&&n.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:n,REQ:j.Request,EV:j.Event,PR:j.Promise,MO:j.MutationObserver},a(12);var p=""+location,q={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-963.min.js"},r=n&&o&&o[l]&&!/CriOS/.test(navigator.userAgent),s=b.exports={offset:g(),origin:p,features:{},xhrWrappable:r};k[l]?(k[l]("DOMContentLoaded",f,!1),j[l]("load",d,!1)):(k[m]("onreadystatechange",e),j[m]("onload",d)),h("mark",["firstbyte",g()],null,"api");var t=0},{}]},{},["loader",2,10,4,3]),NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"2f4e060573",applicationID:"16915401",sa:1};