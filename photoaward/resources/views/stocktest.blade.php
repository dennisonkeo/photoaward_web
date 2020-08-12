<html itemscope="" itemtype="http://schema.org/Product" class="wf-museosans-n1-active wf-museosans-n3-active wf-museosans-i3-active wf-museosans-n5-active wf-museosans-n7-active wf-museosans-i7-active wf-museosans-n9-active wf-active" lang="en">
   <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Twenty20 Stock - Authentic Stock Photos & Royalty-Free Images</title>
    <script type="text/javascript">
      window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(23),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,s){try{l?l-=1:o(s||new UncaughtException(t,e,n),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t,e){var n=e?null:c.now();i("err",[t,n])}var i=t("handle"),a=t(24),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,p="nr@seenError",l=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(13),t(12),"addEventListener"in window&&t(6),c.xhrWrappable&&t(14),d=!0)}s.on("fn-start",function(t,e,n){d&&(l+=1)}),s.on("fn-err",function(t,e,n){d&&!n[p]&&(f(n,p,function(){return!0}),this.thrown=!0,o(n))}),s.on("fn-end",function(){d&&!this.thrown&&l>0&&(l-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(){j++,L=y.hash,this[u]=x.now()}function o(){j--,y.hash!==L&&i(0,!0);var t=x.now();this[h]=~~this[h]+t-this[u],this[d]=t}function i(t,e){E.emit("newURL",[""+y,e])}function a(t,e){t.on(e,function(){this[e]=x.now()})}var s="-start",c="-end",f="-body",u="fn"+s,d="fn"+c,p="cb"+s,l="cb"+c,h="jsTime",m="fetch",v="addEventListener",w=window,y=w.location,x=t("loader");if(w[v]&&x.xhrWrappable){var g=t(10),b=t(11),E=t(8),R=t(6),O=t(13),C=t(7),P=t(14),T=t(9),N=t("ee"),S=N.get("tracer");t(16),x.features.spa=!0;var L,j=0;N.on(u,r),N.on(p,r),N.on(d,o),N.on(l,o),N.buffer([u,d,"xhr-done","xhr-resolved"]),R.buffer([u]),O.buffer(["setTimeout"+c,"clearTimeout"+s,u]),P.buffer([u,"new-xhr","send-xhr"+s]),C.buffer([m+s,m+"-done",m+f+s,m+f+c]),E.buffer(["newURL"]),g.buffer([u]),b.buffer(["propagate",p,l,"executor-err","resolve"+s]),S.buffer([u,"no-"+u]),T.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"]),a(P,"send-xhr"+s),a(N,"xhr-resolved"),a(N,"xhr-done"),a(C,m+s),a(C,m+"-done"),a(T,"new-jsonp"),a(T,"jsonp-end"),a(T,"cb-start"),E.on("pushState-end",i),E.on("replaceState-end",i),w[v]("hashchange",i,!0),w[v]("load",i,!0),w[v]("popstate",function(){i(0,j>1)},!0)}},{}],5:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(13),s=t(12),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",p="resource",l="-start",h="-end",m="fn"+l,v="fn"+h,w="bstTimer",y="pushState",x=t("loader");x.features.stn=!0,t(8);var g=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof g&&(this.bstStart=x.now())}),o.on(v,function(t,e){var n=t[0];n instanceof g&&i("bst",[n,e,this.bstStart,x.now()])}),a.on(m,function(t,e,n){this.bstStart=x.now(),this.bstType=n}),a.on(v,function(t,e){i(w,[e,this.bstStart,x.now(),this.bstType])}),s.on(m,function(){this.bstStart=x.now()}),s.on(v,function(t,e){i(w,[e,this.bstStart,x.now(),"requestAnimationFrame"])}),o.on(y+l,function(t){this.time=x.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],6:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t(26)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=c(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?s(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],7:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=r.apply(this,arguments);return o.emit(n+"start",arguments,t),t.then(function(e){return o.emit(n+"end",[null,e],t),e},function(e){throw o.emit(n+"end",[e],t),e})})}var o=t("ee").get("fetch"),i=t(23);e.exports=o;var a=window,s="fetch-",c=s+"body-",f=["arrayBuffer","blob","json","text","formData"],u=a.Request,d=a.Response,p=a.fetch,l="prototype";u&&d&&p&&(i(f,function(t,e){r(u[l],e,c),r(d[l],e,c)}),r(a,"fetch",s),o.on(s+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),o.emit(s+"done",[null,e],n)}else o.emit(s+"done",[t],n)}))},{}],8:[function(t,e,n){var r=t("ee").get("history"),o=t(26)(r);e.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],9:[function(t,e,n){function r(t){function e(){c.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}function n(){c.emit("jsonp-error",[],p),c.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}var r=t&&"string"==typeof t.nodeName&&"script"===t.nodeName.toLowerCase();if(r){var o="function"==typeof t.addEventListener;if(o){var a=i(t.src);if(a){var u=s(a),d="function"==typeof u.parent[u.key];if(d){var p={};f.inPlace(u.parent,[u.key],"cb-",p),t.addEventListener("load",e,!1),t.addEventListener("error",n,!1),c.emit("new-jsonp",[t.src],p)}}}}}function o(){return"addEventListener"in window}function i(t){var e=t.match(u);return e?e[1]:null}function a(t,e){var n=t.match(p),r=n[1],o=n[3];return o?a(o,e[r]):e[r]}function s(t){var e=t.match(d);return e&&e.length>=3?{key:e[2],parent:a(e[1],window)}:{key:t,parent:window}}var c=t("ee").get("jsonp"),f=t(26)(c);if(e.exports=c,o()){var u=/[?&](?:callback|cb)=([^&#]+)/,d=/(.*)\.([^.]+)/,p=/^(\w+)(\.|$)(.*)$/,l=["appendChild","insertBefore","replaceChild"];Node&&Node.prototype&&Node.prototype.appendChild?f.inPlace(Node.prototype,l,"dom-"):(f.inPlace(HTMLElement.prototype,l,"dom-"),f.inPlace(HTMLHeadElement.prototype,l,"dom-"),f.inPlace(HTMLBodyElement.prototype,l,"dom-")),c.on("dom-start",function(t){r(t[0])})}},{}],10:[function(t,e,n){var r=t("ee").get("mutation"),o=t(26)(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],11:[function(t,e,n){function r(t){var e=a.context(),n=s(t,"executor-",e),r=new f(n);return a.context(r).getCtx=function(){return e},a.emit("new-promise",[r,e],e),r}function o(t,e){return e}var i=t(26),a=t("ee").get("promise"),s=i(a),c=t(23),f=NREUM.o.PR;e.exports=a,f&&(window.Promise=r,["all","race"].forEach(function(t){var e=f[t];f[t]=function(n){function r(t){return function(){a.emit("propagate",[null,!o],i),o=o||!t}}var o=!1;c(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var i=e.apply(f,arguments),s=f.resolve(i);return s}}),["resolve","reject"].forEach(function(t){var e=f[t];f[t]=function(t){var n=e.apply(f,arguments);return t!==n&&a.emit("propagate",[t,!0],n),n}}),f.prototype["catch"]=function(t){return this.then(null,t)},f.prototype=Object.create(f.prototype,{constructor:{value:r}}),c(Object.getOwnPropertyNames(f),function(t,e){try{r[e]=f[e]}catch(n){}}),a.on("executor-start",function(t){t[0]=s(t[0],"resolve-",this),t[1]=s(t[1],"resolve-",this)}),a.on("executor-err",function(t,e,n){t[1](n)}),s.inPlace(f.prototype,["then"],"then-",o),a.on("then-start",function(t,e){this.promise=e,t[0]=s(t[0],"cb-",this),t[1]=s(t[1],"cb-",this)}),a.on("then-end",function(t,e,n){this.nextPromise=n;var r=this.promise;a.emit("propagate",[r,!0],n)}),a.on("cb-end",function(t,e,n){a.emit("propagate",[n,!0],this.nextPromise)}),a.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=a.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+f})},{}],12:[function(t,e,n){var r=t("ee").get("raf"),o=t(26)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],13:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(26)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],14:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){x.push(t),h&&(b?b.then(a):v?v(a):(E=-E,R.data=E))}function a(){for(var t=0;t<x.length;t++)r([],x[t]);x.length&&(x=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(6);var f=t("ee"),u=f.get("xhr"),d=t(26)(u),p=NREUM.o,l=p.XHR,h=p.MO,m=p.PR,v=p.SI,w="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],x=[];e.exports=u;var g=window.XMLHttpRequest=function(t){var e=new l(t);try{u.emit("new-xhr",[e],e),e.addEventListener(w,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(l,g),g.prototype=l.prototype,d.inPlace(g.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!v&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],15:[function(t,e,n){function r(){var t=window.NREUM,e=t.info.accountID||null,n=t.info.agentID||null,r=t.info.trustKey||null,i="btoa"in window&&"function"==typeof window.btoa;if(!e||!n||!i)return null;var a={v:[0,1],d:{ty:"Browser",ac:e,ap:n,id:o.generateCatId(),tr:o.generateCatId(),ti:Date.now()}};return r&&e!==r&&(a.d.tk=r),btoa(JSON.stringify(a))}var o=t(21);e.exports={generateTraceHeader:r}},{}],16:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<l;r++)t.removeEventListener(p[r],this.listener,!1);e.aborted||(n.duration=s.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):a(this,t),n.cbTime=this.cbTime,d.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime]))}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return v(r)}function i(t,e){var n=f(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}function a(t,e){t.params.status=e.status;var n=o(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var s=t("loader");if(s.xhrWrappable){var c=t("handle"),f=t(17),u=t(15).generateTraceHeader,d=t("ee"),p=["load","error","abort","timeout"],l=p.length,h=t("id"),m=t(20),v=t(19),w=window.XMLHttpRequest;s.features.xhr=!0,t(14),d.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,t.addEventListener("load",function(n){a(e,t)},!1),m&&(m>34||m<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),d.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),d.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=!1;if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=!!NREUM.init.distributed_tracing.enabled),n&&this.sameOrigin){var r=u();r&&e.setRequestHeader("newrelic",r)}}),d.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=v(r);i&&(n.txSize=i)}this.startTime=s.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{d.emit("internal-error",[n])}catch(r){}}};for(var a=0;a<l;a++)e.addEventListener(p[a],this.listener,!1)}),d.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),d.on("xhr-load-added",function(t,e){var n=""+h(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),d.on("xhr-load-removed",function(t,e){var n=""+h(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),d.on("addEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&d.emit("xhr-load-added",[t[1],t[2]],e)}),d.on("removeEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&d.emit("xhr-load-removed",[t[1],t[2]],e)}),d.on("fn-start",function(t,e,n){e instanceof w&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=s.now()))}),d.on("fn-end",function(t,e){this.xhrCbStart&&d.emit("xhr-cb-time",[s.now()-this.xhrCbStart,this.onload,e],e)})}},{}],17:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],18:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[f.now()].concat(s(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(23),s=t(24),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(t,e){u[e]=o(p+e,!0,"api")}),u.addPageAction=o(p+"addPageAction",!0),u.setCurrentRouteName=o(p+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[f.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return e.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],n),t}finally{c.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=o(l+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,e])}},{}],19:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],20:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],21:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",s=0;s<i.length;s++)o=i[s],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&Uint8Array&&(e=r.getRandomValues(new Uint8Array(31)));for(var o=[],i=0;i<16;i++)o.push(t().toString(16));return o.join("")}e.exports={generateUuid:r,generateCatId:o}},{}],22:[function(t,e,n){function r(t,e){if(!o)return!1;if(t!==o)return!1;if(!e)return!0;if(!i)return!1;for(var n=i.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}e.exports={agent:o,version:i,match:r}},{}],23:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],24:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],25:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],26:[function(t,e,n){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(24),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;e.exports=function(t,e){function n(t,e,n,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof n?n(r,a):n||{}}catch(f){p([f,"",[r,a,o],s])}u(e+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(e+"err",[r,a,d],s),d}finally{u(e+"end",[r,a,c],s)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,e,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<e.length;c++)s=e[c],a=t[s],r(a)||(t[s]=n(a,f?s+o:o,i,s))}function u(n,r,o){if(!c||e){var i=c;c=!0;try{t.emit(n,r,o,e)}catch(a){p([a,n,r,o])}c=i}}function d(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){p([r])}for(var o in t)s.call(t,o)&&(e[o]=t[o]);return e}function p(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),n.inPlace=f,n.flag=a,n}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function n(n,r,o,i){if(!p.aborted||i){t&&t(n,r,o);for(var a=e(o),s=m(n),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[x[n]];return d&&d.push([g,n,r,a]),a}}function l(t,e){y[t]=m(t).concat(e)}function h(t,e){var n=y[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return y[t]||[]}function v(t){return d[t]=d[t]||o(n)}function w(t,e){f(t,function(t,n){e=e||"feature",x[n]=e,e in u||(u[e]=[])})}var y={},x={},g={on:l,addEventListener:l,removeEventListener:h,emit:n,get:v,listeners:m,context:e,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(p.aborted=!0,u=p.backlog={})}var s="nr@context",c=t("gos"),f=t(23),u={},d={},p=e.exports=o();p.backlog=u},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!E++){var t=b.info=NREUM.info,e=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(x,function(e,n){t[e]||(t[e]=n)}),c("mark",["onload",a()+b.offset],null,"api");var n=l.createElement("script");n.src="https://"+t.agent,e.parentNode.insertBefore(n,e)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return R.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(23),u=t("ee"),d=t(22),p=window,l=p.document,h="addEventListener",m="attachEvent",v=p.XMLHttpRequest,w=v&&v.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:v,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var y=""+location,x={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1130.min.js"},g=v&&w&&w[h]&&!/CriOS/.test(navigator.userAgent),b=e.exports={offset:s,now:a,origin:y,features:{},xhrWrappable:g,userAgent:d};t(18),l[h]?(l[h]("DOMContentLoaded",i,!1),p[h]("load",r,!1)):(l[m]("onreadystatechange",o),p[m]("onload",r)),c("mark",["firstbyte",s],null,"api");var E=0,R=t(25)},{}]},{},["loader",2,16,5,3,4]);
      ;NREUM.loader_config={accountID:"697845",trustKey:"6111",agentID:"400093202",licenseKey:"4eb2c2ee8f",applicationID:"400093202"}
      ;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"4eb2c2ee8f",applicationID:"400093202",sa:1}
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="fragment" content="!">

    
<meta name="twenty20-digital/config/environment" content="%7B%22modulePrefix%22%3A%22twenty20-digital%22%2C%22environment%22%3A%22production%22%2C%22rootURL%22%3A%22%2F%22%2C%22locationType%22%3A%22auto%22%2C%22EmberENV%22%3A%7B%22ENABLE_DS_FILTER%22%3Atrue%2C%22EXTEND_PROTOTYPES%22%3Atrue%2C%22FEATURES%22%3A%7B%7D%7D%2C%22APP%22%3A%7B%22name%22%3A%22twenty20-digital%22%2C%22version%22%3A%220.0.2%22%7D%2C%22i18n%22%3A%7B%22defaultLocale%22%3A%22en%22%2C%22defaultFallback%22%3Atrue%7D%2C%22contentSecurityPolicy%22%3A%7B%22default-src%22%3A%22'none'%22%2C%22script-src%22%3A%22'self'%20'unsafe-eval'%20'unsafe-inline'%20js.stripe.com%20checkout.stripe.com%20use.typekit.net%20dp3ogl28gtjh0.cloudfront.net%20cdn.segment.io%20www.google-analytics.com%20maps.googleapis.com%20%22%2C%22frame-src%22%3A%22js.stripe.com%20checkout.stripe.com%20dialog.filepicker.io%20www.filepicker.io%22%2C%22font-src%22%3A%22'self'%20fonts.gstatic.com%20www.twenty20.com%20data%3A%22%2C%22connect-src%22%3A%22'self'%20api-v2.twenty20.com%20staging-api-v2.twenty20.com%20checkout.stripe.com%20ajax.cdnjs.com%20api.segment.io%20d24ilbxry44jok.cloudfront.net%20widget.cloudinary.com%20app.getsentry.com%22%2C%22img-src%22%3A%22'self'%20*%20data%3A%20app.getsentry.com%22%2C%22style-src%22%3A%22'self'%20'unsafe-inline'%20fonts.googleapis.com%20use.typekit.net%22%2C%22media-src%22%3A%22'self'%20dp3ogl28gtjh0.cloudfront.net%22%2C%22object-src%22%3A%22cdnjs.cloudflare.com%22%7D%2C%22SEARCH_ENDPOINT%22%3A%22search%22%2C%22SOLR_SEARCH%22%3A%22false%22%2C%22API_HOST%22%3A%22https%3A%2F%2Fapi-v2.twenty20.com%22%2C%22API_V3_HOST%22%3A%22https%3A%2F%2Fapi-v3.twenty20.com%22%2C%22APPLE_SIGNIN_CLIENTID%22%3A%22com.twenty20.webapp%22%2C%22APPLE_SIGNIN_REDIRECT_URI%22%3A%22https%3A%2F%2Fwww.twenty20.com%2Fsso%2Fapple%22%2C%22PIXELS_HOST%22%3A%22https%3A%2F%2Fdc4fj9o1wzm3u.cloudfront.net%22%2C%22UPLOAD_HOST%22%3A%22https%3A%2F%2Fd24ilbxry44jok.cloudfront.net%22%2C%22COMP_HOST%22%3A%22https%3A%2F%2Fdigital-comp.twenty20.com%22%2C%22ENVATO_SSO_SERVER%22%3A%22https%3A%2F%2Faccount.envato.com%22%2C%22ELEMENTS_ACCOUNT_URL%22%3A%22https%3A%2F%2Faccount.elements.envato.com%22%2C%22ELEMENTS_PRICING_URL%22%3A%22https%3A%2F%2Felements.envato.com%2Ftwenty20%2Fconnect%22%2C%22OAUTH_FACEBOOK_CLIENT_ID%22%3A%22421986587813170%22%2C%22OAUTH_INSTAGRAM_CLIENT_ID%22%3A%220582843ecca8460b8034c9e50388dea9%22%2C%22FILEPICKER_API_KEY%22%3A%22AuvE5RQc0SF26ucbFUaDDz%22%2C%22STRIPE_PUBLISHABLE_KEY%22%3A%22pk_live_xpg13zMyJgibTEeq71wxoH1t00paLwqW7l%22%2C%22SEGMENTIO_API_KEY%22%3A%22l4o2od3lg2%22%2C%22SENTRY_DSN_KEY%22%3A%22https%3A%2F%2Fda8301b8318d4ca8aa3e9969aa86b1ab%40sentry.io%2F1339230%22%2C%22GRID_ROW_HEIGHT%22%3A250%2C%22robots%22%3A%22index%2Call%2Cfollow%22%2C%22ember-cli-mirage%22%3A%7B%22usingProxy%22%3Afalse%2C%22useDefaultPassthroughs%22%3Atrue%7D%7D" />

    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
    <link rel="mask-icon" href="/twenty20-icon.svg" color="#1488C9">
    <link rel="apple-touch-icon-precomposed" href="https://d2xoeue6rlgwc6.cloudfront.net/https://dp3ogl28gtjh0.cloudfront.net/rebrand/apple-touch-icon-f3c3b68ebe75d6ac43bce1cb65331b1f.png">
    <link rel="apple-touch-icon" href="https://d2xoeue6rlgwc6.cloudfront.net/https://dp3ogl28gtjh0.cloudfront.net/rebrand/apple-touch-icon-f3c3b68ebe75d6ac43bce1cb65331b1f.png">

    <link rel="dns-prefetch" href="//api-v2.twenty20.com">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="twenty20.com">

    <meta property="fb:app_id" content="421986587813170">

    <meta name="twitter:site" content="@twenty20app">
    <meta name="twitter:card" content="photo">
    <meta name="twitter:app:name:iphone" content="Twenty20">
    <meta name="twitter:app:id:iphone" content="577323200">

    <link rel="stylesheet" href="https://d2xoeue6rlgwc6.cloudfront.net/assets/vendor-74a2c6f27f72fbcd4e6f96f62a071b7a.css">
    <link rel="stylesheet" href="https://d2xoeue6rlgwc6.cloudfront.net/assets/twenty20-digital-08e43b34196b6e0336d86d45cb1daa05.css">

        <style type="text/css">
    html,
body {
  /*width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  font-size: 10px;
  background: #1b2431;*/
}

.wrapper {
  width: 90vw;
  height: 90vh;
  margin: 5vh auto 5vh auto;
  display: grid;
  grid-template-rows: 25% 25% 25% 25%;
  grid-template-columns: 25% 25% 25% 25%;
  grid-gap: 1rem;

}

.wrapper .grid-box {
  background: #ff6e48;
  transition: all 250ms;
  font-size: 5rem;
  color: white;
  font-family: sans-serif;
  box-shadow: 0 0.1rem 0.3rem rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  animation: fadein 1s ease-out normal backwards;
}

.image_gal {
  /*background: #ff6e48;*/
  transition: all 250ms;
  font-size: 5rem;
  color: white;
  font-family: sans-serif;
  /*box-shadow: 0 0.1rem 0.3rem rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);*/
  animation: fadein 2s ease-out normal backwards;
}

.image_gal:hover {
  z-index: 2;
  position: relative;
  box-shadow: 0 1.5rem 2.8rem rgba(0, 0, 0, 0.15),
    0 1rem 1rem rgba(0, 0, 0, 0.15);
  transform: translate(0, -0.5rem) scale(1.01);
}

.element1 {
  /*grid-area: box1;*/
  /*background: #ff6e48;*/
  animation-delay: 0;
}
.element2 {
  /*grid-area: box2;*/
  animation-delay: 200ms;
}
.element3 {
  /*grid-area: box3;*/
  animation-delay: 400ms;
}
.element4 {
  /*grid-area: box4;*/
  animation-delay: 600ms;
}
.element5 {
  /*grid-area: box5;*/
  animation-delay: 800ms;
}
.element6 {
  /*grid-area: box6;*/
  animation-delay: 1000ms;
}
.element7 {
  /*grid-area: box7;*/
  animation-delay: 1200ms;
}
.element8 {
  /*grid-area: box8;*/
  animation-delay: 1400ms;
}
.wrapper .element9 {
  grid-area: box9;
  animation-delay: 400ms;
}
.wrapper .element10 {
  grid-area: box10;
  animation-delay: 500ms;
}

@keyframes fadein {
  0% {
    transform: scale(0);
  }
  70% {
    transform: scale(1.05);
  }
  100% {
    transform: scale(1);
  }
}

  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   </head>
   <body class="ember-application explore explore-signature" style="padding-top: 62px;">
      <script type="text/javascript" src="//use.typekit.net/ryt2nll.js"></script>
      <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
      <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
      <script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion_async.js" charset="utf-8"></script>
      <!-- segment -->
      <script type="text/javascript">
         !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t,e){var n=document.createElement("script");n.type="text/javascript";n.async=!0;n.src="https://cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.1.0";}}();
      </script>
      <script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5683134"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>
      <noscript><img src="//bat.bing.com/action/0?ti=5683134&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
      <script src="https://d2xoeue6rlgwc6.cloudfront.net/assets/vendor-88c00f99a64532dd87dee9ed54a90886.js"></script>
      <script src="https://d2xoeue6rlgwc6.cloudfront.net/assets/twenty20-digital-de55146a908b80d7fc58e13c95c3c8d5.js"></script>
      <noscript>
         <div class="js-off-message" style="margin: 20% auto; display: block; width: 100%; max-width: 600px; background: #fff; padding: 3%;">
            <img src="images/log_o.png">
            <h3>Your JavaScript is Disabled!</h3>
            <p>Picture+254 is a modern website that requires JavaScript to be turned on in order to access.  Simply go to your browser preferences and turn JavaScript on, then refresh this page.</p>
         </div>
      </noscript>
      <div id="ember-bootstrap-wormhole"></div>
      <iframe name="stripeXDM_default471342_provider" id="stripeXDM_default471342_provider" aria-hidden="true" style="position: absolute; top: -2000px; left: 0px;" src="" frameborder="0"></iframe>
      <div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.5001258693624684"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.16039591973490408" alt="" src="https://bat.bing.com/action/0?ti=5683134&amp;Ver=2&amp;mid=3501173b-328a-d194-5c46-e02c140473e0&amp;sid=60149c19-117d-259d-9682-7c020ec47404&amp;pi=1001431019&amp;lg=en-US&amp;sw=1366&amp;sh=768&amp;sc=24&amp;tl=Twenty20%20Stock%20-%20Authentic%20Stock%20Photos%20%26%20Royalty-Free%20Images&amp;p=https%3A%2F%2Fwww.twenty20.com%2F&amp;r=&amp;lt=12415&amp;evt=pageLoad&amp;msclkid=N&amp;sv=1&amp;rn=542378" width="0" height="0"></div>
      <iframe src="https://js.stripe.com/v2/m/outer.html#referrer=&amp;title=Twenty20%20Stock%20-%20Authentic%20Stock%20Photos%20%26%20Royalty-Free%20Images&amp;url=https%3A%2F%2Fwww.twenty20.com%2F&amp;muid=61796979-de6b-4f76-b6e4-c45d7d8195f0&amp;sid=92676f67-5177-4f3b-af8a-f2036f3a9a09&amp;preview=false&amp;" style="width: 1px !important; height: 1px !important; position: fixed !important; visibility: hidden !important; pointer-events: none !important;" allowtransparency="true" scrolling="no" tabindex="-1" aria-hidden="true" frameborder="0"></iframe>
      <div id="ember667" class="ember-view">
      <div class="ember-view-wrap">
      <div id="ember1255" class="navbar-zone top-bar-component ember-view">
			@include('stockNav')
      </div>
      <div class="main">
      <div class="container-fluid">
      <div id="ember1381" class="personalized-home-component ember-view">
      <!----><!---->
      <div class="row">
         <div class="col-md-12">
            <h3 class="normal">Picture+254 Photography MarketPlace</h3>
            <hr style="margin-top: 5px;" class="light">
         </div>
         <!---->
      </div>
      <div style="margin-bottom: 60px;">
         <div class="row">
         	<?php $count = 1;?>
            @foreach($categories as $category)
            <div class="col-xs-12 col-sm-3 image_gal element{{ $count }}">
               <div style="margin-bottom: 0px;" id="ember1730" class="photo-card linked-collection-component ember-view">
                  <a style="" href="{{ route('explore',$category->name) }}" id="ember1731" class="link-to-component ember-view">
                     <div style="position: relative; background-size: cover !important; width:100%; height:100%; ; background: url({{ asset('images') }}/{{ $category->cover }}) no-repeat center center;" id="ember1732" class="photo-background-component photo-background-component ember-view">
                        <div class="overlay-container ">
                           <div class="overlay-centered">
                              <h5 class="title-over-image">{{ $category->name }}</h5>
                              <p style="color: #ff0051;" class="pannel-head">({{ count($category->uploads) }}) photos</p>
                           </div>
                        </div>
                        <span class="dark-overlay-block"></span>
                     </div>
                  </a>
               </div>
               <p style="margin-bottom: 20px;" class="small"><a style="color: black;" target="_blank" href="/collections/624885?t20p=explore.signature" id="ember1737" class="link-to-component ember-view"><span style="color: #0089d0;">{{ $category->name }}</span></a></p>
            </div>
            <?php $count++;?>
            @endforeach

         </div>
      </div>
        <div class="container" style="text-align: center;">
        <div class="wfont" style="font-size:14px;font-family:'Montserrat', sans-serif;">&copy; <script>document.write(new Date().getFullYear());</script> Picture+254. All rights reserved.
        </div>
 </div>

 {{-- signin modal --}}
            <div id="ember473" class="gated-home-auth-modal-component ember-view" style="display: none;">
               <div id="gated-home-auth-modal" role="dialog" tabindex="-1" class="auth-component modal in" style="z-index: 1050; display: block; padding-left: 16px;">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="logo-container"><i class="t20icon-blue"></i></div>
                        <!---->
                        <div id="ember2776" class="sso-signin-home-component ember-view">
                           <div class="modal-body">
                              <div class="buttons-container">
                                 <a href="#" class="text-link-bold brand-light " data-ember-action="" data-ember-action-2777="2777">
                                 Sign Up
                                 </a>
                              </div>
                              <div class="visible-xs padding20b"></div>
                              <div class="greetings-text">
                                 <h2 style="font-weight: normal;" data-test="gated-auth-signin-title" class="padding0b padding40t margin10t text-center">
                                    Welcome back!
                                 </h2>
                                 <h5 class="visible-xs-block margin0b padding10b text-center normal">
                                    Sign in to start exploring.
                                 </h5>
                                 <h4 class="hidden-xs margin0b padding10b text-center normal">
                                    <span class="padding10b">
                                    Sign in to start exploring.
                                    </span>
                                 </h4>
                              </div>
                              <div class="flex-row justify-content-center margin20t" style="display: none;">
                                 <div id="ember2782" class="ga-linker-component ember-view">
                                    <div id="ember2783" class="loading-button-component ember-view">
                                       <button style="" class="btn btn-loading   btn-sign-in btn-default external-link" data-ember-action="" data-ember-action-2784="2784">
                                          <div id="ember2785" class="loading-spinner loading-spinner-component ember-view"></div>
                                          <div class="btn-loading-text"><i class="envato-logo-circle"></i>Envato</div>
                                       </button>
                                    </div>
                                 </div>
                                 <div id="ember2786" class="loading-button-component ember-view">
                                    <button style="" class="btn btn-loading   btn-sign-in btn-default" data-ember-action="" data-ember-action-2787="2787">
                                       <div id="ember2788" class="loading-spinner loading-spinner-component ember-view"></div>
                                       <div class="btn-loading-text"><i class="facebook-logo-circle"></i>Facebook</div>
                                    </button>
                                 </div>
                                 <div id="ember2789" class="loading-button-component ember-view">
                                    <button style="" class="btn btn-loading   btn-sign-in btn-default" data-ember-action="" data-ember-action-2790="2790">
                                       <div id="ember2791" class="loading-spinner loading-spinner-component ember-view"></div>
                                       <div class="btn-loading-text"><i class="instagram-logo-circle"></i>Instagram</div>
                                    </button>
                                 </div>
                              </div>
                              <div class="flex-row justify-content-center margin60b">
                                 <div class="col-xs-12 col-sm-7">
                                    <!---->
                                    {{-- <p class="text-center margin20tb">
                                       Or, sign in with email
                                    </p> --}}
                                    <!---->
                                    <!---->
                                    <form data-ember-action="" data-ember-action-2796="2796">
                                       <div class="form-group">
                                          <label for="gated-signin-email">
                                          Email Address
                                          </label>
                                          <input type="email" required="" placeholder="you@example.com" id="gated-signin-email" class="form-control ember-text-field -text-field-component ember-view">
                                          <label for="gated--signin-password">
                                          Password
                                          </label>
                                          <div id="ember2814" class="password-input-wrapper password-input-component ember-view"><input name="password" type="password" required="" placeholder="At least 6 characters" id="gated-signin-password" class="form-control ember-text-field -text-field-component ember-view"><button type="button" class="btn btn-link password-input-toggle"><span class="text-light t20icon t20icon-show-password"></span></button></div>
                                          <a href="#" class="pull-right text-bright small margin10t margin20b " data-ember-action="" data-ember-action-2816="2816">
                                          Forgot Your Password?
                                          </a>
                                       </div>
                                       <div class="form-group margin20t">
                                          <div id="ember2825" class="loading-button-component ember-view">
                                             <button style="" type="submit" class="btn btn-loading   btn btn-primary btn-block">
                                                <div id="ember2826" class="loading-spinner loading-spinner-component ember-view"></div>
                                                <div class="btn-loading-text">
                                                   <!---->Sign In
                                                </div>
                                             </button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!----><!---->
                        <div class="container-fluid padding0lr">
                           <div style="background-color: #222; font-weight: 400 !important;" class="flex-row align-items-center justify-content-between padding20lr">
                              <div class="col-xs-7 padding10tb">Looking for help?&nbsp;<a style="margin-right: 20px;" target="_blank" href="https://help.twenty20.com?utm_source=t20_web&amp;utm_referrer=https%3A%2F%2Fwww.twenty20.com%2F" id="ember564" class="support-link-component ember-view">Check out our help center.</a></div>
                              <div class="col-xs-5 text-right padding10tb">
                                 <span id="ember571" class="dropdown locale-setter-component ember-view">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false"><i class="t20icon t20icon-globe"></i><span class="current-locale-name">English</span><span class="caret"></span></a>
                                    <ul role="menu" style="bottom: 100% !important; top: auto !important; right: 0; left: auto; float: right !important;" class="dropdown-menu">
                                       <li class="feedback-link margin10tb text-center"><span class="beta-flag">BETA </span>We're still working on translations.<a href="https://twenty20product.typeform.com/to/gV7oxG" target="_blank">Give us feedback here</a></li>
                                       <hr class="xlight slim">
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-580="580">Deutsch</a></li>
                                       <li class="active"><a href="#" data-ember-action="" data-ember-action-581="581">English</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-582="582">Español (ES)</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-583="583">Español (LA)</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-584="584">Français</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-585="585">Italiano</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-586="586">日本語</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-587="587">한국어</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-588="588">Português</a></li>
                                    </ul>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div style="color: white;" class="container-fluid margin20t">
                        <div class="row row-no-padding social-proof-con">
                           <div class="col-xs-6">
                              <div class="col-xs-12 col-sm-4 col-sm-offset-2 text-center">
                                 <h3 class="margin0tb">300K+</h3>
                              </div>
                              <div style="line-height: 18px;" class="col-xs-12 col-sm-5 c2 text-center">
                                 <p class="margin0b callout">photographers in the real world</p>
                              </div>
                           </div>
                           <div class="col-xs-6">
                              <div class="col-xs-12 col-sm-3 col-sm-offset-1 text-center">
                                 <h3 class="margin0tb">50M+</h3>
                              </div>
                              <div style="line-height: 18px;" class="col-xs-12 col-sm-5 c2 text-center">
                                 <p class="margin0b callout">crowdsourced photos</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      <!---->
  {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
// 	$(".image_gal").hide().each(function(i) {
//   $(this).delay(i*1000).fadeIn(1000);
// });
  </script>
   </body>

</html>

