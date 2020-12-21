<?php
use App\Cart;
use App\Purchase;

  if(Auth::check())
  {
    // $count = Cart::where('user_id',Auth::user()->id)
      //->where('token', session()->getId())->get(); 

    $purchased_items = Purchase::where('token',session()->getId())->where('user_id',Auth::user()->id)->pluck('cart_id')->all();

          $count = Cart::whereNotIn('id', $purchased_items)->where('user_id', Auth::user()->id)->where('token', session()->getId())->get();
  }

  if(Auth::check())
{
  $check = Cart::where('user_id',Auth::user()->id)
      ->where('token', session()->getId())
      ->where('upload_id',$image->id)->first();
}
else
{
  $check = false;
}
  
?>

<html itemscope="" itemtype="http://schema.org/Product" class="wf-museosans-n1-active wf-museosans-n3-active wf-museosans-i3-active wf-museosans-n5-active wf-museosans-n7-active wf-museosans-i7-active wf-museosans-n9-active wf-active" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Picture+254</title>
      <script type="text/javascript">
      window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(23),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,s){try{l?l-=1:o(s||new UncaughtException(t,e,n),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t,e){var n=e?null:c.now();i("err",[t,n])}var i=t("handle"),a=t(24),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,p="nr@seenError",l=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(13),t(12),"addEventListener"in window&&t(6),c.xhrWrappable&&t(14),d=!0)}s.on("fn-start",function(t,e,n){d&&(l+=1)}),s.on("fn-err",function(t,e,n){d&&!n[p]&&(f(n,p,function(){return!0}),this.thrown=!0,o(n))}),s.on("fn-end",function(){d&&!this.thrown&&l>0&&(l-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(){j++,L=y.hash,this[u]=x.now()}function o(){j--,y.hash!==L&&i(0,!0);var t=x.now();this[h]=~~this[h]+t-this[u],this[d]=t}function i(t,e){E.emit("newURL",[""+y,e])}function a(t,e){t.on(e,function(){this[e]=x.now()})}var s="-start",c="-end",f="-body",u="fn"+s,d="fn"+c,p="cb"+s,l="cb"+c,h="jsTime",m="fetch",v="addEventListener",w=window,y=w.location,x=t("loader");if(w[v]&&x.xhrWrappable){var g=t(10),b=t(11),E=t(8),R=t(6),O=t(13),C=t(7),P=t(14),T=t(9),N=t("ee"),S=N.get("tracer");t(16),x.features.spa=!0;var L,j=0;N.on(u,r),N.on(p,r),N.on(d,o),N.on(l,o),N.buffer([u,d,"xhr-done","xhr-resolved"]),R.buffer([u]),O.buffer(["setTimeout"+c,"clearTimeout"+s,u]),P.buffer([u,"new-xhr","send-xhr"+s]),C.buffer([m+s,m+"-done",m+f+s,m+f+c]),E.buffer(["newURL"]),g.buffer([u]),b.buffer(["propagate",p,l,"executor-err","resolve"+s]),S.buffer([u,"no-"+u]),T.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"]),a(P,"send-xhr"+s),a(N,"xhr-resolved"),a(N,"xhr-done"),a(C,m+s),a(C,m+"-done"),a(T,"new-jsonp"),a(T,"jsonp-end"),a(T,"cb-start"),E.on("pushState-end",i),E.on("replaceState-end",i),w[v]("hashchange",i,!0),w[v]("load",i,!0),w[v]("popstate",function(){i(0,j>1)},!0)}},{}],5:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(13),s=t(12),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",p="resource",l="-start",h="-end",m="fn"+l,v="fn"+h,w="bstTimer",y="pushState",x=t("loader");x.features.stn=!0,t(8);var g=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof g&&(this.bstStart=x.now())}),o.on(v,function(t,e){var n=t[0];n instanceof g&&i("bst",[n,e,this.bstStart,x.now()])}),a.on(m,function(t,e,n){this.bstStart=x.now(),this.bstType=n}),a.on(v,function(t,e){i(w,[e,this.bstStart,x.now(),this.bstType])}),s.on(m,function(){this.bstStart=x.now()}),s.on(v,function(t,e){i(w,[e,this.bstStart,x.now(),"requestAnimationFrame"])}),o.on(y+l,function(t){this.time=x.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],6:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t(26)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=c(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?s(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],7:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=r.apply(this,arguments);return o.emit(n+"start",arguments,t),t.then(function(e){return o.emit(n+"end",[null,e],t),e},function(e){throw o.emit(n+"end",[e],t),e})})}var o=t("ee").get("fetch"),i=t(23);e.exports=o;var a=window,s="fetch-",c=s+"body-",f=["arrayBuffer","blob","json","text","formData"],u=a.Request,d=a.Response,p=a.fetch,l="prototype";u&&d&&p&&(i(f,function(t,e){r(u[l],e,c),r(d[l],e,c)}),r(a,"fetch",s),o.on(s+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),o.emit(s+"done",[null,e],n)}else o.emit(s+"done",[t],n)}))},{}],8:[function(t,e,n){var r=t("ee").get("history"),o=t(26)(r);e.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],9:[function(t,e,n){function r(t){function e(){c.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}function n(){c.emit("jsonp-error",[],p),c.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}var r=t&&"string"==typeof t.nodeName&&"script"===t.nodeName.toLowerCase();if(r){var o="function"==typeof t.addEventListener;if(o){var a=i(t.src);if(a){var u=s(a),d="function"==typeof u.parent[u.key];if(d){var p={};f.inPlace(u.parent,[u.key],"cb-",p),t.addEventListener("load",e,!1),t.addEventListener("error",n,!1),c.emit("new-jsonp",[t.src],p)}}}}}function o(){return"addEventListener"in window}function i(t){var e=t.match(u);return e?e[1]:null}function a(t,e){var n=t.match(p),r=n[1],o=n[3];return o?a(o,e[r]):e[r]}function s(t){var e=t.match(d);return e&&e.length>=3?{key:e[2],parent:a(e[1],window)}:{key:t,parent:window}}var c=t("ee").get("jsonp"),f=t(26)(c);if(e.exports=c,o()){var u=/[?&](?:callback|cb)=([^&#]+)/,d=/(.*)\.([^.]+)/,p=/^(\w+)(\.|$)(.*)$/,l=["appendChild","insertBefore","replaceChild"];Node&&Node.prototype&&Node.prototype.appendChild?f.inPlace(Node.prototype,l,"dom-"):(f.inPlace(HTMLElement.prototype,l,"dom-"),f.inPlace(HTMLHeadElement.prototype,l,"dom-"),f.inPlace(HTMLBodyElement.prototype,l,"dom-")),c.on("dom-start",function(t){r(t[0])})}},{}],10:[function(t,e,n){var r=t("ee").get("mutation"),o=t(26)(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],11:[function(t,e,n){function r(t){var e=a.context(),n=s(t,"executor-",e),r=new f(n);return a.context(r).getCtx=function(){return e},a.emit("new-promise",[r,e],e),r}function o(t,e){return e}var i=t(26),a=t("ee").get("promise"),s=i(a),c=t(23),f=NREUM.o.PR;e.exports=a,f&&(window.Promise=r,["all","race"].forEach(function(t){var e=f[t];f[t]=function(n){function r(t){return function(){a.emit("propagate",[null,!o],i),o=o||!t}}var o=!1;c(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var i=e.apply(f,arguments),s=f.resolve(i);return s}}),["resolve","reject"].forEach(function(t){var e=f[t];f[t]=function(t){var n=e.apply(f,arguments);return t!==n&&a.emit("propagate",[t,!0],n),n}}),f.prototype["catch"]=function(t){return this.then(null,t)},f.prototype=Object.create(f.prototype,{constructor:{value:r}}),c(Object.getOwnPropertyNames(f),function(t,e){try{r[e]=f[e]}catch(n){}}),a.on("executor-start",function(t){t[0]=s(t[0],"resolve-",this),t[1]=s(t[1],"resolve-",this)}),a.on("executor-err",function(t,e,n){t[1](n)}),s.inPlace(f.prototype,["then"],"then-",o),a.on("then-start",function(t,e){this.promise=e,t[0]=s(t[0],"cb-",this),t[1]=s(t[1],"cb-",this)}),a.on("then-end",function(t,e,n){this.nextPromise=n;var r=this.promise;a.emit("propagate",[r,!0],n)}),a.on("cb-end",function(t,e,n){a.emit("propagate",[n,!0],this.nextPromise)}),a.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=a.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+f})},{}],12:[function(t,e,n){var r=t("ee").get("raf"),o=t(26)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],13:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(26)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],14:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){x.push(t),h&&(b?b.then(a):v?v(a):(E=-E,R.data=E))}function a(){for(var t=0;t<x.length;t++)r([],x[t]);x.length&&(x=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(6);var f=t("ee"),u=f.get("xhr"),d=t(26)(u),p=NREUM.o,l=p.XHR,h=p.MO,m=p.PR,v=p.SI,w="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],x=[];e.exports=u;var g=window.XMLHttpRequest=function(t){var e=new l(t);try{u.emit("new-xhr",[e],e),e.addEventListener(w,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(l,g),g.prototype=l.prototype,d.inPlace(g.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!v&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],15:[function(t,e,n){function r(){var t=window.NREUM,e=t.info.accountID||null,n=t.info.agentID||null,r=t.info.trustKey||null,i="btoa"in window&&"function"==typeof window.btoa;if(!e||!n||!i)return null;var a={v:[0,1],d:{ty:"Browser",ac:e,ap:n,id:o.generateCatId(),tr:o.generateCatId(),ti:Date.now()}};return r&&e!==r&&(a.d.tk=r),btoa(JSON.stringify(a))}var o=t(21);e.exports={generateTraceHeader:r}},{}],16:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<l;r++)t.removeEventListener(p[r],this.listener,!1);e.aborted||(n.duration=s.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):a(this,t),n.cbTime=this.cbTime,d.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime]))}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return v(r)}function i(t,e){var n=f(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}function a(t,e){t.params.status=e.status;var n=o(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var s=t("loader");if(s.xhrWrappable){var c=t("handle"),f=t(17),u=t(15).generateTraceHeader,d=t("ee"),p=["load","error","abort","timeout"],l=p.length,h=t("id"),m=t(20),v=t(19),w=window.XMLHttpRequest;s.features.xhr=!0,t(14),d.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,t.addEventListener("load",function(n){a(e,t)},!1),m&&(m>34||m<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),d.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),d.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=!1;if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=!!NREUM.init.distributed_tracing.enabled),n&&this.sameOrigin){var r=u();r&&e.setRequestHeader("newrelic",r)}}),d.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=v(r);i&&(n.txSize=i)}this.startTime=s.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{d.emit("internal-error",[n])}catch(r){}}};for(var a=0;a<l;a++)e.addEventListener(p[a],this.listener,!1)}),d.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),d.on("xhr-load-added",function(t,e){var n=""+h(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),d.on("xhr-load-removed",function(t,e){var n=""+h(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),d.on("addEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&d.emit("xhr-load-added",[t[1],t[2]],e)}),d.on("removeEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&d.emit("xhr-load-removed",[t[1],t[2]],e)}),d.on("fn-start",function(t,e,n){e instanceof w&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=s.now()))}),d.on("fn-end",function(t,e){this.xhrCbStart&&d.emit("xhr-cb-time",[s.now()-this.xhrCbStart,this.onload,e],e)})}},{}],17:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],18:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[f.now()].concat(s(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(23),s=t(24),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(t,e){u[e]=o(p+e,!0,"api")}),u.addPageAction=o(p+"addPageAction",!0),u.setCurrentRouteName=o(p+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[f.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return e.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],n),t}finally{c.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=o(l+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,e])}},{}],19:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],20:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],21:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",s=0;s<i.length;s++)o=i[s],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&Uint8Array&&(e=r.getRandomValues(new Uint8Array(31)));for(var o=[],i=0;i<16;i++)o.push(t().toString(16));return o.join("")}e.exports={generateUuid:r,generateCatId:o}},{}],22:[function(t,e,n){function r(t,e){if(!o)return!1;if(t!==o)return!1;if(!e)return!0;if(!i)return!1;for(var n=i.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}e.exports={agent:o,version:i,match:r}},{}],23:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],24:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],25:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],26:[function(t,e,n){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(24),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;e.exports=function(t,e){function n(t,e,n,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof n?n(r,a):n||{}}catch(f){p([f,"",[r,a,o],s])}u(e+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(e+"err",[r,a,d],s),d}finally{u(e+"end",[r,a,c],s)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,e,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<e.length;c++)s=e[c],a=t[s],r(a)||(t[s]=n(a,f?s+o:o,i,s))}function u(n,r,o){if(!c||e){var i=c;c=!0;try{t.emit(n,r,o,e)}catch(a){p([a,n,r,o])}c=i}}function d(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){p([r])}for(var o in t)s.call(t,o)&&(e[o]=t[o]);return e}function p(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),n.inPlace=f,n.flag=a,n}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function n(n,r,o,i){if(!p.aborted||i){t&&t(n,r,o);for(var a=e(o),s=m(n),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[x[n]];return d&&d.push([g,n,r,a]),a}}function l(t,e){y[t]=m(t).concat(e)}function h(t,e){var n=y[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return y[t]||[]}function v(t){return d[t]=d[t]||o(n)}function w(t,e){f(t,function(t,n){e=e||"feature",x[n]=e,e in u||(u[e]=[])})}var y={},x={},g={on:l,addEventListener:l,removeEventListener:h,emit:n,get:v,listeners:m,context:e,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(p.aborted=!0,u=p.backlog={})}var s="nr@context",c=t("gos"),f=t(23),u={},d={},p=e.exports=o();p.backlog=u},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!E++){var t=b.info=NREUM.info,e=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(x,function(e,n){t[e]||(t[e]=n)}),c("mark",["onload",a()+b.offset],null,"api");var n=l.createElement("script");n.src="https://"+t.agent,e.parentNode.insertBefore(n,e)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return R.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(23),u=t("ee"),d=t(22),p=window,l=p.document,h="addEventListener",m="attachEvent",v=p.XMLHttpRequest,w=v&&v.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:v,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var y=""+location,x={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1130.min.js"},g=v&&w&&w[h]&&!/CriOS/.test(navigator.userAgent),b=e.exports={offset:s,now:a,origin:y,features:{},xhrWrappable:g,userAgent:d};t(18),l[h]?(l[h]("DOMContentLoaded",i,!1),p[h]("load",r,!1)):(l[m]("onreadystatechange",o),p[m]("onload",r)),c("mark",["firstbyte",s],null,"api");var E=0,R=t(25)},{}]},{},["loader",2,16,5,3,4]);
      ;NREUM.loader_config={accountID:"697845",trustKey:"6111",agentID:"400093202",licenseKey:"4eb2c2ee8f",applicationID:"400093202"}
      ;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"4eb2c2ee8f",applicationID:"400093202",sa:1}
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="fragment" content="!">
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>

    
<meta name="twenty20-digital/config/environment" content="%7B%22modulePrefix%22%3A%22twenty20-digital%22%2C%22environment%22%3A%22production%22%2C%22rootURL%22%3A%22%2F%22%2C%22locationType%22%3A%22auto%22%2C%22EmberENV%22%3A%7B%22ENABLE_DS_FILTER%22%3Atrue%2C%22EXTEND_PROTOTYPES%22%3Atrue%2C%22FEATURES%22%3A%7B%7D%7D%2C%22APP%22%3A%7B%22name%22%3A%22twenty20-digital%22%2C%22version%22%3A%220.0.2%22%7D%2C%22i18n%22%3A%7B%22defaultLocale%22%3A%22en%22%2C%22defaultFallback%22%3Atrue%7D%2C%22contentSecurityPolicy%22%3A%7B%22default-src%22%3A%22'none'%22%2C%22script-src%22%3A%22'self'%20'unsafe-eval'%20'unsafe-inline'%20js.stripe.com%20checkout.stripe.com%20use.typekit.net%20dp3ogl28gtjh0.cloudfront.net%20cdn.segment.io%20www.google-analytics.com%20maps.googleapis.com%20%22%2C%22frame-src%22%3A%22js.stripe.com%20checkout.stripe.com%20dialog.filepicker.io%20www.filepicker.io%22%2C%22font-src%22%3A%22'self'%20fonts.gstatic.com%20www.twenty20.com%20data%3A%22%2C%22connect-src%22%3A%22'self'%20api-v2.twenty20.com%20staging-api-v2.twenty20.com%20checkout.stripe.com%20ajax.cdnjs.com%20api.segment.io%20d24ilbxry44jok.cloudfront.net%20widget.cloudinary.com%20app.getsentry.com%22%2C%22img-src%22%3A%22'self'%20*%20data%3A%20app.getsentry.com%22%2C%22style-src%22%3A%22'self'%20'unsafe-inline'%20fonts.googleapis.com%20use.typekit.net%22%2C%22media-src%22%3A%22'self'%20dp3ogl28gtjh0.cloudfront.net%22%2C%22object-src%22%3A%22cdnjs.cloudflare.com%22%7D%2C%22SEARCH_ENDPOINT%22%3A%22search%22%2C%22SOLR_SEARCH%22%3A%22false%22%2C%22API_HOST%22%3A%22https%3A%2F%2Fapi-v3.twenty20.com%22%2C%22APPLE_SIGNIN_CLIENTID%22%3A%22com.twenty20.webapp%22%2C%22APPLE_SIGNIN_REDIRECT_URI%22%3A%22https%3A%2F%2Fwww.twenty20.com%2Fsso%2Fapple%22%2C%22PIXELS_HOST%22%3A%22https%3A%2F%2Fdc4fj9o1wzm3u.cloudfront.net%22%2C%22UPLOAD_HOST%22%3A%22https%3A%2F%2Fd24ilbxry44jok.cloudfront.net%22%2C%22COMP_HOST%22%3A%22https%3A%2F%2Fdigital-comp.twenty20.com%22%2C%22ENVATO_SSO_SERVER%22%3A%22https%3A%2F%2Faccount.envato.com%22%2C%22ELEMENTS_ACCOUNT_URL%22%3A%22https%3A%2F%2Faccount.elements.envato.com%22%2C%22ELEMENTS_PRICING_URL%22%3A%22https%3A%2F%2Felements.envato.com%2Ftwenty20%2Fconnect%22%2C%22OAUTH_FACEBOOK_CLIENT_ID%22%3A%22421986587813170%22%2C%22OAUTH_INSTAGRAM_CLIENT_ID%22%3A%220582843ecca8460b8034c9e50388dea9%22%2C%22FILEPICKER_API_KEY%22%3A%22AuvE5RQc0SF26ucbFUaDDz%22%2C%22STRIPE_PUBLISHABLE_KEY%22%3A%22pk_live_xpg13zMyJgibTEeq71wxoH1t00paLwqW7l%22%2C%22SEGMENTIO_API_KEY%22%3A%22l4o2od3lg2%22%2C%22SENTRY_DSN_KEY%22%3A%22https%3A%2F%2Fda8301b8318d4ca8aa3e9969aa86b1ab%40sentry.io%2F1339230%22%2C%22GRID_ROW_HEIGHT%22%3A250%2C%22robots%22%3A%22index%2Call%2Cfollow%22%2C%22ember-cli-mirage%22%3A%7B%22usingProxy%22%3Afalse%2C%22useDefaultPassthroughs%22%3Atrue%7D%7D" />

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
    <link rel="stylesheet" href="https://d2xoeue6rlgwc6.cloudfront.net/assets/twenty20-digital-0646f43e12be042870ab964f0f9fbd8f.css">


      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
   </head>
   <body class="ember-application photo photo-index" style="padding-top: 62px; margin-top: 0px;">
      <script type="text/javascript" src="//use.typekit.net/ryt2nll.js"></script>
      <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
      <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
      <script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion_async.js" charset="utf-8"></script>
      <!-- segment -->


      <script src="https://d2xoeue6rlgwc6.cloudfront.net/assets/vendor-88c00f99a64532dd87dee9ed54a90886.js"></script>

      <script src="https://d2xoeue6rlgwc6.cloudfront.net/assets/twenty20-digital-de55146a908b80d7fc58e13c95c3c8d5.js"></script>

      <noscript>
         <div class="js-off-message" style="margin: 20% auto; display: block; width: 100%; max-width: 600px; background: #fff; padding: 3%;">
            <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/logos/logo-header-color1@2x.png">
            <h3>Your JavaScript is Disabled!</h3>
            <p>Picture+254 is a modern website that requires JavaScript to be turned on in order to access.  Simply go to your browser preferences and turn JavaScript on, then refresh this page.</p>
         </div>
      </noscript>

      <div id="ember-bootstrap-wormhole"></div>

      <div id="ember652" class="ember-view">
         <div class="ember-view-wrap">
            <div id="ember29503" class="navbar-zone top-bar-component ember-view">
				
				@include('stockNav')
            </div>
            <div id="ember29625" class="keypress-dispatcher-component ember-view"></div>
            <div class="preview">
               <div class="preview-main-container">
                  <a href="/collections/d1b72956-c497-4832-87cb-751f6f9d52a5" class="close-control text-link dark caps hidden-xs" data-ember-action="" data-ember-action-29626="29626">×</a><!----><a style="" href="/photos/233bd69a-9749-4d6d-bde9-441dfcf4f7bd?t20p=photo.index&amp;t20s=next-photo" id="ember29627" class="next-arrow visible-md visible-lg link-to-component ember-view"> </a><!---->
                  <div class="container">
                     <div class="row">
                        <div class="col-md-8 col-sm-12">
                           <div class="row">
                              <div style="float: left; margin: 0 0 10px 15px;">
                                 <a style="" href="/" id="ember29628" class="link-to-component ember-view">
                                    <div id="ember29629" class="inline-block hexagon-avatar-container hexagon-avatar-component ember-view">
                                       <svg width="0" height="0">
                                          <clipPath id="hexagonClip" clipPathUnits="objectBoundingBox">
                                             <polygon points=".5 .0, .95 .25, .95 .76, .50 1.0, .05 .75, .05 .25"></polygon>
                                          </clipPath>
                                       </svg>
                                       <img src="{{ asset('uploads') }}/{{ $image->user->pic }}" style="clip-path: url(#hexagonClip);" class="avatar hexagon hexagon-medium">

                                       {{-- <img src="{{ asset('images/logo-.png') }}" style="clip-path: url(#hexagonClip);" class="avatar hexagon hexagon-medium"> --}}
                                    </div>
                                 </a>
                              </div>
                              <div style="padding-left: 75px;">
                                 <p style="margin: 5px 0 0px;" class="text-dark small">Photo by</p>
                                 <p style="margin-top: 0px; line-height: 10px;" class="light-text"><a style="" href="/" id="ember29634" class="link-to-component ember-view">{{ $image->user->name }}</a></p>
                              </div>
                           </div>
                           <div class="img-preview">
                              <div class="img-con-inner">
                                 <div id="ember29635" class="preview-photo-component ember-view">
                                    <!----><img src="{{ asset('uploads') }}/{{ $image->imageName }}" style="width: 100%;" alt="stock photo, engineer, design, web, website, code, develop, program, software, developer, programmer"><!---->
                                 </div>
                              </div>
                              <div class="engage">
                                 <span id="ember29636" class="gated-action-component ember-view">
                                 	<button data-id="{{ $image->id }}" id="ember29637" class="btn btn-link like_image text-light only-icon love-button-component ember-view"><i class="t20icon t20icon-love-outline" id="like_main"></i>
                                 	</button>
                                 </span>
                                 <span id="ember29638" class="gated-action-component ember-view"><button style="vertical-align: bottom; margin-left: 0.5em;" class="btn btn-link text-light" data-ember-action="" data-ember-action-29639="29639"><span id="likes_count">{{ count($image->votes) }}</span> </button></span><!---->
                              </div>
                              <div class="row">
                                 <div class="col-md-12 extended-photo-details clearfix">
                                    <div style="max-width: 725px; word-wrap: break-word;">
                                       <!---->
                                       <div class="meta-group">
                                          <!---->
                                       </div>
                                       <!---->
                                    <!--    <div class="meta-group">
                                          <div class="keyword-list">
                                             <a style="" href="/search/engineer?t20p=photo.index" id="ember29645" class="text-link dark small link-to-component ember-view"></a><span class="comma">, </span><a style="" href="/search/design?t20p=photo.index" id="ember29647" class="text-link dark small link-to-component ember-view"></a><span class="comma">, </span><a style="" href="/search/web?t20p=photo.index" id="ember29649" class="text-link dark small link-to-component ember-view"></a><span class="comma">, </span><a style="" href="/search/website?t20p=photo.index" id="ember29651" class="text-link dark small link-to-component ember-view">website</a><span class="comma">, </span><a style="" href="/search/code?t20p=photo.index" id="ember29652" class="text-link dark small link-to-component ember-view">code</a><span class="comma">, </span><a style="" href="/search/develop?t20p=photo.index" id="ember29654" class="text-link dark small link-to-component ember-view">develop</a><span class="comma">, </span><a style="" href="/search/program?t20p=photo.index" id="ember29656" class="text-link dark small link-to-component ember-view">program</a><span class="comma">, </span><a style="" href="/search/software?t20p=photo.index" id="ember29657" class="text-link dark small link-to-component ember-view">software</a><span class="comma">, </span><a style="" href="/search/developer?t20p=photo.index" id="ember29659" class="text-link dark small link-to-component ember-view">developer</a><span class="comma">, </span><a style="" href="/search/programmer?t20p=photo.index" id="ember29661" class="text-link dark small link-to-component ember-view">programmer</a><span class="comma">, </span>
                                         < </div>
                                       </div> --> 
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                           <div class="main">
                              <div id="ember29662" class="photo-details-component ember-view">
                                 <h6 class="text-dark">
                                    Stock Photo Details
                                 </h6>
                                 <hr class="dark slim">
                                 <ul class="photo-details">
                                    <!-- <li>
                                       <i class="t20icon t20icon-clock text-medium"></i>
                                       <span>
                                       Commercial Use:
                                       </span>
                                       <span class="strong">
                                       Pending Review
                                       </span>
                                       <span id="ember29675" class="inline-divider gated-action-component ember-view">            <a href="#" data-ember-action="" data-ember-action-29676="29676">
                                       Get it reviewed today
                                       </a>
                                       </span>    
                                    </li>
                                    <li>
                                       <i class="t20icon t20icon-check text-success"></i>
                                       <span>
                                       Editorial Use:
                                       </span>
                                       <span class="strong">
                                       OK
                                       </span>
                                       <span class="margin10l">
                                       <a data-content="This photo is available for descriptive or newsworthy uses like blog posts, social media, and internal presentations. <a href='https://help.twenty20.com/hc/en-us/articles/204769238?utm_source=t20_web&amp;utm_medium=route' target='_blank'>Learn more</a>" data-html="true" data-placement="right" data-trigger="hover" data-toggle="popover" id="ember29693" class="t20icon t20icon-info-circle popover-link-component ember-view" data-original-title="" title=""></a>
                                       </span>
                                    </li>
                                    <li>
                                       <i class="t20icon t20icon-profile"></i>
                                       <span>
                                       Model Release:
                                       </span>
                                       <span class="strong">
                                       Pending
                                       </span>
                                    </li>
                                     -->
                                    <li>
                                       <i class="t20icon t20icon-license text-light"></i>
                                       <span>
                                       Source:
                                       </span>
                                       <a style="" href="/royalty-free-images?t20p=photo.index" id="ember29702" class="link-to-component ember-view">      Picture+254
                                       </a>
                                      <!--  <span class="margin10l">
                                       <a href="#" class="t20icon t20icon-info-circle" data-ember-action="" data-ember-action-29707="29707">
                                       </a>
                                       </span>  -->
                                    </li> 
                                      <li>
                                          <i class="t20icon t20icon-license text-light"></i>
                                          <span>
                                          License type:
                                          </span>

                                          <a style="" href="/royalty-free-images?t20p=photo.index" id="ember6967" class="link-to-component ember-view">      Rights managed
                                          </a>
                                         {{--  <span class="margin10l">
                                          <a href="#" class="t20icon t20icon-info-circle" data-ember-action="" data-ember-action-6972="6972">
                                          </a>
                                          </span> --}}
                                    </li>
                                    <li>
                                       <i class="t20icon t20icon-photo text-light"></i>
                                       <span>

                                       File Size: 2000px not larger than 10 MB
    </span>
                                       </span>
                                    </li>
                                    <li>
                                       <i class="t20icon t20icon-photo-tag text-light"></i>
                                       <span>
                                       Photo ID: photo id here
                                       </span>
                                       <span class="strong">

                                       p254-{{ $image->id }}

                                       </span>
                                    </li>
                                 </ul>
                                 <hr class="dark slim">
                              </div>
                              <div id="ember29712" class="license-photo-component license-photo-component ember-view">
                                 <!---->
                                 <div>
                                    <div class="size-con">
                                       <label class="ember-radio-button  radio-btn-white radio-button-component">
                                          <input aria-checked="false" type="radio" value="small" id="ember29715" class="radio-button-input-component ember-view">
                                          <div class="desc-sizename caps text-bright text-large-ish semi-bold"><span>Extra small</span>
                                          	<span class="pull-right">$<span class="price">40</span>.00</span>
                                          	<span class="pull-right"><!----></span></div><div class="desc-size small text-medium">509 x 339 px(7.07x4.71in) 72dpi<span class="inline-divider">0.2 MP</span></div>
								  </label>
								</div><div class="size-con">  <label class="ember-radio-button  radio-btn-white radio-button-component">
								    <input aria-checked="false" type="radio" value="medium" id="ember29722" class="radio-button-input-component ember-view">

								    <div class="desc-sizename caps text-bright text-large-ish semi-bold"><span>small</span>
								    	<span class="pull-right">$<span class="price">120</span>.00</span>
								    	<span class="pull-right"><!----></span></div><div class="desc-size small text-medium">727 x 484 px<span class="inline-divider">(10.10 x 6.72 in)72dpi</span><span class="inline-divider">0.4 MP</span></div>
								  </label>
								</div>
								<div class="size-con">  <label class="ember-radio-button radio-btn-white radio-button-component">
								    <input aria-checked="true" type="radio" value="medium" id="ember29722" class="radio-button-input-component ember-view">

								    <div class="desc-sizename caps text-bright text-large-ish semi-bold"><span>medium</span>
								    	<span class="pull-right">$<span class="price">350</span>.00</span>
								    	<span class="pull-right"><!----></span></div><div class="desc-size small text-medium">2125 x 1416 px<span class="inline-divider">(7.08 x 4.72in)300 dpi</span><span class="inline-divider">3.0 MP</span></div>
								  </label>
								</div>
								<div class="size-con">  <label class="ember-radio-button checked radio-btn-white radio-button-component">
								    <input type="radio" value="large" id="ember29725" class="radio-button-input-component ember-view">

								    <div class="desc-sizename caps text-bright text-large-ish semi-bold"><span>large</span>
								    	<span class="pull-right">$<span class="price">450</span>.00</span>
								    	<span class="pull-right"><!----></span></div><div class="desc-size small text-medium">6720 x 4480 px<span class="inline-divider">(22.40 x 14.93 in) 300 dpi </span><span class="inline-divider">30.1 MP</span></div>
								  </label>
                                 </div>
                                 </div>
                                 <div class="inline-btn-group" style="background: #fff; padding: 10px; border-radius: 3px;">
                                 	<span style="color: #000; margin:20px; background: #fff; text-align: center; font-size: 20px;">
                                 		$ <span id="dis_pay">450</span>.00
                                 	</span>
                                 </div>
							  @if(!$check)
								@if(Auth::check())
                                 <div class="purchase-con" id="add_to_cart_div" style="height: 50px;">
                                    <div id="ember29726" class="gated-action-component ember-view">
                                       <div id="ember29731" class="loading-button-component ember-view">
                                          <button id="add_to_cart" style="white-space: normal; height: 100%;" data-test="license-button" class="btn btn-loading   btn-primary btn-block btn-lg has-icon" data-ember-action="" data-ember-action-29732="29732" data-id="{{ $image->id }}">
                                             <div id="ember29733" class="loading-spinner loading-spinner-component ember-view"></div>
                                             <div class="btn-loading-text"><i class="fa fa-shopping-cart align-sub"></i>Add To Cart</div>
                                          </button>
                                       </div>
                                    </div>
                                    
                                 </div>
                                 @else
                                 <div class="purchase-con" style="height: 50px;">
                                    <div id="ember29726" class="gated-action-component ember-view">
                                       <div id="ember29731" class="loading-button-component ember-view">
                                          <button id="login"  data-test="license-button" class="btn btn-loading   btn-primary btn-block btn-lg has-icon" data-ember-action="" data-ember-action-29732="29732" data-id="{{ $image->id }}" style="white-space: normal; height: 100%; align-items: center;">
                                             <div id="ember29733" class="loading-spinner loading-spinner-component ember-view"></div>
                                             <div class="btn-loading-text" style=""><i class="fa fa-shopping-cart align-sub" ></i>Add To Cart</div>
                                          </button>
                                       </div>
                                    </div>
                                    
                                 </div>
                                 @endif
                                 @else
                                 <div class="purchase-con" style="dislay: none; height: 50px;">
                                    <div id="ember29726" class="gated-action-component ember-view">
                                       <div id="ember29731" class="loading-button-component ember-view">
                                          <button onclick="window.location='{{ url("cart/view-cart") }}'" id="checkout" style="white-space: normal; height: 100%;" data-test="license-button" class="btn btn-loading   btn-primary btn-block btn-lg has-icon" data-ember-action="" data-ember-action-29732="29732">
                                             <div id="ember29733" class="loading-spinner loading-spinner-component ember-view"></div>
                                             <div class="btn-loading-text"><i class="fa fa-shopping align-sub"></i>Checkout</div>
                                          </button>
                                       </div>
                                    </div>
                                    
                                 </div>
                                 @endif

                                 <div class="purchase-con" id="checkout_div" style="display: none; height: 50px;">
                                    <div id="ember29726" class="gated-action-component ember-view">
                                       <div id="ember29731" class="loading-button-component ember-view">
                                          <button onclick="window.location='{{ url("cart/view-cart") }}'" id="checkout" style="white-space: normal; height: 100%;" data-test="license-button" class="btn btn-loading   btn-primary btn-block btn-lg has-icon" data-ember-action="" data-ember-action-29732="29732">
                                             <div id="ember29733" class="loading-spinner loading-spinner-component ember-view"></div>
                                             <div class="btn-loading-text"><i class="fa fa-shopping align-sub"></i>Checkout</div>
                                          </button>
                                       </div>
                                    </div>
                                    
                                 </div>
                              </div>
                              <div class="photo-actions">
                                 <div class="inline-btn-group"><span id="ember29777" class="gated-action-component ember-view">
                                 	<button data-id="{{ $image->id }}" id="ember29778" class="btn btn-secondary like_image only-icon love-button-component ember-view"><i class="t20icon t20icon-love-outline"></i></button></span><span id="ember29779" class="gated-action-component ember-view"><button style="white-space: normal;" class="btn btn-secondary btn-stretch" data-ember-action="" data-ember-action-29780="29780"><i class="t20icon t20icon-collect align-sub"></i>Add to Wishlist</button></span>
                                 </div>
                                 {{-- <div id="ember29785" class="gated-action-component ember-view">
                                    <div id="ember29790" class="loading-button-component ember-view">
                                       <button style="white-space: normal;" class="btn btn-loading   btn-link btn-block text-light" data-ember-action="" data-ember-action-29791="29791">
                                          <div id="ember29792" class="loading-spinner loading-spinner-component ember-view"></div>
                                          <div class="btn-loading-text"><i class="t20icon t20icon-download"></i>Download Comp</div>
                                       </button>
                                    </div>
                                 </div> --}}
                                 <!---->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="preview-details-container">
                  <div style="margin-top: 10px;" class="container">
                     <div class="row">
                        <div class="col-lg-12">
                           <div id="ember29793" class="collection-photo-grid-component ember-view">
                              <div class="row">
                                 <div class="col-xs-12">
                                    <h6>More images from the Author:</h6>
                                 </div>
                              </div>
                              <div class="row">

                                    @foreach($authorImages as $image)
                                 <div class="col-xs-12 col-sm-3">
                                    <div style="" id="ember30056" class="photo-card linked-collection-component ember-view">
                                       <a style="" href="{{ route('image-details',$image->id) }}" id="ember30057" class="link-to-component ember-view">
                                          <div style="position: relative; background-size: cover !important; width:100%; height:100%; ; background: url({{ asset('uploads') }}/{{ $image->imageName }}) no-repeat center center;" id="ember30058" class="photo-background-component photo-background-component ember-view">
                                             <div class="overlay-container ">
                                                <div class="overlay-centered">
                                                   {{-- <h5 class="title-over-image">Developer Life</h5> --}}
                                                   {{-- <p style="color: white;" class="pannel-head">915 photos</p> --}}
                                                </div>
                                             </div>
                                             <span class="dark-overlay-block"></span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>

                               @endforeach
                              </div>
                              <!----><!---->
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div id="ember29802" class="similar-photos similar-photos-component ember-view">
                              <!---->
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div id="ember29807" class="other-photos-by-artist other-photos-by-artist-component ember-view">
                              <a style="" href="/Wutzkoh?t20p=photo.index&amp;t20s=other-artist-photos" id="ember29808" class="link-to-component ember-view">
                                 <h6 style="padding: 0px 0px 10px;margin-top: 30px;"><span style="color: #222222;">Related images</span></h6>
                              </a>
                              <div style="position: relative;">

                              @foreach($catImages as $imag)
                                 <a style="" href="{{ route('image-details',$imag->id) }}" class="link-to-component ember-view">
                                    <div style="height: 124px; width: 124px; display: inline-block; cursor: pointer; padding: 3px;" data-ember-action="" data-ember-action-30070="30070"><span id="ember30071" class="image-loader image-loader-component ember-view"><img src="{{ asset('uploads') }}/{{ $imag->imageName }}" style="width: 100%; height: 100%;"></span></div>
                                 </a>

                              @endforeach

                                 <!---->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-8">
                           <div id="ember29813" class="photo-comments-component ember-view">
                              <div class="photo-comments">
                                 <h6 style="padding: 0px 0px 10px;">Comments:</h6>
                                 <div id="ember29818" class="pull-left commenter inline-block hexagon-avatar-container hexagon-avatar-component ember-view">
                                    <svg width="0" height="0">
                                       <clipPath id="hexagonClip" clipPathUnits="objectBoundingBox">
                                          <polygon points=".5 .0, .95 .25, .95 .76, .50 1.0, .05 .75, .05 .25"></polygon>
                                       </clipPath>
                                    </svg>
                                    <img src="https://res.cloudinary.com/twenty20/image/upload/t_avatar_240x240/avatars/sade3-1589781771.jpg" style="clip-path: url(#hexagonClip);" class="avatar hexagon hexagon-medium"><!---->
                                 </div>
                                 <div class="form-group"><input type="text" placeholder="Add a comment..." id="ember29823" class="form-control input-small ember-text-field -text-field-component ember-view"><button type="submit" class="btn btn-comment" data-ember-action="" data-ember-action-29824="29824"><i class="comment-icon"></i></button></div>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <div class="container" style="text-align: center;">
        <div class="wfont" style="font-size:14px;font-family:'Montserrat', sans-serif;">&copy; <script>document.write(new Date().getFullYear());</script> Picture+254. All rights reserved.
        </div>
 </div>
           <!--  <div id="ember29839" class="page-footer-component ember-view">
               <div id="footer">
                  <div style="padding: 10px 0;" class="container-fluid">
                     <div class="col-sm-2 col-sm-offset-1 col-xs-6">
                        <p class="pannel-head text-medium">Explore</p>
                        <ul class="small">
                           <li><a style="" href="/home/signature?t20p=photo.index&amp;t20s=footer" id="ember29844" class="text-link dark link-to-component ember-view">Signature Collection</a></li>
                           <li><a style="" href="/home/following?t20p=photo.index&amp;t20s=footer" id="ember29849" class="text-link dark link-to-component ember-view">Following Feed</a></li>
                           <li><a style="" href="/discover?t20p=photo.index&amp;t20s=footer" id="ember29854" class="text-link dark link-to-component ember-view">Collections</a></li>
                           <li><a style="" href="/challenges?t20p=photo.index&amp;t20s=footer" id="ember29859" class="text-link dark link-to-component ember-view">Challenges</a></li>
                           <li><a style="" href="/social-media-marketing?t20p=photo.index&amp;t20s=footer" id="ember29864" class="text-link dark link-to-component ember-view">Social Media Marketing Calendar</a></li>
                        </ul>
                     </div>
                     <div class="col-sm-2 col-xs-6">
                        <p class="pannel-head text-medium">About</p>
                        <ul class="small">
                           <li><a style="" href="/customers?t20p=photo.index&amp;t20s=footer" id="ember29873" class="text-link dark link-to-component ember-view">Customers</a></li>
                           <li><a style="" href="/pricing?t20p=photo.index&amp;t20s=footer" id="ember29878" class="text-link dark link-to-component ember-view">Pricing</a></li>
                           <li><a style="" href="/legal?t20p=photo.index&amp;t20s=footer" id="ember29883" class="text-link dark link-to-component ember-view">Our License</a></li>
                           <li><a style="" href="/jobs?t20p=photo.index&amp;t20s=footer" id="ember29888" class="text-link dark link-to-component ember-view">Jobs</a></li>
                           <li><a style="" href="/royalty-free-images?t20p=photo.index&amp;t20s=footer" id="ember29893" class="text-link dark link-to-component ember-view">Royalty-free images</a></li>
                        </ul>
                     </div>
                     <div class="clearfix visible-xs-block"></div>
                     <div class="col-sm-2 col-xs-6">
                        <p class="pannel-head text-medium">Support</p>
                        <ul class="small">
                           <li><a style="" target="_blank" href="https://help.twenty20.com?utm_source=t20_web&amp;utm_referrer=https%3A%2F%2Fwww.twenty20.com%2Fphotos%2F63fbadf6-ca76-471e-be1d-c3b9dd68c271" id="ember29902" class="text-link dark support-link-component ember-view">FAQ</a></li>
                           <li><a style="" target="_blank" href="https://help.twenty20.com?utm_source=t20_web&amp;utm_referrer=https%3A%2F%2Fwww.twenty20.com%2Fphotos%2F63fbadf6-ca76-471e-be1d-c3b9dd68c271" id="ember29907" class="text-link dark support-link-component ember-view">Contact Us</a></li>
                           <li><a style="" href="/legal/user-terms?t20p=photo.index&amp;t20s=footer" id="ember29912" class="text-link dark link-to-component ember-view">User Terms</a></li>
                           <li><a style="" href="/legal/contributor-terms?t20p=photo.index&amp;t20s=footer" id="ember29917" class="text-link dark link-to-component ember-view">Contributor Terms</a></li>
                           <li><a style="" href="/legal/privacy?t20p=photo.index&amp;t20s=footer" id="ember29922" class="text-link dark link-to-component ember-view">Privacy Policy</a></li>
                        </ul>
                     </div>
                     <div class="col-sm-2 col-xs-6">
                        <p class="pannel-head text-medium">Connect</p>
                        <ul class="social-connect small">
                           <li><a href="http://blog.twenty20.com" class="text-link dark">Blog</a></li>
                           <li><a href="http://instagram.com/twenty20" target="_blank"><i class="icon-ig-foot"></i>Instagram</a></li>
                           <li><a href="http://facebook.com/twenty20" target="_blank"><i class="icon-fb-foot"></i>Facebook</a></li>
                           <li><a href="http://twitter.com/twenty20app" target="_blank"><i class="icon-tw-foot"></i>Twitter</a></li>
                        </ul>
                     </div>
                     <div class="col-sm-3 col-xs-12">
                        <a style="color: white; border: 2px solid white; width: 170px; height: 50px; line-height: 28px;" target="_blank" href="https://help.twenty20.com?utm_source=t20_web&amp;utm_referrer=https%3A%2F%2Fwww.twenty20.com%2Fphotos%2F63fbadf6-ca76-471e-be1d-c3b9dd68c271" id="ember29935" class="btn btn-default support-link-component ember-view">Contact Us</a><a style="margin-top: 6%;" href="https://itunes.apple.com/us/app/twenty20/id577323200?mt=8" target="_blank" class="appstore-badge"></a>

                     </div>
                  </div>
                  <div class="footer-base">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                              <div class="t20-ion"></div>
                              <p class="small">Created in sunny southern California. Appreciated by people around the world. Committed to making you smile.<br>Copyright © 2020 Twenty20, Inc. All rights reserved. All photos © their respective owners.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
<<<<<<< HEAD
            </div>
<<<<<<< HEAD
            <div id="ember27118" class="elements-welcome-component ember-view">
               <div id="elements-welcome-modal" aria-hidden="false" role="dialog" tabindex="-1" class="modal fade">
                  <div class="modal-dialog">
                     <div class="modal-content rounded-corners">
                        <div class="modal-body padding40">
                           <div class="visible-xs-block flex-column align-items-center justify-content-center margin40b">
                              <div class="text-center">
                                 <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/envato/elements-logo.png" alt="Envato elements logo" style="height: 22px;">
                              </div>
                              <h3 class="text-medium margin0tb margin20lr normal text-center">+</h3>
                              <div class="text-center">
                                 <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/logos/logo-header-color@2x.png" alt="Twenty20 logo" style="height: 30px;">
                              </div>
                           </div>
                           <div class="hidden-xs flex-row align-items-center margin40b">
                              <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/envato/elements-logo.png" alt="Envato elements logo" style="height: 22px;">
                              <h3 class="text-medium margin0tb margin20lr normal">+</h3>
                              <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/logos/logo-header-color@2x.png" alt="Twenty20 logo" style="height: 30px;">
                           </div>
                           <h3 class="normal margin40b margin0t">
                              <span class="normal">You are now signed in to</span> Twenty20 <span class="normal">with your Envato account.</span>
                           </h3>
                           <h4 class="normal margin20b">
                              <!---->
                              <!---->        
                    {{--        </h4> --}}
                           <!---->
                           <!---->
                          {{--  <div class="form-group margin30b">
                              <div class="checkbox">
                                 <label class="checked">
                                 <input type="checkbox" id="ember27123" class="ember-checkbox -checkbox-component ember-view">
                                 <span class="normal text-dark">
                                 Send me tips, trends, freebies, updates &amp; offers. You can unsubscribe at any time.
                                 </span>
                                 </label>
                              </div>
                           </div>
                           <div class="text-center">
                              <div id="ember27132" class="loading-button-component ember-view">
                                 <button style="" class="btn btn-loading   btn-primary" data-ember-action="" data-ember-action-27133="27133">
                                    <div id="ember27134" class="loading-spinner loading-spinner-component ember-view"></div>
                                    <div class="btn-loading-text">
                                       <!---->Start exploring
                                    </div>
                                 </button>
                              </div>
                           </div>
                           <p class="small text-dark margin10t margin0b text-center">
                              By clicking this button, I agree to Twenty20's
                              <a style="" href="/legal/user-terms?t20p=photo.index" id="ember27139" class="link-to-component ember-view">            User Terms
                              </a>
                              and
                              <a style="" href="/legal/contributor-terms?t20p=photo.index" id="ember27148" class="link-to-component ember-view">            Contributor Terms</a>.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="ember27153" class="envato-merge-component ember-view">
               <div id="envato-merge-modal" aria-hidden="false" role="dialog" tabindex="-1" class="modal fade">
                  <div class="modal-dialog">
                     <div class="modal-content rounded-corners">
                        <div class="modal-body padding40">
                           <div class="visible-xs-block flex-column align-items-center justify-content-center margin40b">
                              <div class="text-center">
                                 <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/envato/elements-logo.png" alt="Envato elements logo" style="height: 22px;">
                              </div>
                              <h3 class="text-medium margin0tb margin20lr normal text-center">+</h3>
                              <div class="text-center">
                                 <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/logos/logo-header-color@2x.png" alt="Twenty20 logo" style="height: 30px;">
                              </div>
                           </div>
                           <div class="hidden-xs flex-row align-items-center margin40b">
                              <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/envato/elements-logo.png" alt="Envato elements logo" style="height: 22px;">
                              <h3 class="text-medium margin0tb margin20lr normal">+</h3>
                              <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/logos/logo-header-color@2x.png" alt="Twenty20 logo" style="height: 30px;">
                           </div>
                           <h3 class="normal margin40b margin0t">
                              We think you may already have an account with Twenty20.
                           </h3>
                           <h5 class="normal margin20b">
                              Sign in with your Twenty20 credentials to merge your Envato and Twenty20 accounts
                           </h5>
                           <div class="container-fluid padding0lr-as">
                              <div class="flex-row justify-content-center">
                                 <div class="col-xs-12 col-sm-10 padding0lr-as">
                                    <!---->
                                    <form data-ember-action="" data-ember-action-27162="27162">
                                       <div class="form-group">
                                          <label for="email-verfication-input">
                                          Email
                                          </label>
                                          <input type="email" required="" id="ember27167" class="form-control ember-text-field -text-field-component ember-view">
                                       </div>
                                       <div class="form-group">
                                          <label for="password-verfication-input">
                                          Password
                                          </label>
                                          <div id="ember27176" class="password-input-wrapper password-input-component ember-view"><input name="password" type="password" required="" placeholder="Enter your password" id="password-verification-input" class="form-control ember-text-field -text-field-component ember-view"><button type="button" class="btn btn-link password-input-toggle"><span class="text-light t20icon t20icon-show-password"></span></button></div>
                                          <div class="margin10t margin50b">
                                             <a href="#" class="pull-right small " data-ember-action="" data-ember-action-27178="27178">
                                             Forgot Your Password?
                                             </a>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div id="ember27187" class="loading-button-component ember-view">
                                             <button style="" type="submit" class="btn btn-loading   btn btn-primary btn-block">
                                                <div id="ember27188" class="loading-spinner loading-spinner-component ember-view"></div>
                                                <div class="btn-loading-text">
                                                   <!---->Sign In
                                                </div>
                                             </button>
                                          </div>
                                       </div>
                                    </form>
                                    <div class="flex-row justify-content-center margin30t">
                                       <div id="ember27189" class="click-tracker-component ember-view">                        <a href="#" class="small " data-ember-action="" data-ember-action-27190="27190">
                                          No thanks, don't merge my accounts.
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!---->
            <section id="ember27195" class="notifications-list notifications-list-component ember-view">
               <!---->
            </section>
            <div id="ember27196" class="collect-modal-component ember-view">
               <!---->
            </div>
            <div id="ember27197" class="update-credit-card-modal-component ember-view">
               <div id="update-credit-card-modal" aria-hidden="false" role="dialog" tabindex="-1" class="modal fade">
                  <div class="modal-dialog modal-md">
                     <div class="modal-content">
                        <div style="padding: 20px;" class="modal-header">
                           <button style="position: relative; top: 4px;" class="close" data-ember-action="" data-ember-action-27198="27198">×</button>
                           <h4 class="margin0tb">Please update your credit card.</h4>
                        </div>
                        <div class="modal-body clearfix text-center">
                           <img style="height: 100px;" src="https://dp3ogl28gtjh0.cloudfront.net/digital/icons/credit-card-icon@2x.png" class="margin20b">
                           <h5 class="text-center">There is a issue processing your credit card.</h5>
                           <p class="text-center">Please take a moment and update your information.</p>
                        </div>
                        <div class="modal-footer">
                              
                           <div class="row">
                              <div class="col-sm-6">
                                 <p style="line-height: 18px; font-size: 14px;" class="text-dark text-left">Note: After updating your credit card, invoices will be updated within 1 hour.</p>
                              </div>
                              <div class="col-sm-6"><button class="btn btn-sm btn-primary" data-ember-action="" data-ember-action-27199="27199">Update credit card</button></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> --}}
         <div id="wh-modals"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>

      </div>
            </div> 


      <script type="text/javascript">

var image_size = '450';

  $('.size-con').click(function(event) {

        image_size = $(this).find('.price').find('span').text();
         $('label').removeClass("checked");
         $(this).find('label').addClass("checked");

        $('#dis_pay').text($(this).find('.price').text());
  });


      $("#add_to_cart").click(function(){

      
        $.ajax({
        url: '{{ route('add-cart') }}',
        type: 'POST',
        data: {

          upload_id: $(this).data('id'),
          _token: '{{csrf_token()}}',
          size: $("#dis_pay").text(),

        },
        success: function(response){
          if(response !="")
          {
            
            $('#cart_count').html(response);

            // $('#my_alert').css("display","block");

        //     setTimeout(function(){
        //          $('#my_alert').fadeOut('fast');
            
        // }, 2000);

          $('#checkout_div').css("display","block");
          
          $('#add_to_cart_div').css("display","none");
        }

        },
        error: function(jqXHR, textStatus, errorThrown){
          console.log(errorThrown);
          alert(errorThrown);
        }
      });

        return false;
    });



  $(".like_image").click(function(){
             
          $upload = $(this);

          var image_id = $(this).data('id');

          console.log("image-id "+image_id);


      $.ajax({
        url: '{{ route('add-like') }}',
        type: 'POST',
        data: {
          'liked': 1,
          upload_id: image_id,
          _token: '{{csrf_token()}}'
        },
        success: function(response){
          if(response !="")
          {

            $('#likes_count').text(response);
            
             $("#like_main").removeClass("t20icon-love-outline");
	          $("#like_main").addClass("t20icon-love");
	          $("#like_main").css("color", "#ff00ff");

        }

        },
        error: function(jqXHR, textStatus, errorThrown){
          console.log(errorThrown);
          if(errorThrown == "Unauthorized")
          {
            window.location.href =  '{{ route('modall') }}';
          }
          // alert('An error occured');
        }
      });

  });

  // $("#login").click(function(){
    
  // 		Swal.fire({
  //          title: 'Unauthorized',
  //          text: 'Please, login first!',
  //          icon: 'error',
  //      })

  // });

  $(document).ready(function() {
                  $("#login").click(function(){

                    // document.getElementById("ember446").style.display = 'block';

                      $("#gated-home-auth-modal").css("display","block");
                      console.log('dkkdkd');
                  }); 

                  $("#show_signup").click(function(){

                    // document.getElementById("ember446").style.display = 'block';

                      $("#signup_div").css("display","block");
                      $("#signin_div").css("display","none");
                  }); 

                  $("#show_signin").click(function(){

                    // document.getElementById("ember446").style.display = 'block';

                      $("#signup_div").css("display","none");
                      $("#signin_div").css("display","block");
                  }); 
              });

</script>

   </body>
</html>
