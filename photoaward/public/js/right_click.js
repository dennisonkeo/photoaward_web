  //    window.onload = function() {
  //   document.addEventListener("contextmenu", function(e){
  //     e.preventDefault();
  //   }, false);
  //   document.addEventListener("keydown", function(e) {
  //   //document.onkeydown = function(e) {
  //     // "I" key
  //     if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
  //       disabledEvent(e);
  //     }
  //     // "J" key
  //     if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
  //       disabledEvent(e);
  //     }
  //     // "S" key + macOS
  //     if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
  //       disabledEvent(e);
  //     }
  //     // "U" key
  //     if (e.ctrlKey && e.keyCode == 85) {
  //       disabledEvent(e);
  //     }
  //     // "F12" key
  //     if (event.keyCode == 123) {
  //       disabledEvent(e);
  //     }
  //   }, false);
  //   function disabledEvent(e){
  //     if (e.stopPropagation){
  //       e.stopPropagation();
  //     } else if (window.event){
  //       window.event.cancelBubble = true;
  //     }
  //     e.preventDefault();
  //     return false;
  //   }
  // };

  //Disable right mouse click Script

var message="Function Disabled!";

function clickIE4(){
if (event.button==2){
// alert(message);
return false;
 }
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
// alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("return false")