var header = document.getElementById("header");
var main=document.getElementById("main");


function resize_main(){
    var header_height = header.clientHeight;
    main.style.paddingTop = header_height+"px";
}

window.addEventListener("load",resize_main);
window.addEventListener("resize",resize_main);